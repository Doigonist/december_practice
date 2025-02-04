<?php
require_once(__DIR__ . '/classes/Employee.php');
require_once(__DIR__ . '/classes/Developer.php');
require_once(__DIR__ . '/classes/Manager.php');
$employee1 = new Employee('Крутой Работник', 30000);
$Developer = new Developer('Крутой Разработчик', 25000, 'PHP');
$Manager = new Manager('Крутой Менеджер', 45000, 'Продажа');
echo $employee1->getInfo();
echo $Developer->getInfo();
echo $Manager->getInfo();
echo Employee::$totalEmployees . ' - Общее количество сотрудников' . '<br><hr>';
echo Employee::getTotalSalary();
/*
$employee1 = new Employee('John Doe', 30000);
$Developer = new Developer('Jane Smith', 25000, 'PHP');
$Manager = new Manager('Alice Johnson', 45000, 'Project Management');
*/