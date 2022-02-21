<!-- Embedding HTML in PHP -->
<?php

echo "<b><i><u>Midhun</b></i></u>";

?>

<!-- Embedding PHP in HTML -->

<html>
    <body>
        <br><hr>
        <b><i><u>
        <?php

        echo "Midhun Nair"

        ?>
        </b></i></u>
    </body>
</html>

<!-- -------------------------------------------------- -->

<html>
    <body>
    <br><hr>
       <input type="text" name="name" value="<?php echo $_GET['name']; ?>">
       <!-- in the url add ?name=Midhun -->
        </input>
    </body>
</html>