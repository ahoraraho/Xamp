<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Instituto Pedro P. Diaz</title>
</head>

<body>
    <?php
    /**aplicando función count() para determinar el numero de 
     * elementos del array */
    $vec[] = "Desarrollo de Sistemas de Información";
    $vec[] = "Contabilidad";
    $vec[] = "Secretariado";
    $vec[] = "Construcción Civil";
    $vec[] = "Agropecuaria";
    $vec[] = "Mecatrónica";
    $vec[] = "Electrónica";
    $vec[] = "Electricidad";
    $vec[] = "Mecanica de produccion";
    for ($x = 0; $x < count($vec); $x++) {
        echo "$vec[$x] <br>";
    }
    ?>
</body>

</html>