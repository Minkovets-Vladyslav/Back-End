<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fileToSort = 'words.txt';
    $sortedFile = 'sorted_words.txt';

    if (file_exists($fileToSort)) {
        $words = explode(' ', file_get_contents($fileToSort));
        sort($words);
        file_put_contents($sortedFile, implode(PHP_EOL, $words));
        echo "Слова відсортовано і збережено у файлі $sortedFile.";
    } else {
        echo "Файл $fileToSort не знайдено.";
    }
}

