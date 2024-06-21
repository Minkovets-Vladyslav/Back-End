<?php
/**
 * Функція для автопідключення класів за їх іменем та розташуванням
 * @param string $class_name Ім'я класу для підключення
 */
function autoloadClasses($class_name) {
    $class_file = __DIR__ . '/' . str_replace('\\', '/', $class_name) . '.php';
    if (file_exists($class_file)) {
        include $class_file;
    }
}

spl_autoload_register('autoloadClasses');
