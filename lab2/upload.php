<?php
session_start();

if (isset($_FILES['photo']) && $_FILES['photo']['error'] === 0) {
    $uploadDirectory = 'uploads/';
    $uploadedFilePath = $uploadDirectory . basename($_FILES['photo']['name']);
    move_uploaded_file($_FILES['photo']['tmp_name'], $uploadedFilePath);
} else {
    $uploadedFilePath = null;
}

$_SESSION['login'] = $_POST['login'];
$_SESSION['password'] = $_POST['password'];
$_SESSION['confirm_password'] = $_POST['confirm_password'];
$_SESSION['gender'] = $_POST['gender'];
$_SESSION['city'] = $_POST['city'];
$_SESSION['games'] = isset($_POST['games']) ? $_POST['games'] : [];
$_SESSION['about'] = $_POST['about'];
$_SESSION['photo'] = $uploadedFilePath;

?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Результати форми</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 50%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Результати форми</h1>
        <p><strong>Логін:</strong> <?php echo htmlspecialchars($_POST['login']); ?></p>
        <p><strong>Пароль:</strong> <?php echo htmlspecialchars($_POST['password']); ?></p>
        <p><strong>Повторний пароль:</strong> <?php echo htmlspecialchars($_POST['confirm_password']); ?></p>
        <p><strong>Стать:</strong> <?php echo htmlspecialchars($_POST['gender']); ?></p>
        <p><strong>Місто:</strong> <?php echo htmlspecialchars($_POST['city']); ?></p>
        <p><strong>Улюблена гра:</strong> <?php echo htmlspecialchars(isset($_POST['games']) ? array_values($_POST['games'])[0] : "нема"); ?></p>
        <p><strong>Про себе:</strong> <?php echo htmlspecialchars($_POST['about']); ?></p>
        <p><strong>Фото:</strong> <?php echo $uploadedFilePath; ?></p>
<?php
echo "<br><a href='form.php'><button>Повернутися на головну сторінку</button></a>";
?>
