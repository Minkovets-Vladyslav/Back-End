<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = isset($_POST['login']) ? $_POST['login'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    if ($login === 'Admin' && $password === 'password') {
        $userDir = 'users/' . $login . '/';
        if (is_dir($userDir)) {
            $files = glob($userDir . '*', GLOB_MARK);
            foreach ($files as $file) {
                unlink($file);
            }
            rmdir($userDir);
            echo "Папка видалена успішно.";
        } else {
            echo "Папка не знайдена.";
        }
    } else {
        echo "Невірний логін або пароль.";
    }
}

header('Location: index.php');
exit;
?>
