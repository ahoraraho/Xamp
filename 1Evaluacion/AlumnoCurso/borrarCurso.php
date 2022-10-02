<!doctype html>
<html>

<head>
    <title>Curso borrado</title>
</head>

<body>
    <?php
    $con = mysqli_connect("localhost", "root", "", "instituto") or die("Problemas con la conexión a la base de datos");
    $registro = mysqli_query($con, "select nombrecurso from curso where codigocurso='$_REQUEST[codigo]'") or
        die(mysqli_error($con));
    if ($reg = mysqli_fetch_array($registro)) {
        mysqli_query($con, "delete from curso where codigocurso='$_REQUEST[codigo]'") or die(mysqli_error($con));
        echo 'La descripción del curso que se eliminó es:' . $reg['descripcion'];
    } else
        echo 'No existe el curso con dicho código';
    mysqli_close($con);
    ?>
</body>

</html>