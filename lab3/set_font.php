<?php
$size = isset($_GET['size']) ? $_GET['size'] : 'medium';
setcookie('font_size', $size, time() + (86400 * 30), "/");

header('Location: index.php');
exit;
