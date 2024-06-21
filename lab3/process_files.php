<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $filename = isset($_POST['filename']) ? $_POST['filename'] : '';

    if (!empty($filename)) {
        $file1 = 'file1.txt';
        $file2 = 'file2.txt';

        $words1 = file_get_contents($file1);
        $words2 = file_get_contents($file2);

        $words1_array = explode(' ', $words1);
        $words2_array = explode(' ', $words2);

        $unique_in_file1 = array_diff($words1_array, $words2_array);
        $unique_in_file2 = array_diff($words2_array, $words1_array);
        $common_words = array_intersect($words1_array, $words2_array);

        $file_unique_in_file1 = 'unique_in_file1.txt';
        $file_unique_in_file2 = 'unique_in_file2.txt';
        $file_common_words = 'common_words.txt';

        file_put_contents($file_unique_in_file1, implode(' ', $unique_in_file1));
        file_put_contents($file_unique_in_file2, implode(' ', $unique_in_file2));
        file_put_contents($file_common_words, implode(' ', $common_words));

        echo "Файли успішно створені: <br>";
        echo "<a href='$file_unique_in_file1'>$file_unique_in_file1</a><br>";
        echo "<a href='$file_unique_in_file2'>$file_unique_in_file2</a><br>";
        echo "<a href='$file_common_words'>$file_common_words</a><br>";
    }
}

header('Location: index.php');
exit;
?>
