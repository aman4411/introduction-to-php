<?php
$todayDate = date('d-m-Y');
print($todayDate);
echo "\n";
$todayDate = date('d-M-Y');
print($todayDate);
echo "\n";
$todayDate = date('d-M-y');
print($todayDate);
echo "\n";

$yesterdayDate = date('d-m-Y',strtotime('yesterday'));
print($yesterdayDate);
echo "\n";

$nextMondayDate = date('d-m-Y', strtotime('next Sunday'));
print($nextMondayDate);
echo "\n";

$nextYear = date('d-m-Y', strtotime('+1 year'));
print($nextYear);
echo "\n";
?>