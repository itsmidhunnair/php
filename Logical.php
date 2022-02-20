<!-- Logical Operator is a AND or OR Operator -->
<?php

if (1 > 1 || 1 == 1) // "||" for OR Operator
{
    echo "True";
}
else
{
    echo "False";
}


if (1 > 1 && 1 == 1) // "&&" for AND Operator
{
    echo "True";
}
else
{
    echo "False";
}

$username = "Midhun";
$password = "";

if ($username && $password) //if value is present it returns TRUE
{
    echo "DONE"; //will execute id both are TRUE
}
else
{
    echo "Plz. enter all the fields.";
}
?>

<!-- Operator like AND can be used in login form where a User is asked to enter hos Username AND Password -->