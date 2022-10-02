<!doctype html>
<html>

<head>
    <title>Modificando alumnos</title>
</head>

<body>
    <?php
    $con = mysqli_connect("localhost", "root", "", "instituto") or die("Problemas con la conexión a la base de datos");
    mysqli_query($con, "update alumnos set nombre='$_REQUEST[nombre]', mail='$_REQUEST[mail]', codigocurso='$_REQUEST[codigocurso]' where codigo=$_REQUEST[codigo]") or die(mysqli_error($con));
    echo 'Los datos modificados se guardaron con exito';
    mysqli_close($con);
    ?>
</body>

</html>