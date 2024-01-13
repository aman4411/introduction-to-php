<?php

class Vehicle{

    //Member variables
    public $wheels;
    public $color;

    //Member functions
    function __construct($wheels, $color)
    {
        $this->wheels = $wheels;
        $this->color = $color;
    }

    function startVehicle(){
        //start vehicle
        print("vehicle started");
    }
    
    function stopVehicle(){
        //stop vehicle
        print("vehicle stopped");
    }

    function __destruct()
    {
        print("destructor called");
    }
}

$bike = new Vehicle(2,"red");

$car = new Vehicle(4,"white");

//printing member variables 
print($bike->wheels);

//call member functions
$bike->startVehicle();
$bike->stopVehicle();



?>