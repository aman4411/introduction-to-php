<?php

class Vehicle{
    public $wheels;
    public $break;

    function __construct($wheels, $color)
    {
        $this->wheels = $wheels;
        $this->break = "power brakes";
    }

    public function startVehicle(){
        print("vahicle started");
    }

    public function stopVehicle(){

    }
}


//child class Bike is inheriting the properties and functionalities of parent class Vehicle.
class Bike extends Vehicle{
    public $engine;

    function __construct($wheels, $break, $engine)
    {
        $this->engine = $engine;
        $this->wheels = $wheels;
        $this->break = $break;
    }
}

$pulsar200 = new Bike(2,"power brake","200cc");
print($pulsar200->engine);
print($pulsar200->wheels);
print($pulsar200->break);
print($pulsar200->startVehicle());

?>