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

//array functions 


//insert value in the end of an array
array_push($days,"default");
print_r($days);

//remove value from the end of an array
$removedValue = array_pop($days);
print_r($days);
print($removedValue);

//insert an element in the start of an array
array_unshift($days, "default");
print_r($days);

//remove an element from beginning of an array
$removedElement = array_shift($days);
print_r($days);
print($removedElement);

echo "\n";

//sum of elements of an array
$numbers = [4,2,5,3,8,6,4,7,6,3,9,2,5,4];
$sum = array_sum($numbers);
print($sum);

echo "\n";

$sum = 0;
foreach($numbers as $number){
    $sum += $number;
}
print($sum);

echo "\n";

//product of values of an array
$product = array_product($numbers);
print($product);

echo "\n";

//reverse an array
$reversedArray = array_reverse($days);
print_r($days);
print_r($reversedArray);

echo "\n";

//search an element in array
$index = array_search("friday",$days);
print($index);

echo "\n";

$index = array_search("abcd",$days);
var_dump($index);

echo "\n";

//remove duplicates from an array
$numbers = array_unique($numbers);
print_r($numbers);

echo "\n";

//sort array in ascending order
sort($numbers);
print_r($numbers);

//sort array in descending order
rsort($numbers);
print_r($numbers);

//sorts associate array values in ascending order
asort($personsAge);
print_r($personsAge);

//sort associate array values in descending order
arsort($personsAge);
print_r($personsAge);


//sort associative array keys in ascending order
ksort($personsAge);
print_r($personsAge);


//sort associative array keys in descending order
krsort($personsAge);
print_r($personsAge);
?>
