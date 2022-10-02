<?php
session_start();
//unset($_SESSION['acceso']); //si solo fuera una variable
session_destroy(); //si fueran varias variables de inicio de sesión
echo "Su sesion finalizo con exito<br>";
?>
<a href="index.php">Volver</a><br>