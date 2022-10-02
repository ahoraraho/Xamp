<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Instituto Pedro P. Diaz</title>
</head>

<body>
    <?php
    /**Vector asociativo con constructor predefinido del Php para crear arrays: array() */
    $vec = array('dni' => "29324747", 'nombre' => "Pedro Pablo", 'direccion' => "Av. Pizarro 130 JLBR", 'fecnac' => "14/11/1956");
    echo $vec['dni'];
    echo "<br>".$vec['nombre'];
    echo "<br>".$vec['direccion'];
    echo "<br>".$vec['fecnac'];
    ?>
</body>

</html>