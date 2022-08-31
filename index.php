<?php

require_once 'ElectricCar.php';
require_once  'GasolineCar.php';
require_once  'Tire.php';
require_once  'carFunctions.php';

$tesla = new ElectricCar(50000, 'Tesla', 560);
$renault = new GasolineCar(20000, 'Renault', 100);
$tire = new Tire(205, 55, 32);
displayCharacteristics($tesla);
displayCharacteristics($renault);
displayCharacteristics($tire);