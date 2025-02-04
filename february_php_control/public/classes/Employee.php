<?php
class Employee{
    const COMPANY_NAME = 'Название компании';
    private $name;
    private $salary;
    public static $totalEmployees = 0;

    public static $employees = [];
    
    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
        self::$totalEmployees++;
        self::$employees[] = $this;
    }
    
    public static function getTotalSalary(){
        $totalSalary = 0;
        foreach(self::$employees as $employee){
            $totalSalary += $employee->getSalary();
        }
        return $totalSalary;
    }
    public function getSalary(){
        return $this->salary;
    }
    public function getInfo(){
        return "Имя: {$this->name}<br><hr>Зарплата: {$this->salary}<br><hr> Компания: ". self::COMPANY_NAME . '<br><hr>';
    }
}