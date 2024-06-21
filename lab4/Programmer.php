<?php

/**
 * Клас програміста, який успадковує клас Human і реалізує інтерфейс HouseCleaning
 */
class Programmer extends Human implements HouseCleaning {
    /** @var array $programmingLanguages Масив з мовами програмування */
    private $programmingLanguages;
    /** @var int $experience Досвід роботи */
    private $experience;

    /**
     * Отримує масив з мовами програмування
     * @return array Масив з мовами програмування
     */
    public function getProgrammingLanguages() {
        return $this->programmingLanguages;
    }

    /**
     * Додає нову мову програмування до масиву
     * @param string $language Нова мова програмування
     */
    public function addProgrammingLanguage($language) {
        $this->programmingLanguages[] = $language;
    }

    /**
     * Отримує значення досвіду роботи
     * @return int Досвід роботи
     */
    public function getExperience() {
        return $this->experience;
    }

    /**
     * Встановлює значення досвіду роботи
     * @param int $experience Нове значення для досвіду роботи
     */
    public function setExperience($experience) {
        $this->experience = $experience;
    }

    /**
     * Реалізація методу прибирання кімнати з інтерфейсу HouseCleaning
     * @return string Рядок з результатом прибирання кімнати
     */
    public function cleanRoom() {
        return "Програміст прибирає кімнату";
    }

    /**
     * Реалізація методу прибирання кухні з інтерфейсу HouseCleaning
     * @return string Рядок з результатом прибирання кухні
     */
    public function cleanKitchen() {
        return "Програміст прибирає кухню";
    }
}

