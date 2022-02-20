<!-- Multi Dimensional Array-->
<?php

$a1 = array(
    "ABC"=>array("A","B","C","D"),
    "123"=>array("1","2","3","4")
);

echo $a1['ABC'][0];
echo "<br>".$a1['123'][1];

//Program to find out a position of a letter in relation to its no.

$pos = 4; //need to change the value as per need
$actualPos = ($pos)-1; //to match the postion as the array starts from 0

echo "<br>Letter " .$a1["ABC"][$actualPos]. " is in position ".$a1["123"][$actualPos];
?>