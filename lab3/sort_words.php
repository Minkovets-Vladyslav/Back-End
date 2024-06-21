<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $filename = isset($_POST['filename']) ? $_POST['filename'] : '';

    if (!empty($filename)) {
        $content = file_get_contents($filename);

        $words = explode(' ', $content);

        sort($words);

        $sorted_filename = 'sorted_' . basename($filename);

        file_put_contents($sorted_filename, implode(' ', $words));

        echo "Слова успішно впорядковані та збережені у файлі: <a href='$sorted_filename'>$sorted_filename</a><br>";
    }
}

header('Location: index.php');
exit;
?>
