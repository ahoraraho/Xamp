<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>MaxAndMin</title>
</head>

<body>
    <?php
    //funcion para poder allar cual numero de es mayor o menor de 2 en espesifico
    function mayor($x, $y, $z)
    {
        $num = array($x, $y, $z);
        $ma = max($num);
        return $ma;
    }
    function menor($x, $y, $z)
    {
        $num = array($x, $y, $z);
        $mi = min($num);
        return $mi;
    }
    echo "El mayor es: " . mayor(8, 100, 59) . "<br>";
    echo "El menor es: " . menor(8, 905, 589) . "<br>";
    ?>
</body>

</html>