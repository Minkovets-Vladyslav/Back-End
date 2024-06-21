<?php

namespace Views;

/**
 * Class UserView
 * @package Views
 */
class UserView
{
    /**
     * Функція виведення повідомлення
     * @param string $message Повідомлення для виведення
     */
    public function showMessage($message) {
        echo $message;
    }
}