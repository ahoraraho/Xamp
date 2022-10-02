<!doctype html>
<html>

<head>
    <title>Modificacion de curso</title>
</head>

<body>
    <?php
    $con = mysqli_connect("localhost", "root", "", "instituto") or die("Problemas con la conexión a la base de datos");
    $registro = mysqli_query($con, "select nombrecurso from curso where codigocurso='$_REQUEST[codigocurso]'") or
        die(mysqli_error($con));
    if ($reg = mysqli_fetch_array($registro)) {
    ?>
        <form method="post" action="modificarCursoHelp.php">
            <label for="">Nombre del curso</label><br>
            <input type="text" name="nombrecurso" size="30" value="<?php echo $reg['nombrecurso']; ?>">
            <input type="hidden" name="codigocurso" value="<?php echo $_REQUEST['codigocurso']; ?>">
            <br><br>
            <input type="submit" value="Guardar cambio">
        </form>
    <?php
    } else
        echo 'No existe un rubro con dicho código';
    mysqli_close($con);
    ?>
</body>

</html>