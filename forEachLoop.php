<!-- This loop will loop through the values/elements of an array  -->
<?php

$num = array(1,2,3,4,5,6,7,8,9,10);
$multiple = 2;

foreach($num as $value)
{
    echo $value."<br>";
    echo $value." times $multiple is ".($value * $multiple)."<br>";
}

?>