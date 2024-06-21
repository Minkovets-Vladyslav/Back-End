<?php

/**
 * Абстрактний клас для людини
 */
abstract class Human {
    /** @var float $height Зріст людини */
    protected $height;
    /** @var float $weight Вага людини */
    protected $weight;
    /** @var int $age Вік людини */
    protected $age;

    /**
     * Отримує значення зросту
     * @return float Зріст людини
     */
    public function getHeight() {
        return $this->height;
    }

    /**
     * Встановлює значення зросту
     * @param float $height Нове значення для зросту
     */
    public function setHeight($height) {
        $this->height = $height;
    }

    /**
     * Отримує значення ваги
     * @return float Вага людини
     */
    public function getWeight() {
        return $this->weight;
    }

    /**
     * Встановлює значення ваги
     * @param float $weight Нове значення для ваги
     */
    public function setWeight($weight) {
        $this->weight = $weight;
    }

    /**
     * Отримує значення віку
     * @return int Вік людини
     */
    public function getAge() {
        return $this->age;
    }

    /**
     * Встановлює значення віку
     * @param int $age Нове значення для віку
     */
    public function setAge($age) {
        $this->age = $age;
    }
}

