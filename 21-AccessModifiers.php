<?php 

//private -> can only be accessed inside class.
//protected -> can be accessed inside class or child class
//public -> can be accessed from anywhere

class Vehicle{

    public $wheel;
    protected $color;
    private $vehicleNumber;

    public function startVehicle(){

    }

    protected function stopVehicle(){

    }

    private function scrapVehicle(){
        $this->vehicleNumber = "HR51 AB 6786";
    }
}

class Bike extends Vehicle{

    function __construct()
    {
        print($this->vehicleNumber);
    }
    function setColor($color){
        $this->color = $color;
    }
    function setVehicleNumber($vehicleNumber){
        print($this->vehicleNumber);
    }
}

$vehicle = new Vehicle();
$vehicle->wheel = 4;
//$vehicle->color = "red";   //throws error -> cannot access protected property outside of the class
//$vehicle->vehicleNumber = "HR51 AB 6745";  //throws error -> cannot access private property outside of the class

$bike = new Bike();
$bike->setColor("Red");
?>