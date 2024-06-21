<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = isset($_POST['login']) ? $_POST['login'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    if ($login === 'Admin' && $password === 'password') {
        $userDir = 'users/' . $login . '/';
        if (!is_dir($userDir)) {
            if (!mkdir($userDir) && !is_dir($userDir)) {
                throw new \RuntimeException(sprintf('Directory "%s" was not created', $userDir));
            }
            if (!mkdir($concurrentDirectory = $userDir . 'video') && !is_dir($concurrentDirectory)) {
                throw new \RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
            }
            if (!mkdir($concurrentDirectory = $userDir . 'music') && !is_dir($concurrentDirectory)) {
                throw new \RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
            }
            if (!mkdir($concurrentDirectory = $userDir . 'photo') && !is_dir($concurrentDirectory)) {
                throw new \RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
            }
            file_put_contents($userDir . 'video/video.txt', 'Sample video file');
            file_put_contents($userDir . 'music/music.txt', 'Sample music file');
            file_put_contents($userDir . 'photo/photo.txt', 'Sample photo file');
            echo "Папка створена успішно.";
        } else {
            echo "Папка вже існує.";
        }
    } else {
        echo "Невірний логін або пароль.";
    }
}

header('Location: index.php');
exit;
?>
