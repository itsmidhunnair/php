<?php

$days = array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");

echo $days[1]; //Tueday

$month[0] = "January";
$month[1] = "February";
$month[2] = "March";
$month[3] = "April";
$month[4] = "May";
$month[5] = "June";
// this can also be done for storing values in array

echo "<br>Today is $days[0] of $month[0]";

$ages = array(
    "Midhun"=>19,
    "Nair"=>14,
    "Midhun Nair"=>18,
    1=>"MMN");
    
echo "<br>".$ages['Nair'];//14 (number next to it)
echo "<br>".$ages[1];//MMN (string next to the ID)
//this can be used to call a array which has a large no. of element in it, as in that case it is not easy to count from the first element to last

?> 