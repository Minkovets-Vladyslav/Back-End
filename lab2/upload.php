<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];

    if (isset($_FILES['photo']) && $_FILES['photo']['error'] == 0) {
        $uploadDir = 'uploads/';
        if (!is_dir($uploadDir) && !mkdir($uploadDir, 0777, true) && !is_dir($uploadDir)) {
            throw new \RuntimeException(sprintf('Directory "%s" was not created', $uploadDir));
        }
        $uploadFile = $uploadDir . basename($_FILES['photo']['name']);

        if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadFile)) {
            $_SESSION['photo'] = $uploadFile;
            echo "Файл був успішно завантажений.";
        } else {
            echo "Можлива атака за допомогою файлового завантаження!";
        }
    }

    echo "<br>Ім'я: " . $_SESSION['name'];
    echo "<br>Email: " . $_SESSION['email'];
    if (isset($_SESSION['photo'])) {
        echo "<br><img src='" . $_SESSION['photo'] . "' alt='photo'>";
    }
}

echo "<br><a href='index.php'><button>Повернутися на головну сторінку</button></a>";

?>
