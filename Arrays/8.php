<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Instituto Pedro P. Diaz</title>
</head>

<body>
    <?php
    /**La función var_dump nos devuelve la cantidad de elementos 
     * del arreglo, sus nombres y el tipo */
    $vec = array(
        'dni' => "41015588", 'nombre' => "Juan Carlos Oblitas", 
        'direccion' => "Puerto Bravo 100", 'fecnac' => "14/11/1957",
        'Sueldo' => 15000
    );
    var_dump($vec);
    echo "<br>";
    $x = 5000;
    var_dump($x);
    echo "<br>";
    $y = true;
    var_dump($y);
    echo "<br>";
    $z = 58.25;
    var_dump($z);
    ?>
</body>

</html>