<?php

require 'classes/t5-Worker.php';

$ivan = new Worker();
$ivan->setName('Иван');
$ivan->setAge(25);
$ivan->setSalary(1000);

$vasia = new Worker();
$vasia->setName('Вася');
$vasia->setAge(26);
$vasia->setSalary(2000);

echo 'Сумма зарплат: '. ($ivan->getSalary() + $vasia->getSalary()) . '<br>';

