<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $file1 = 'file1.txt';
    $file2 = 'file2.txt';
    $resultFile1 = 'unique_to_file1.txt';
    $resultFile2 = 'common_to_both.txt';
    $resultFile3 = 'more_than_twice.txt';

    $words1 = file_exists($file1) ? explode(' ', file_get_contents($file1)) : [];
    $words2 = file_exists($file2) ? explode(' ', file_get_contents($file2)) : [];

    $uniqueToFile1 = array_diff($words1, $words2);

    $commonToBoth = array_intersect($words1, $words2);

    $wordsCount1 = array_count_values($words1);
    $wordsCount2 = array_count_values($words2);

    $moreThanTwice = array_filter(array_merge($wordsCount1, $wordsCount2), static function($count) {
        return $count > 2;
    });

    file_put_contents($resultFile1, implode(PHP_EOL, $uniqueToFile1));
    file_put_contents($resultFile2, implode(PHP_EOL, $commonToBoth));
    file_put_contents($resultFile3, implode(PHP_EOL, array_keys($moreThanTwice)));


    if (!empty($_POST['filename'])) {
        $fileToDelete = $_POST['filename'];
        if (file_exists($fileToDelete)) {
            unlink($fileToDelete);
            echo "Файл $fileToDelete успішно видалено.";
        } else {
            echo "Файл $fileToDelete не знайдено.";
        }
    }
}

