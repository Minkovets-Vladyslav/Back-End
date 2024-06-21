<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['image'])) {
    $uploadDir = 'uploaded_images/';
    if (!is_dir($uploadDir) && !mkdir($uploadDir, 0777, true) && !is_dir($uploadDir)) {
        throw new \RuntimeException(sprintf('Directory "%s" was not created', $uploadDir));
    }
    $uploadFile = $uploadDir . basename($_FILES['image']['name']);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
        echo "Файл успішно завантажено.";
    } else {
        echo "Помилка завантаження файлу.";
    }
}

header('Location: index.php');
exit;
?>
