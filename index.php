<?php

require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle("Blue", 10);

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed(). ' km/h - Couleur du vélo: ' . $bike->getColor() . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed(). ' km/h' . '<br>';
echo $bike->brake();


// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle('Green', 15);
// Moving bike
echo $rockrider->forward();
echo '<br> Vitesse du vélo : ' . $rockrider->getCurrentSpeed(). ' km/h - Couleur du vélo: ' . $rockrider->getColor() . '<br>';
echo $rockrider->brake();
echo '<br> Vitesse du vélo : ' . $rockrider->getCurrentSpeed(). ' km/h' . '<br>';
echo $rockrider->brake();


// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle( 'Black', 20);
// Moving bike
echo $tornado->forward();
echo '<br> Vitesse du vélo : ' . $tornado->getCurrentSpeed(). ' km/h - Couleur du vélo: ' . $tornado->getColor() . '<br>';
echo $tornado->brake();
echo '<br> Vitesse du vélo : ' . $tornado->getCurrentSpeed(). ' km/h' . '<br>';
echo $tornado->brake();

// Instanciation d'un nouvel objet $peugeot
$peugeot = new Car('Black', 2, 'diesel', 30);
echo $peugeot->forward();
echo '<br> Vitesse de la voiture : ' . $peugeot->getCurrentSpeed(). ' km/h - Couleur de la voiture: ' . $peugeot->getColor() . '<br>';
echo $peugeot->brake();
echo '<br> Vitesse de la voiture : ' . $peugeot->getCurrentSpeed(). ' km/h' . '<br>';
echo $peugeot->brake();

// Instanciation d'un nouvel objet $ferrari
$ferrari = new Car('yellow', 2, 'gazoline', 50);
echo $ferrari->forward();
echo '<br> Vitesse de la voiture : ' . $ferrari->getCurrentSpeed(). ' km/h - Couleur de la voiture: ' . $ferrari->getColor() . '<br>';
echo $ferrari->brake();
echo '<br> Vitesse de la voiture : ' . $ferrari->getCurrentSpeed(). ' km/h' . '<br>';
echo $ferrari->brake();

