<?php
session_start();


$commentsFile = 'comments.txt';
$comments = [];
if (file_exists($commentsFile)) {
    $file = fopen($commentsFile, 'r');
    while (($line = fgets($file)) !== false) {
        list($name, $comment) = explode(':', $line);
        $comments[] = ['name' => $name, 'comment' => $comment];
    }
    fclose($file);
}

$filesContent = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['process_files'])) {
        include 'process_files.php';

        // Отримання вмісту файлів
        $resultFiles = ['unique_to_file1.txt', 'common_to_both.txt', 'more_than_twice.txt'];
        foreach ($resultFiles as $file) {
            if (file_exists($file)) {
                $filesContent[$file] = file_get_contents($file);
            }
        }
    } elseif (isset($_POST['sort_words'])) {
        include 'sort_words.php';
    }
}
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторна 3</title>
    <style>
        .accordion {
            background-color: #eee;
            color: #444;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            text-align: left;
            border: none;
            outline: none;
            transition: 0.4s;
        }

        .active, .accordion:hover {
            background-color: #ccc;
        }

        .panel {
            padding: 0 18px;
            display: none;
            background-color: white;
            overflow: hidden;
        }

        .small-font {
            font-size: 12px;
        }
        .medium-font {
            font-size: 16px;
        }
        .large-font {
            font-size: 20px;
        }
        table {
            width: 30%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body class="<?php echo isset($_COOKIE['font_size']) ? $_COOKIE['font_size'] . '-font' : 'medium-font'; ?>">


<button class="accordion">Завдання 1. Робота з cookie</button>
<div class="panel">
    <p><a href="set_font.php?size=large">Великий шрифт</a></p>
    <p><a href="set_font.php?size=medium">Середній шрифт</a></p>
    <p><a href="set_font.php?size=small">Маленький шрифт</a></p>
</div>

<button class="accordion">Завдання 2. Робота з session</button>
<div class="panel">
    <?php

    if (isset($_SESSION['login']) && $_SESSION['login'] === 'Admin') {
        echo "<p>Добрий день, Admin!</p>";
        echo '<p><a href="logout.php">Вийти</a></p>';
    } else {
        ?>
        <form method="post" action="login.php">
            <label for="login1">Логін:</label>
            <input type="text" name="login" id="login1"><br>
            <label for="password1">Пароль:</label>
            <input type="password" name="password" id="password1"><br>
            <input type="submit" value="Увійти">
        </form>
        <?php
    }
    ?>
</div>

<button class="accordion">Завдання 3. Робота з файлами</button>
<div class="panel">
    <h3>1. Запис коментарів у файл</h3>
    <form method="post" action="write_comments.php">
        <label for="name">Ім'я:</label>
        <input type="text" name="name" id="name"><br>
        <label for="comment">Коментар:</label><br>
        <textarea name="comment" id="comment" rows="4" cols="50"></textarea><br>
        <input type="submit" value="Зберегти коментар">
    </form>
    <h3>Коментарі</h3>
    <?php if (!empty($comments)): ?>
        <table>
            <tr>
                <th>Ім’я</th>
                <th>Коментар</th>
            </tr>
            <?php foreach ($comments as $comment): ?>
                <tr>
                    <td><?php echo htmlspecialchars($comment['name']); ?></td>
                    <td><?php echo htmlspecialchars($comment['comment']); ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>Немає коментарів.</p>
    <?php endif; ?>

    <h3>2. Опрацювання файлів зі словами</h3>
    <form action="index.php" method="post">
        <input type="hidden" name="process_files" value="1">
        <label for="filename">Ім’я файлу для видалення:</label>
        <input type="text" id="filename" name="filename" required>
        <input type="submit" name="delete_file" value="Видалити">
    </form>

    <?php if (!empty($filesContent)): ?>
        <h2>Результати обробки файлів</h2>
        <table>
            <tr>
                <th>Назва файлу</th>
                <th>Вміст файлу</th>
            </tr>
            <?php foreach ($filesContent as $file => $content): ?>
                <tr>
                    <td><?php echo htmlspecialchars($file); ?></td>
                    <td><pre><?php echo htmlspecialchars($content); ?></pre></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <h3>3. Впорядкування слів за алфавітом</h3>
    <form action="index.php" method="post">
        <input type="hidden" name="sort_words" value="1">
        <input type="submit" value="Сортувати слова у файлі">
    </form>
</div>

<button class="accordion">Завдання 4. Передача файлів через форми</button>
<div class="panel">
    <form action="upload_images.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image" id="image" accept="image/*" required>
        <br>
        <input type="submit" value="Завантажити зображення" name="submit">
    </form>
    <?php if (isset($_GET['message'])): ?>
        <div class="message"><?php echo htmlspecialchars($_GET['message']); ?></div>
    <?php endif; ?>
</div>

<button class="accordion">Завдання 5. Робота з каталогами</button>
<div class="panel">
    <h3>Створення папок</h3>
    <form action="process_create_user.php" method="post">
        <label for="login">Логін:</label>
        <input type="text" id="login" name="login" required><br><br>
        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Створити користувача">
    </form>

    <h3>Видалення папок</h3>
    <a href="delete.php">Сторінка для видалення папок</a>
</div>

<script>
    let acc = document.getElementsByClassName("accordion");
    let i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            let panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }
</script>

</body>
</html>
