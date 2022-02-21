<!-- Limitations
> It can only be 100 characters long.
> It is visible to users. So less secured -->




<?php

echo $_GET['myName'];  // Now open the o/p and in th4e end of the link add "?myName=Midhun"(without double quotes)
// eg: http://localhost/php/getVariable.php?myName=Midhun


?>
<!-- submitting form using HTML-->

<!-- ---------------------------------------------------- -->

<html>
    <form action="getVariable.php" method="GET">
        <input type ="text" name="myName">
        <br>
        <br>
        <input type="submit" value="Submit">
    </form>
</html>

<!-- ------------------------------------------------------- -->


<?php

$name = $_GET["myName"];
if ($name) //denotes 'TRUE' if name is present and so will execute bottom portion
echo "The value you have entered is $name.";

?>