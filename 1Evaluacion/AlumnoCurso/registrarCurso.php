<!doctype html>
<html>

<head>
    <title>Registrando</title>
</head>

<body>
    <?php
    $con = mysqli_connect("localhost", "root", "", "instituto") or die("Problemas con la conexión a la base de datos");
    mysqli_query($con, "insert into curso(codigocurso, nombrecurso) values ('$_REQUEST[codigocurso]','$_REQUEST[nobrecurso]')") or die(mysqli_error($con));
    mysqli_close($con);
    echo 'El nuevo curso se registro con exito';
    ?>
</body>

</html>