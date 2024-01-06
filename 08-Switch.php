<?php 
$day = "abcd";

switch($day){
    case "monday" : 
        echo "It is monday";
        break;
    case "tuesday" : 
        echo "It is tuesday";
        break;
    case "wednesday":
        echo "It is wednesday";
        break;
    case "thursday":
        echo "It is thursday";
        break;
    case "friday":
        echo "It's friday";
        break;
    case "saturday":
        echo "It's saturday";
        break;
    case "sunday" : 
        echo "It's sunday";
        break;
    default:
        echo "not a valid day";
}
?>