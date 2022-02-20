<!-- same as while loop but here the condition is checked at the end -->
<?php

$num=1;
$name="Midhun";

do
{
    echo $num."<br>";
    $num++;

    if($num>=10)
    $name="Nair";
}
while($name=="Midhun")

?>