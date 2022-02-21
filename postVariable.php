<!-- 
> No character limit
> It is not visible to users. So more secured -->




<?php

echo $_POST['myPass'];  

?>
<!-- submitting form using HTML-->

<!-- ---------------------------------------------------- -->

<html>
    <form action="postVariable.php" method="POST">
        <input type ="password" name="myPass">
        <br>
        <br>
        <input type="submit" value="Submit">
    </form>
</html>

<!-- ------------------------------------------------------- -->


<?php

$pass = $_POST["myPass"];
if ($pass) //denotes 'TRUE' if name is present and so will execute bottom portion
echo "The password you have entered is $pass.";

?>