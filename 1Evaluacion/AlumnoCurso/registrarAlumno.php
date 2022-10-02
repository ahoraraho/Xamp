<!doctype html>
<html>

<head>
    <title>Registrar alumnos</title>
</head>

<body>
    <form method="post" action="registrarAlumnoHelp.php">
        <h2>Registro de alumno</h2>
        <label for="">Ingrese nombre del alumno</label><br>
        <input type="text" name="nombre" required><br>
        <label for="">Ingrese email</label><br>
        <input type="text" name="mail" required><br>
        <label for="">Seleccione curso</label><br>
        <select name="codigocurso">
            <?php
            $con = mysqli_connect("localhost", "root", "", "instituto") or die("Problemas con la conexión a la base de datos");
            $registros = mysqli_query($con, "select codigocurso, nombrecurso from curso") or die(mysqli_error($con));
            while ($reg = mysqli_fetch_array($registros)) {
                echo "<option value=\"" . $reg['codigocurso'] . "\">" . $reg['nombrecurso'] . "</option>";
            }
            ?>
        </select>
        <br><br>
        <input type="submit" value="Registrar alumno">
    </form>
</body>

</html>