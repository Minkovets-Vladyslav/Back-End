<?php

/**
 * Клас студента, який успадковує клас Human і реалізує інтерфейс HouseCleaning
 */
class Student extends Human implements HouseCleaning {
    /** @var string $university Назва ВНЗ */
    private $university;
    /** @var int $course Курс студента */
    private $course;

    /**
     * Отримує значення назви ВНЗ
     * @return string Назва ВНЗ
     */
    public function getUniversity() {
        return $this->university;
    }

    /**
     * Встановлює значення назви ВНЗ
     * @param string $university Нове значення для назви ВНЗ
     */
    public function setUniversity($university) {
        $this->university = $university;
    }

    /**
     * Отримує значення курсу
     * @return int Курс студента
     */
    public function getCourse() {
        return $this->course;
    }

    /**
     * Встановлює значення курсу
     * @param int $course Нове значення для курсу
     */
    public function setCourse($course) {
        $this->course = $course;
    }

    /**
     * Метод для переведення студента на новий курс
     */
    public function moveToNextCourse() {
        $this->course++;
    }

    /**
     * Реалізація методу прибирання кімнати з інтерфейсу HouseCleaning
     * @return string Рядок з результатом прибирання кімнати
     */
    public function cleanRoom() {
        return "Студент прибирає кімнату";
    }

    /**
     * Реалізація методу прибирання кухні з інтерфейсу HouseCleaning
     * @return string Рядок з результатом прибирання кухні
     */
    public function cleanKitchen() {
        return "Студент прибирає кухню";
    }
}

