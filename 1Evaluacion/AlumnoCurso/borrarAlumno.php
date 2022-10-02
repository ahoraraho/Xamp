<!doctype html>
<html>

<head>
    <title>Alumno borrado</title>
</head>

<body>
    <?php
    $con = mysqli_connect("localhost", "root", "", "instituto") or die("Problemas con la conexión a la base de datos");
    $registro = mysqli_query($con, "select nombre from alumnos where codigo=$_REQUEST[codigo]") or
        die(mysqli_error($con));
    if ($reg = mysqli_fetch_array($registro)) {
        mysqli_query($con, "delete from alumnos where codigo=$_REQUEST[codigo]") or die(mysqli_error($con));
        echo 'El alumno eliminado es:' . $reg['nombre'];
    } else
        echo 'No existe el curso con dicho código';
    mysqli_close($con);
    ?>
</body>

</html>