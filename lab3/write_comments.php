<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $comment = isset($_POST['comment']) ? $_POST['comment'] : '';

    $filename = 'comments.txt';
    $fp = fopen($filename, 'a');
    fwrite($fp, "$name: $comment\n");
    fclose($fp);
}

header('Location: index.php');
exit;

