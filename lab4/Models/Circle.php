<?php

namespace Models;
/**
 * Клас Circle для роботи з колом
 */
class Circle
{
    /** @var float $x Координата X центра кола */
    private $x;
    /** @var float $y Координата Y центра кола */
    private $y;
    /** @var float $radius Радіус кола */
    private $radius;

    /**
     * Конструктор класу Circle
     * @param float $x Координата X центра кола
     * @param float $y Координата Y центра кола
     * @param float $radius Радіус кола
     */
    public function __construct($x, $y, $radius)
    {
        $this->x = $x;
        $this->y = $y;
        $this->radius = $radius;
    }

    /**
     * Повертає рядок з описом кола
     * @return string Рядок з описом кола
     */
    public function __toString()
    {
        return "Коло з центром в ($this->x, $this->y) і радіусом $this->radius";
    }

    /**
     * Отримує значення координати X центра кола
     * @return float Координата X центра кола
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * Встановлює значення координати X центра кола
     * @param float $x Нове значення для координати X центра кола
     */
    public function setX($x)
    {
        $this->x = $x;
    }

    /**
     * Отримує значення координати Y центра кола
     * @return float Координата Y центра кола
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * Встановлює значення координати Y центра кола
     * @param float $y Нове значення для координати Y центра кола
     */
    public function setY($y)
    {
        $this->y = $y;
    }

    /**
     * Отримує значення радіуса R кола
     * @return float Радіус R кола
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * Встановлює значення радіуса R кола
     * @param float $r Нове значення радіуса R кола
     */
    public function setRadius($r)
    {
        $this->radius = $r;
    }

    /**
     * Перевіряє, чи перетинаються два кола
     * @param Circle $circle Інше коло для порівняння
     * @return bool true, якщо кола перетинаються, інакше false
     */
    public function intersects(Circle $circle)
    {
        $distance = sqrt(pow($this->x - $circle->getX(), 2) + pow($this->y - $circle->getY(), 2));
        return $distance < ($this->radius + $circle->getRadius());
    }

}

