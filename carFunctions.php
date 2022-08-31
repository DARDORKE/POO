<?php

require_once 'CharacteristicsDisplayable.php';

require_once 'Car.php';

function displayCharacteristics(CharacteristicsDisplayable $characteristicsDisplayable): void
{
    echo '<ul>';
    foreach ($characteristicsDisplayable->getCharacteristics() as $name => $value) {
        echo '<li>'.$name.' : '.$value.'</li>';
    }
    echo '</ul>';
}

// Fichier index.php
require_once 'ElectricCar.php';
require_once  'GasolineCar.php';
require_once  'carFunctions.php';

$tesla = new ElectricCar(50000, 'Tesla', 560);
$renault = new GasolineCar(20000, 'Renault', 100);

displayCharacteristics($tesla);
displayCharacteristics($renault);