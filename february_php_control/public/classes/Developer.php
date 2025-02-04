<?php
require_once('Employee.php');
class Developer extends Employee{
    private $programmingLanguage;
    
    public function __construct($name, $salary, $programmingLanguage){
        parent::__construct($name, $salary,);
        $this->programmingLanguage = $programmingLanguage;
    }
    public function getInfo(){
        return parent::getInfo().'Языки программирования : ' . $this->programmingLanguage . '<br><hr>';
    }
}