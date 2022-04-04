<?php

require_once 'Bike.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'Skateboard.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';


$toyota = new Car("blue", 4, "fuel");
$velo = new Bike("red", 1);
$route66 = new MotorWay;
$route66->addVehicle($velo);
$route66->addVehicle($toyota);

var_dump($route66);
