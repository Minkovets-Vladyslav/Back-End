<?php
require 'Function/func.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $x = $_POST['x'];
    $y = $_POST['y'];

    echo "sin(x): " . sin($x) . "<br>";
    echo "cos(x): " . cos($x) . "<br>";
    echo "tg(x): " . tg($x) . "<br>";
    echo "my_tg(x): " . my_tg($x) . "<br>";
    echo "x^y: " . xy($x, $y) . "<br>";
    echo "x!: " . factorial($x) . "<br>";
}

echo "<br><a href='index.php'><button>Повернутися на головну сторінку</button></a>";

?>
