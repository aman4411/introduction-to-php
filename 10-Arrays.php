<?php

//ways to define arrays
$days = ['sunday','monday','tuesday'];
$days = array('sunday','monday','tuesday','wednesday','thursday','friday','saturday');

//length of array
$arrayLength = count($days);
echo $arrayLength;
echo "\n";

//accessing particular element
$secondElement = $days[1];
echo $secondElement;
echo "\n";

//print second last element but don't know its index value
$secondLastElement = $days[count($days) - 2];
echo $secondLastElement;
echo "\n";

foreach($days as $day){
    echo $day;
    echo "\n";
}

echo "\n";

//other type of array - associative array
$personsAge = ['aman' => 20, 'rajat' => 30, 'ayush' => 35, 'priya' => 15];
foreach($personsAge as $age){
    echo $age;
    echo "\n";
}
echo "\n";

foreach($personsAge as $name => $age){
    echo $name . ' is having age - ' .  $age;
    echo "\n";
}

echo "\n";
//other type of arrays - multidimensional array

$persons = [
    ["name" => "aman", "age" => 20],
    ["name" => "sagar", "age" => 30],
    ["name" => "rajat", "age" => 35],
];

foreach($persons as $person){
    echo $person['name'] . ' is having age - ' . $person['age'];
}
?>