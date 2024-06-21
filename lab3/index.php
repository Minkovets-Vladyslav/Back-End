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
    </style>
</head>
<body>


<button class="accordion">Завдання 1. Робота з cookie</button>
<div class="panel">
    <p><a href="set_font.php?size=large">Великий шрифт</a></p>
    <p><a href="set_font.php?size=medium">Середній шрифт</a></p>
    <p><a href="set_font.php?size=small">Маленький шрифт</a></p>
</div>

<button class="accordion">Завдання 2. Робота з session</button>
<div class="panel">
    <?php
    session_start();

    if (isset($_SESSION['login']) && $_SESSION['login'] === 'Admin') {
        echo "<p>Добрий день, Admin!</p>";
        echo "<p><a href='logout.php'>Вийти</a></p>";
    } else {
        ?>
        <form method="post" action="login.php">
            <label>Логін:</label>
            <input type="text" name="login"><br>
            <label>Пароль:</label>
            <input type="password" name="password"><br>
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
        <label>Ім'я:</label>
        <input type="text" name="name"><br>
        <label>Коментар:</label><br>
        <textarea name="comment" rows="4" cols="50"></textarea><br>
        <input type="submit" value="Зберегти коментар">
    </form>

    <h3>2. Опрацювання файлів зі словами</h3>
    <form method="post" action="process_files.php">
        <label>Ім'я файлу:</label>
        <input type="text" name="filename"><br>
        <input type="submit" value="Обробити файл">
    </form>

    <h3>3. Впорядкування слів за алфавітом</h3>
    <form method="post" action="sort_words.php">
        <label>Ім'я файлу:</label>
        <input type="text" name="filename"><br>
        <input type="submit" value="Впорядкувати слова">
    </form>
</div>

<button class="accordion">Завдання 4. Передача файлів через форми</button>
<div class="panel">
    <form action="upload_images.php" method="post" enctype="multipart/form-data">
        <label>Виберіть зображення для завантаження:</label>
        <input type="file" name="image"><br>
        <input type="submit" value="Завантажити зображення">
    </form>
</div>

<button class="accordion">Завдання 5. Робота з каталогами</button>
<div class="panel">
    <h3>1. Створення папок</h3>
    <form method="post" action="create_folders.php">
        <label>Логін:</label>
        <input type="text" name="login"><br>
        <label>Пароль:</label>
        <input type="password" name="password"><br>
        <input type="submit" value="Створити папку">
    </form>

    <h3>2. Видалення папок</h3>
    <form method="post" action="delete_folder.php">
        <label>Логін:</label>
        <input type="text" name="login"><br>
        <label>Пароль:</label>
        <input type="password" name="password"><br>
        <input type="submit" value="Видалити папку">
    </form>
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
