<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab2</title>
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

<button class="accordion">Завдання 1. Робота з рядками</button>
<div class="panel">
    <h3>1. Заміна символів</h3>

    <form method="post">
        <label>Текст:</label>
        <input type="text" name="text"><br>
        <label>Знайти:</label>
        <input type="text" name="find"><br>
        <label>Замінити:</label>
        <input type="text" name="replace"><br>
        <input type="submit" value="Замінити">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["text"]) && isset($_POST["find"]) && isset($_POST["replace"])) {
        $text = $_POST["text"];
        $find = $_POST["find"];
        $replace = $_POST["replace"];
        $result = str_replace($find, $replace, $text);
        echo "<label>Результат:</label>";
        echo "<input type='text' value='$result'>";
    }
    ?>

    <h3>2. Сортування міст</h3>
    <form method="post">
        <label>Назви міст:</label>
        <input type="text" name="cities"><br>
        <input type="submit" value="Сортувати">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["cities"])) {
        $cities = explode(" ", $_POST["cities"]);
        sort($cities);
        $result = implode(" ", $cities);
        echo "<label>Результат:</label>";
        echo "<input type='text' value='$result'>";
    }
    ?>


    <h3>3. Виділення імені файлу без розширення</h3>
    <?php
    $path = "D:\\WebServers\\home\\testsite\\www\\myfile.txt";
    $filename = basename($path, ".txt");
    echo "Ім'я файлу без розширення: $filename";
    ?>


    <h3>4. Визначення кількості днів між датами</h3>
    <form method="post">
        <label>Дата 1 (День-Місяць-Рік):</label>
        <input type="text" name="date1"><br>
        <label>Дата 2 (День-Місяць-Рік):</label>
        <input type="text" name="date2"><br>
        <input type="submit" value="Обчислити">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["date1"]) && isset($_POST["date2"])) {
        $date1 = $_POST["date1"];
        $date2 = $_POST["date2"];
        $datetime1 = DateTime::createFromFormat('d-m-Y', $date1);
        $datetime2 = DateTime::createFromFormat('d-m-Y', $date2);
        $interval = $datetime1->diff($datetime2);
        echo "Кількість днів між датами: " . $interval->days;
    }
    ?>

    <h3>5. Генератор паролів</h3>
    <form method="post">
        <label>Довжина паролю:</label>
        <input type="number" name="length" value="10"><br>
        <input type="submit" value="Згенерувати">
    </form>
    <?php
    function generatePassword($length) {
        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';
        $password = substr(str_shuffle($chars), 0, $length);
        return $password;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["length"])) {
        $length = $_POST["length"];
        $password = generatePassword($length);
        echo "Випадковий пароль: $password";
    }
    ?>

    <h3>Перевірка міцності пароля</h3>
    <form method="post">
        <label>Пароль:</label>
        <input type="text" name="password"><br>
        <input type="submit" value="Перевірити">
    </form>
    <?php
    function isStrongPassword($password) {
        $containsUppercase = preg_match('/[A-Z]/', $password);
        $containsLowercase = preg_match('/[a-z]/', $password);
        $containsDigit = preg_match('/\d/', $password);
        $containsSpecialChar = preg_match('/[\W_]/', $password);
        $isLongEnough = strlen($password) >= 8;
        return $containsUppercase && $containsLowercase && $containsDigit && $containsSpecialChar && $isLongEnough;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["password"])) {
        $password = $_POST["password"];
        if (isStrongPassword($password)) {
            echo "Пароль достатньо міцний.";
        } else {
            echo "Пароль недостатньо міцний.";
        }
    }
    ?>
</div>

<button class="accordion">Завдання 2. Робота з масивами</button>
<div class="panel">
    <h3>1. Виведення повторюваних елементів масиву</h3>

    <?php
    function findDuplicates($array) {
        $duplicates = array();
        $counts = array_count_values($array);
        foreach ($counts as $key => $value) {
            if ($value > 1) {
                $duplicates[] = $key;
            }
        }
        return $duplicates;
    }

    $array = array(1, 2, 2, 3, 4, 5, 5, 6);
    $duplicates = findDuplicates($array);
    echo "Повторювані елементи: ";
    print_r($duplicates);
    ?>

    <h3>2. Генератор імен для тварин</h3>

    <?php
    function generatePetName($syllables) {
        shuffle($syllables);
        return implode("", array_slice($syllables, 0, rand(2, 4)));
    }

    $syllables = array("ba", "na", "ra", "ma", "la", "ka", "ta");
    $petName = generatePetName($syllables);
    echo "Згенероване ім'я: $petName";
    ?>

    <h3>3. Створення масивів та їх об'єднання</h3>
    <?php
    function createArray() {
        $length = rand(3, 7);
        $array = array();
        for ($i = 0; $i < $length; $i++){
            $array[] = rand(10, 20);
        }
        return $array;
    }

    function mergeAndProcessArrays($array1, $array2) {
        $mergedArray = array_unique(array_merge($array1, $array2));
        sort($mergedArray);
        return $mergedArray;
    }

    $array1 = createArray();
    $array2 = createArray();

    echo "Масив 1: ";
    print_r($array1);
    echo "<br>Масив 2: ";
    print_r($array2);

    $resultArray = mergeAndProcessArrays($array1, $array2);
    echo "<br>Об'єднаний масив: ";
    print_r($resultArray);
    ?>

    <h3>4. Сортування асоціативного масиву</h3>
    <?php
    $users = array(
        "Alice" => 25,
        "Bob" => 30,
        "Charlie" => 20
    );

    function sortAssociativeArray(&$array, $sortBy) {
        if ($sortBy == "name") {
            ksort($array);
        } elseif ($sortBy == "age") {
            asort($array);
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["sortBy"])) {
        $sortBy = $_POST["sortBy"];
        sortAssociativeArray($users, $sortBy);
    }
    ?>

    <form method="post">
        <label>Сортувати за:</label>
        <select name="sortBy">
            <option value="name">Ім'ям</option>
            <option value="age">Віком</option>
        </select>
        <input type="submit" value="Сортувати">
    </form>
    <br>
    <?php
    echo "Відсортований масив: ";
    print_r($users);
    ?>
</div>

<button class="accordion">Завдання 3. Робота з формою</button>
<div class="panel">
    <h3>Форма завантаження файлів</h3>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label>Ім'я:</label>
        <input type="text" name="name"><br>
        <label>Email:</label>
        <input type="email" name="email"><br>
        <label>Фотографія:</label>
        <input type="file" name="photo"><br>
        <input type="submit" value="Завантажити">
    </form>
</div>

<button class="accordion">Завдання 4. Робота з функціями</button>
<div class="panel">
    <h3>Функції</h3>
    <form method="post" action="calculate.php">
        <label>Число x:</label>
        <input type="text" name="x"><br>
        <label>Число y:</label>
        <input type="text" name="y"><br>
        <input type="submit" value="Обчислити">
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
