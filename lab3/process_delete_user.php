<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $userDir = "./users/$login";
    if (!file_exists($userDir)) {
        die("Папка з ім'ям \"$login\" не існує.");
    }

    if ($login !== $password) {
        die("Невірний пароль для користувача \"$login\".");
    }

    function deleteDirectory($dir) {
        if (!file_exists($dir)) {
            return true;
        }
        if (!is_dir($dir)) {
            return unlink($dir);
        }
        foreach (scandir($dir) as $item) {
            if ($item === '.' || $item === '..') {
                continue;
            }
            if (!deleteDirectory($dir . DIRECTORY_SEPARATOR . $item)) {
                return false;
            }
        }
        return rmdir($dir);
    }

    if (deleteDirectory($userDir)) {
        echo "Папка користувача \"$login\" успішно видалена.";
    } else {
        echo "Помилка при видаленні папки користувача \"$login\".";
    }
} else {
    die("Невірний метод запиту.");
}

