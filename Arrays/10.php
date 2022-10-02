<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Instituto Pedro P. Diaz</title>
</head>

<body>
    <?php
    /**Aplicando foreach, teniendo en cuenta que la instrucción 
     * foreach() recorre cada elemento de un determinado vector 
     * y extrae su clave y valor que contiene */
    $visitas["lunes"] = 200;
    $visitas["martes"] = 186;
    $visitas["miercoles"] = 136;
    $visitas["jueves"] = 222;
    $visitas["viernes"] = 1000;
    $visitas["sabado"] = 2000;
    $visitas["feriado"] = 12000;
    foreach ($visitas as $key => $value) {
        echo "Clave: $key <br>";
        echo "Valor: $value <br>";
        echo "<hr>";
    }
    ?>
</body>

</html>