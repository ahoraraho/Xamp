<?php
session_start();
echo "<h1>Pagina2</h1>";
echo $_SESSION['nombres'] . "<br>";
echo $_SESSION['apellidos'] . "<br>";
