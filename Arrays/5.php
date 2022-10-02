<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Instituto Pedro P. Diaz</title>
</head>

<body>
    <?php
    /**Aplicando el constructor predefinido del Php para crear 
     * arrays: array() */
    $vec = array("Arequipa", "Lima", "Cusco", "Piura", "Tacna");
    $v = "ep";
    for ($x = 0; $x < count($vec); $x++) {
        echo "$vec[$x] <br>";
    }
    ?>
</body>

</html>