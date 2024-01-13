<?php 

//abstract class cannot be instantiated. It can only be inherited
abstract class Shape{
    abstract function calculateArea($unit);

    function printHello(){
        print("Hello World");
    }
}

class Circle extends Shape{

    function calculateArea($radius)
    {
        //calculate circle area
    }
}

class Square extends Shape{
    function calculateArea($unit)
    {
        //calculate square area
    }
}


?>