<?php
session_start();
$a = $_POST['usuario'];
$b = $_POST['password'];
if ($a == "pedro" && $b == "123") {
    echo "Bienvenido - Usted se ha registrado correctamente<br>";
    $_SESSION["acceso"] = 1;
} else {
    $_SESSION["acceso"] = 0;
    echo "Alguno de los datos ingresados es incorrecto - vuelva a intentar<br>";
}
?>
<br><a href="index.php">Volver</a><br>