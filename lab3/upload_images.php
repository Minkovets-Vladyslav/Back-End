<?php
$targetDirectory = "uploaded_images/";
$targetFile = $targetDirectory . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

if (file_exists($targetFile)) {
    $message = "Файл з таким ім'ям вже існує.";
    $uploadOk = 0;
}else{
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $message = "Файл не є зображенням.";
        $uploadOk = 0;
    }

    if ($_FILES["image"]["size"] > 5000000) { // 5 MB
        $message = "Вибачте, ваш файл занадто великий.";
        $uploadOk = 0;
    }

    if ($uploadOk === 0) {
        $message = "Ваш файл не було завантажено через помилку.";
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            $message = "Файл " . htmlspecialchars(basename($_FILES["image"]["name"])) . " було успішно завантажено.";
        } else {
            $message = "Сталася помилка при завантаженні вашого файлу.";
        }
    }
}

header("Location: index.php?message=" . urlencode($message));
exit;

