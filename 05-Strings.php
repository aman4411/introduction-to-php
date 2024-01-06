<?php 
//string concatenation
$firstName = 'aman';
$lastName = 'mehta';
$fullName = $firstName . ' ' . $lastName;
echo $fullName;
echo "\n";

//string length
echo strlen($fullName);
echo "\n";

//words count
echo str_word_count($fullName);
echo "\n";

// to uppercase
$uppercaseName = strtoupper($fullName);
echo $uppercaseName;
echo "\n";

//to lowercase
$lowerCaseName = strtolower($uppercaseName);
echo $lowerCaseName;
echo "\n";

//replace words
$replacedString = str_replace("aman","sagar",$fullName);
echo $replacedString;
echo "\n";

//reverse string
$reveredString = strrev($fullName);
echo $reveredString;
echo "\n";

//remove whitespaces
$fullName = ' Aman Mehta   ';
$trimmedString = trim($fullName);
echo $fullName;
echo "\n";
echo $trimmedString;
echo "\n";

//coverting string into array
$fullName = 'Aman Mehta';
$names = explode(' ', $fullName);
print_r($names);
echo "\n";

//substring
$substring = substr($fullName,1,3);
echo $substring;

?>