<?php

$day = "saturday";
$date = 6;

//if case
if($day == "saturday"){
    echo 'day is saturday';
}

if($day == "sunday"){
    echo 'day is sunday';
}

echo "\n";

//if else
if($day == 'sunday'){
    echo 'day is sunday';
}else{
    echo 'not a sunday';
}

echo "\n";

//nested if else
if($day == "saturday"){
    echo 'day is saturday -> ';
    if($date < 7){
        echo 'first week of month';
    }else if($date >= 7 and $date < 14){
        echo 'second week of month';
    }else if($date >= 14 and $date < 21 ){
        echo 'third week of month';
    }else{
        echo 'last week of month';
    }
}

?>