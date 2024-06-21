<?php

/**
 * Інтерфейс для прибирання будинку
 */
interface HouseCleaning {
    /**
     * Метод для прибирання кімнати
     * @return string Рядок з результатом прибирання кімнати
     */
    public function cleanRoom();

    /**
     * Метод для прибирання кухні
     * @return string Рядок з результатом прибирання кухні
     */
    public function cleanKitchen();
}

