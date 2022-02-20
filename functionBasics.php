<?php

function myFun()
{
    echo "Midhun";
    echo " Nair";
};

myFun();
echo "<br>My Name is ";
myFun();
echo "<br><br>";

/////////////////////////////////////////////

yourName("Midhun");
echo "<br><br>";

function yourName($name)
{
    echo "My Name is ".$name;
};

/////////////////////////////////////////////

function yourName1($name,$age)
{
    echo "My Name is ".$name." and I am ".$age." years old.";
};

yourName1("Midhun", 20);
echo "<br><br>";
?>