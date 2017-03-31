<?php
error_reporting(E_ALL);

include 'classes/Car.php';
include 'classes/Driver.php';

$car1 = new Car('Mazda', '6', 2005, 20000);
$car2 = new Car('Nissan', 'Micra', 2000, 10000.45345);

$carsCollection = [$car1, $car2];

// echo $car1->getFormattedPrice();

$driver = new Driver('Mike');

$driver->drive($car1);

var_dump($carsCollection);

