<!doctype html>
<html>

<head>
    <title>Modificando</title>
</head>

<body>
    <?php
    $con = mysqli_connect("localhost", "root", "", "instituto") or die("Problemas con la conexión a la base de datos");
    mysqli_query($con, "update curso set nombrecurso='$_REQUEST[nombrecurso]' where codigocurso='$_REQUEST[codigocurso]'") or die(mysqli_error($con));
    echo 'Se modificó la el nombre del curso con exito';
    mysqli_close($con);
    ?>
</body>

</html>