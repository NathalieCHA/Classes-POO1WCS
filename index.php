<?php

// //BICYCLE

require_once 'Bicycle.php';
$bike = new Bicycle("blue");
var_dump($bike);

$bike->setCurrentSpeed(0);
var_dump($bike); 

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();


//CAR

require_once 'Car.php';

$homerCar = new Car('pink', 5, 'Diesel');
var_dump($homerCar);

// //Moving car
echo $homerCar->start();
echo "<br> Vitesse de la voiture : ' . {$homerCar->getCurrentSpeed()} . ' km/h' . '<br>";
echo $homerCar->forward();
echo "<br> Vitesse de la voiture : ' . {$homerCar->getCurrentSpeed()} . ' km/h' . '<br>";
echo $homerCar->brake();
echo "<br> Vitesse de la voiture : ' . {$homerCar->getCurrentSpeed()} . ' km/h' . '<br>";

$margeCar = new Car('orange', 5, 'Essence');
var_dump($margeCar);

//Moving car
echo $margeCar->start();
echo '<br> Vitesse de la voiture : ' . $margeCar->getCurrentSpeed() . ' km/h' . '<br>';
echo $margeCar->forward();
echo '<br> Vitesse de la voiture : ' . $margeCar->getCurrentSpeed() . ' km/h' . '<br>';
echo $margeCar->brake();
echo '<br> Vitesse de la voiture : ' . $margeCar->getCurrentSpeed() . ' km/h' . '<br>';

$flandersCar = new Car('purple', 2, 'Diesel');
var_dump($flandersCar);

// //Moving car
echo $flandersCar->start();
echo '<br> Vitesse de la voiture : ' . $flandersCar->getCurrentSpeed() . ' km/h' . '<br>';
echo $flandersCar->forward();
echo '<br> Vitesse de la voiture : ' . $flandersCar->getCurrentSpeed() . ' km/h' . '<br>';
echo $flandersCar->brake();
echo '<br> Vitesse de la voiture : ' . $flandersCar->getCurrentSpeed() . ' km/h' . '<br>';

$krustyCar = new Car('grey', 3, 'Essence');
var_dump($krustyCar);

//Moving car
echo $krustyCar->start();
echo '<br> Vitesse de la voiture : ' . $krustyCar->getCurrentSpeed() . ' km/h' . '<br>';
echo $krustyCar->forward();
echo '<br> Vitesse de la voiture : ' . $krustyCar->getCurrentSpeed() . ' km/h' . '<br>';
echo $krustyCar->brake();
echo '<br> Vitesse de la voiture : ' . $krustyCar->getCurrentSpeed() . ' km/h' . '<br>';

?>