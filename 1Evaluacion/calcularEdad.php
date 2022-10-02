<!DOCTYPE html>
<html>

<head>
    <title> Calcula Edad </title>
</head>
</body>
<h2> Calculo de edad </h2>
<?php
// si formulario no se envio lo muestra
if (!isset($_POST['btnenvia'])) {
?>
    <form method="post" action="calcularEdad.php">
        <p> <b> DATOS </b> </p>
        <label for="start">Ingresa su nombre:</label>
        <input type="text" name="name" size="10" /><br>
        Digite fecha nacimiento mm/dd/aaaa : <br>
        <input type="text" name="fdn" />
        <p>
            <input type="submit" name="btnenvia" value="Enviar" />
    </form>
<?php
    //si formulario fue enviado procesa datos
} else {
    //obtiene datos de nacimiento
    $fechaArray = explode('/', $_POST['fdn']);
    //calcula sello cronologico
    $fechaNacSello = strtotime($_POST['fdn']);
    $hoySello = strtotime('today');

    $name = $_POST['name'];

    //echo "fecha sello nacimiento: $fechaNacSello <br>";
    echo "Sello cronológico de la fecha actual: $hoySello <br><br>";

    // verificar de nacimiento enviada
    if (sizeof($fechaArray) != 3) {
        die('Error: digite fecha valida');
    }
    //verifica si datos son de fecha valida
    if (!checkdate($fechaArray[0], $fechaArray[1], $fechaArray[2])) {
        die('Error: digite fecha valida');
    }
    //verifica fecha al dia de hoy
    if ($fechaNacSello >= $hoySello) {
        die('Error: digite fecha valida');
    }
    //calculos de edad
    $edadDias = floor(($hoySello - $fechaNacSello) / 86400);
    $edadAnios = floor($edadDias / 365);
    $edadMeses = floor($edadDias / 30);

    echo "Nombre: $name <br>";
    echo "Edad en dias : $edadDias <br>";
    echo "Edad en meses : $edadMeses <br>";
    echo "Edad en Años : $edadAnios <br>";
}
?>
</body>

</html>