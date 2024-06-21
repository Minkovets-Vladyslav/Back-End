<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $userDir = "./users/$login";
    if (file_exists($userDir)) {
        die("Папка з ім'ям \"$login\" вже існує.");
    }

    if (!mkdir($userDir) && !is_dir($userDir)) {
        die("Помилка при створенні папки користувача \"$login\".");
    }

    $subDirs = ['video', 'music', 'photo'];
    foreach ($subDirs as $subDir) {
        if (!mkdir("$userDir/$subDir") && !is_dir("$userDir/$subDir")) {
            die("Помилка при створенні підпапки \"$subDir\" для користувача \"$login\".");
        }
    }

    file_put_contents("$userDir/video/video1.txt", "Відеофайл 1");
    file_put_contents("$userDir/music/song1.mp3", "Музичний файл 1");
    file_put_contents("$userDir/photo/photo1.jpg", "Фотографія 1");

    echo "Користувач \"$login\" успішно створений.";
} else {
    die("Невірний метод запиту.");
}

