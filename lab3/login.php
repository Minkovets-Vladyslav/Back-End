<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $login = isset($_POST['login']) ? $_POST['login'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    if ($login === 'Admin' && $password === 'password') {
        $_SESSION['login'] = 'Admin';
    } else {
        echo "Невірний логін або пароль.";
    }
}

header('Location: index.php');
exit;
?>
