<?php
function my_sin($x) {
    return sin($x);
}

function my_cos($x) {
    return cos($x);
}

function tg($x) {
    return tan($x);
}

function my_tg($x) {
    return tan($x);
}

function xy($x, $y) {
    return pow($x, $y);
}

function factorial($x) {
    if ($x == 0) {
        return 1;
    } else {
        return $x * factorial($x - 1);
    }
}
?>
