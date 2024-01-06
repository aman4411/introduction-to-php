<?php 
$days = ['monday','tuesday','wednesday','thursday','friday','saturday','sunday'];

// while loop 
$counter = 0;
while($counter < count($days) ){
    echo $days[$counter];
    echo "\n";
    $counter++;
}

echo "\n";

// do while
$counter = 0;
do {
    echo $days[$counter];
    echo "\n";
    $counter++;
}while($counter < count($days));

echo "\n";

//for loop
for($i=0;$i<count($days);$i++){
    echo $days[$i];
    echo "\n";
}

echo "\n";

//foreach loop
foreach($days as $day){
    echo $day;
    echo "\n";
}

echo "\n";

foreach($days as $index => $day){
    echo $index . " => " . $day;
    echo "\n";
}
?>