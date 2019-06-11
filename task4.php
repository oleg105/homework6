<?php

require 'classes/t4-Worker.php';

$Dima = new Worker('Дима', 25, 1000);

echo $Dima->getAge() * $Dima->getSalary();
