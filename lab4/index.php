<?php

require_once 'autoload.php';


use Models\Human;
use Models\Student;
use Models\Programmer;
use Models\Circle;
use Models\UserModel;
use Controllers\UserController;
use Views\UserView;

$userController = new UserController();
$userView = new UserView();
$userModel = new UserModel();

echo $userController->showMessage("userController");
echo "<br>";
echo $userView->showMessage("userView");
echo "<br>";
echo $userModel->showMessage("userModel");

$student = new Student();
$student->setHeight(170);
$student->setWeight(65);
$student->setAge(20);
$student->setUniversity("University of Life");
$student->setCourse(3);

echo "<br><br>Студент:<br>";
echo "Зріст: " . $student->getHeight() . " см<br>";
echo "Вага: " . $student->getWeight() . " кг<br>";
echo "Вік: " . $student->getAge() . " років<br>";
echo "Університет: " . $student->getUniversity() . "<br>";
echo "Курс: " . $student->getCourse() . "<br>";
$student->moveToNextCourse();
echo "Новий курс студента: " . $student->getCourse() . "<br>";
echo $student->cleanRoom() . "<br>";
echo $student->cleanKitchen() . "<br>";

$programmer = new Programmer();
$programmer->setHeight(180);
$programmer->setWeight(75);
$programmer->setAge(30);
$programmer->setExperience(10);
$programmer->addProgrammingLanguage("PHP");
$programmer->addProgrammingLanguage("JavaScript");

echo "<br>Програміст:<br>";
echo "Зріст: " . $programmer->getHeight() . " см<br>";
echo "Вага: " . $programmer->getWeight() . " кг<br>";
echo "Вік: " . $programmer->getAge() . " років<br>";
echo "Досвід роботи: " . $programmer->getExperience() . " років<br>";
echo "Мови програмування: " . implode(", ", $programmer->getProgrammingLanguages()) . "<br>";
echo $programmer->cleanRoom() . "<br>";
echo $programmer->cleanKitchen() . "<br>";

require_once 'Handlers/TextFileHandler.php';

use Handlers\TextFileHandler;

echo "<br>TextFileHandler:<br>";
TextFileHandler::writeToFile('file1.txt', 'Додавання тексту в файл 1');
TextFileHandler::writeToFile('file2.txt', 'Додавання тексту в файл 2');
TextFileHandler::writeToFile('file3.txt', 'Додавання тексту в файл 3');

echo TextFileHandler::readFromFile('file1.txt') . "<br>";
echo TextFileHandler::readFromFile('file2.txt') . "<br>";
echo TextFileHandler::readFromFile('file3.txt') . "<br>";

TextFileHandler::clearFile('file1.txt');
echo "Вміст файлу після очищення: " . TextFileHandler::readFromFile('file1.txt') . "<br>";

$circle1 = new Circle(0, 0, 5);
$circle2 = new Circle(4, 4, 3);

echo "<br>Коло 1: " . $circle1 . "<br>";
echo "Коло 2: " . $circle2 . "<br>";

if ($circle1->intersects($circle2)) {
    echo "Кола перетинаються<br>";
} else {
    echo "Кола не перетинаються<br>";
}

