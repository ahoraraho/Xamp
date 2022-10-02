<!doctype html>
<html>

<head>
    <title>Buscando</title>
</head>

<body>
    <?php
    $con = mysqli_connect("localhost", "root", "", "instituto") or die("Problemas con la conexión a la base de datos");
    $registro = mysqli_query($con, "select nombre, mail, codigocurso from alumnos where codigo=$_REQUEST[codigo]") or
        die(mysqli_error($con));
    if ($reg = mysqli_fetch_array($registro)) {
    ?>
        <form method="post" action="modiAlunHelp.php">
            <h2>Datos del alumno</h2>
            <label for="">Nombres</label><br>
            <input type="text" name="nombre" size="50" value="<?php echo $reg['nombre']; ?>"><br>
            <label for="">Email</label><br>
            <input type="email" name="mail" size="50" value="<?php echo $reg['mail']; ?>"><br>
            <label for="">Curso</label><br>
            <select name="codigocurso">
                <?php
                $con = mysqli_connect("localhost", "root", "", "instituto") or die("Problemas con la conexión a la base de datos");
                $registros = mysqli_query($con, "select codigocurso, nombrecurso from curso") or die(mysqli_error($con));
                while ($reg = mysqli_fetch_array($registros)) {
                    echo "<option value=\"" . $reg['codigocurso'] . "\">" . $reg['nombrecurso'] . "</option>";
                }
                ?>
            </select>
            <input type="hidden" name="codigo" value="<?php echo $_REQUEST['codigo']; ?>"><br>
        </form>
    <?php
    } else
        echo 'No existe un rubro con dicho código';
    mysqli_close($con);
    ?>
</body>

</html>