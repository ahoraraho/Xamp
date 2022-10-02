<?php
session_start();
$_SESSION['nombres'] = "Pedro Pablo";
$_SESSION['apellidos'] = "Diaz Cornejo";
$_SESSION['lugarestudios'] = "Instituto Pedro P. Diaz";
echo "<h1>Pagina1</h1>";
echo $_SESSION['nombres'] . "<br>";
echo $_SESSION['apellidos'] . "<br>";
