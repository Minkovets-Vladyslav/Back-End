<!DOCTYPE html>
<html>
<head>
    <title>Лабораторна 1</title>
    <style>
        .accordion {
            background-color: #eee;
            color: #444;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            text-align: left;
            border: none;
            outline: none;
            transition: 0.4s;
        }

        .active, .accordion:hover {
            background-color: #ccc;
        }

        .panel {
            padding: 0 18px;
            display: none;
            background-color: white;
            overflow: hidden;
        }
    </style>
</head>
<body>
<button class="accordion">Завдання 2</button>
<div class="panel">
    <?php
    echo "Полину в мріях в купель океану,<br>
                      Відчую <b>шовковистість</b> глибини,<br>
                      Чарівні мушлі з дна собі дістану,<br>
                      Щоб <i><b>взимку</b></i>   <br>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>тішили</u><br>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;мене<br>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;вони…<br>";
    ?>
</div>
<button class="accordion">Завдання 3</button>
<div class="panel">
    <?php
    $uah = 1500;
    $exchangeRate = 29.41;
    $usd = $uah / $exchangeRate;
    echo "$uah грн. можна обміняти на " . round($usd, 2) . " долар";
    ?>
</div>
<button class="accordion">Завдання 4</button>
<div class="panel">
    <?php
    $month = 5;

    if ($month == 12 || $month == 1 || $month == 2) {
        echo "Зима";
    } elseif ($month >= 3 && $month <= 5) {
        echo "Весна";
    } elseif ($month >= 6 && $month <= 8) {
        echo "Літо";
    } elseif ($month >= 9 && $month <= 11) {
        echo "Осінь";
    } else {
        echo "Неправильний номер місяця";
    }
    ?>
</div>
<button class="accordion">Завдання 5</button>
<div class="panel">
    <?php
    $char = 'a';

    switch ($char) {
        case 'a':
        case 'e':
        case 'i':
        case 'o':
        case 'u':
        case 'A':
        case 'E':
        case 'I':
        case 'O':
        case 'U':
            echo "$char є голосною";
            break;
        default:
            echo "$char є приголосною";
            break;
    }
    ?>
</div>
<button class="accordion">Завдання 6</button>
<div class="panel">
    <?php
    $number = mt_rand(100, 999);
    echo "Число: $number<br>";

    $digits = str_split($number);
    $sum = array_sum($digits);
    echo "Сума цифр: $sum<br>";

    $reversed = implode('', array_reverse($digits));
    echo "Зворотній порядок: $reversed<br>";

    rsort($digits);
    $maxNumber = implode('', $digits);
    echo "Найбільше число: $maxNumber<br>";
    ?>
</div>
<button class="accordion">Завдання 7</button>
<div class="panel">
    
    <style>
        .row {
            display: flex;
        }

        .column {
            flex: 50%;
        }
        canvas {
            background-color: black;
        }
    </style>
    <div class="row">
        <div class="column">

            <h3>Завдання 7.1</h3>
            <style>
                table { border-collapse: collapse; }
                td { width: 50px; height: 50px; }
            </style>
            <?php
            function generateColorTable($rows, $cols) {
                echo "<table>";
                for ($i = 0; $i < $rows; $i++) {
                    echo "<tr>";
                    for ($j = 0; $j < $cols; $j++) {
                        $color = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
                        echo "<td style='background-color: $color;'></td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
            }

            generateColorTable(5, 5);
            ?>
        </div>

        <div class="column">

            <h3>Завдання 7.2</h3>
            <canvas id="myCanvas" width="400" height="400"></canvas>
            <script>
                function getRandomInt(min, max) {
                    return Math.floor(Math.random() * (max - min + 1)) + min;
                }

                function drawSquare(ctx, x, y, size) {
                    ctx.fillStyle = 'red';
                    ctx.fillRect(x, y, size, size);
                }

                window.onload = function() {
                    const canvas = document.getElementById('myCanvas');
                    const ctx = canvas.getContext('2d');

                    <?php
                    $n = 10;
                    for ($i = 0; $i < $n; $i++) {
                        $size = rand(20, 100);
                        $x = rand(0, 400 - $size);
                        $y = rand(0, 400 - $size);
                        echo "drawSquare(ctx, $x, $y, $size);\n";
                    }
                    ?>
                };
            </script>
        </div>
    </div>
    
    
</div>
<script>
    let acc = document.getElementsByClassName("accordion");
    let i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            let panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }
</script>
</body>
</html>
