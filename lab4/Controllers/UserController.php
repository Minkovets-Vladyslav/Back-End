<?php

namespace Controllers;

/**
 * Class UserController
 * @package Controllers
 */
class UserController
{
    /**
     * Функція виведення повідомлення
     * @param string $message Повідомлення для виведення
     */
    public function showMessage($message) {
        echo $message;
    }
}
