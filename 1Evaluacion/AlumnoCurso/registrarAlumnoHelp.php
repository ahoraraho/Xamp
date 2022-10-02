<!doctype html>
<html>

<head>
    <title>Registrando</title>
</head>

<body>
    <?php
    $con = mysqli_connect("localhost", "root", "", "instituto") or die("Problemas con la conexión a la base de datos");
    mysqli_query($con, "insert into alumnos (nombre, mail, codigocurso)
values ('$_REQUEST[nombre]','$_REQUEST[mail]','$_REQUEST[codigocurso]')") or
        die(mysqli_error($con));
    
        mysqli_close($con);
    echo 'El nuevo alumnos se registro con exito';
    ?>
</body>

</html>