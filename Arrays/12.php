<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Instituto Pedro P. Diaz</title>
</head>

<body>
    <?php
    //Aplicando foreach() a un arral bidimensional
    
    $calendario[] = array(1, "Enero", 31);
    $calendario[] = array(2, "Febrero", 28);
    $calendario[] = array(3, "Marzo", 31);
    $calendario[] = array(4, "Abril", 30);
    $calendario[] = array(5, "Mayo", 31);
    $calendario[] = array(6, "Junio", 30);
    $calendario[] = array(7, "Julio", 31);
    $calendario[] = array(8, "Agosto", 31);
    foreach ($calendario as $clave => $valor) {
        echo $clave;
        echo "<br>";
        echo "Id: " . $valor[0] . "<br>";
        echo "Mes: " . $valor[1] . "<br>";
        echo "Días: " . $valor[2] . "<br>";
        echo "<hr>";
    }
    ?>
</body>

</html>