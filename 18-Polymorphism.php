<?php

class Vehicle{
    public function startVehicle(){
        print("Vehicle started");
    }
}

class Bike extends Vehicle{
    //function overriding (runtime polymorphism)
   public function startVehicle()
   {
        print("Bike started");
   }
}

$bike = new Bike();
print($bike->startVehicle());
?>