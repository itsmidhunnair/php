<?php

$name="Mid";
if($name == "Midhun")
echo "Hii Midhun!!";
else
{

?>

You are not Midhun? Please type your name:<br>
<form action="CommonWayToDisplayHtml.php" method="GET">
    <input type="text" name="name">
    <input type="submit" value="submit">
</form>

<?php

}

?>