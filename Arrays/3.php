<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Instituto Pedro P. Diaz</title>
</head>

<body>
    <?php
    /**obviando el índice dentro del corchete en la creación, 
     * este se autogenera, así mismo usando el for() para acceso
     * de su contenido */
    $vec[] = "Elon";
    $vec[] = "Bill";
    $vec[] = "Steve";
    $vec[] = "Jebs";
    $vec[] = "Zucqen";
    for ($x = 0; $x < 5; $x++) {
        echo "$vec[$x] <br>";
    }
    ?>
</body>

</html>