<?php
include_once("link.php");
// class Employee{
//     public $name;
//     public $age;
//     public $salary;
//     // public function showinfo(){
//     //     echo $this->name . ' - Имя' . '<br>' . $this->age . ' - Возраст' . '<br>' . $this->salary . ' - Зарплата';
//     // }
//     public function getName(){
//         return $this->name;
//     }
//     public function getAge(){
//         return $this->age;
//     }

//     public function getSalary(){
//         return $this->salary;
//     }
//     public function checkAge(){
//         if ($this->age > 18){
//             return true;
//         }else{
//             return false;
//         }
//     }
//     // $check = $this->age > 18 ? true : false;
//     // return $check;
// }
// $task1 = new Employee;
// $task1->name = 'john';
// $task1->age = 25;
// $task1->salary = 1000;
// $task2 = new Employee;
// $task2->name = 'eric';
// $task2->age = 26;
// $task2->salary = 2000;
// // echo $task1->salary + $task2->salary . ' - сумма зарплат' . '<br>' . $task1->age + $task2->age . ' - сумма возрастов';
// echo $task1->getSalary() + $task2->getSalary();
// class User{
//     public $name;
//     public $age;
//     public function setAge($age){
//         if ($age > 18){
//             $this->age = $age;
//             return true;
//         }else{
//             return false;
//         }
//     }
// }
// $john = new User;
// $john->name = 'john';
// $john->age = 25;
// echo $john->age . '<br>';
// $john->setAge(30);
// echo $john->age;
// class Employee{
//     public $name;
//     public $salary;
//     public function doubleSalary(){
//         $this->salary = $this->salary * 2;
//     }
// }
// class Student{
//     public $name;
//     public $course;
//     public function TransferToNextCourse(){
//         if ($this->isCourseCorrect($this->course)){
//             $this->course = $this->course + 1;
//             return true;
//         }
//         else{
//             return false;
//         }
//     }
//     private function isCourseCorrect($cc){
//         return $cc < 5;
//     }
// }
// $student = new Student;
// $student->name='Danya';
// $student->course = 1;
// echo $student->course . '<br>';
// $student->TransferToNextCourse();
// echo $student->course;
class Employee{
    private $surname;
    private $name;
    private $salary;
    public function __construct($name,$surname,$salary){
        $this->name = $name;
        $this->surname = $surname;
        $this->salary = $salary;
    }
    public function getSurname(){
        return $this->surname;
    }
    public function getName(){
        return $this->name;
    }
    public function getSalary(){
        return $this->salary;
    }
    public function setSalary($sal){
        $this->salary = $sal; 
    }
}
$employee1 = new Employee('eric','Bobik',1000);
$employee2 = new Employee('kyle','Nebobik',2000);
$employee1 -> setSalary(25000);
echo $employee1 -> getSalary();
