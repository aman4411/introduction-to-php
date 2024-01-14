<?php 

//difference between class and objects.


//your class represents a real world entity.
//A class is an blueprint of an object
class Vehicle{

    public $wheels;
    public $engine;
    public $color;
    public $breaks;

    static $vehicleExpiry = "15 years";

    function startVehicle(){
        //start vehicle
    }
    
    function stopVehicle(){
        //stop vehicle
    }
}

$bike = new Vehicle();
var_dump($bike);
$bike->color = "red";
$bike->wheels = 2;
$bike->engine = "skdb";
$bike->breaks = "skjds";

$car = new Vehicle();
$car->color = "blue";
$car->wheels = 4;

var_dump($bike);
var_dump($car);
var_dump(Vehicle::$vehicleExpiry);

?>