<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Instituto Pedro P. Diaz</title>
</head>

<body>
    <?php
    //funcion para poder allar cual numero de es mayor o menor de 2 en espesifico
    function mayor($x, $y)
    {
        if ($x > $y) {
            return $x;
        } else {
            return $y;
        }
    }
    function menor($x, $y)
    {
        if ($x < $y) {
            return $x;
        } else {
            return $y;
        }
    }
    echo "El mayor es: " . mayor(12, 10) . "<br>";
    echo "El mayor es: " . mayor(8, 100) . "<br>";
    echo "El menor es: " . menor(15, 10) . "<br>";
    ?>
</body>

</html>