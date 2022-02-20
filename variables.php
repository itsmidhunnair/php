<!-- Php variables are very easy to use, they automatically convert to datatype you require, so we dont need to convert it each time -->

<?php

// variables name cannot be started with a number
// variables name can be started with a "_" or a letter

$varName = "Midhun Nair"; //automatically takes it as a string
$_age = 20; //automatically takes it as a integer

echo $varName;
echo $_age;

echo "<br><br>My name is $varName and my age is $_age.";

?>