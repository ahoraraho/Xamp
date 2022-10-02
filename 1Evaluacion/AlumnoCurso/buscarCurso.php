<!doctype html>
<html>

<head>
    <title>Buscando</title>
</head>

<body>
    <?php
    $con = mysqli_connect("localhost", "root", "", "instituto") or die("Problemas con la conexión a la base de datos");
    $registro = mysqli_query($con, "select nombrecurso from curso where codigocurso= '$_REQUEST[codigo]'") or
        die(mysqli_error($con));
    if ($reg = mysqli_fetch_array($registro))
        echo 'La descripción del curso es<br>' . $reg['nombrecurso'];
    else
        echo 'No existe un rubro con dicho código';
    mysqli_close($con);
    ?>
</body>

</html>