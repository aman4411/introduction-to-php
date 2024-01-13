<?php

interface Shape{
    function calculateArea($unit);
}

class Square implements Shape{


    function calculateArea($unit)
    {
        $area = $unit*$unit;
        print($area);
    }
}

$square = new Square();

$square->calculateArea(4);
?>