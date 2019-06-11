<?php

class Worker
{
    public $name;
    public $age;
    public $salary;
}

$ivan = new Worker();
$ivan->name = 'Иван';
$ivan->age = 25;
$ivan->salary = 1000;

$vasia = new Worker();
$vasia->name = 'Вася';
$vasia->age = 26;
$vasia->salary = 2000;

echo 'Сумма зарплат: '. ($ivan->salary + $vasia->salary) . '<br>';
echo 'Сумма возрастов: '. ($ivan->age + $vasia->age);