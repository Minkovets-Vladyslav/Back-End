<?php
/**
 * Клас для роботи з текстовими файлами
 */
class TextFileHandler {
    /** @var string $dir Директорія для файлів */
    public static $dir = "text/";

    /**
     * Метод для читання вмісту файлу
     * @param string $filename Назва файлу для читання
     * @return string|null Вміст файлу або null, якщо файл не знайдено
     */
    public static function readFile($filename) {
        $file_path = self::$dir . $filename;
        if (file_exists($file_path)) {
            return file_get_contents($file_path);
        }
        return null;
    }

    /**
     * Метод для запису в файл
     * @param string $filename Назва файлу для запису
     * @param string $content Зміст для запису
     * @return bool true, якщо запис успішний, інакше false
     */
    public static function writeFile($filename, $content) {
        $file_path = self::$dir . $filename;
        return file_put_contents($file_path, $content, FILE_APPEND) !== false;
    }

    /**
     * Метод для очищення вмісту файлу
     * @param string $filename Назва файлу для очищення
     * @return bool true, якщо очищення успішне, інакше false
     */
    public static function clearFile($filename) {
        $file_path = self::$dir . $filename;
        return file_put_contents($file_path, '') !== false;
    }
}

