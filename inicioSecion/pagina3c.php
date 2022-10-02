<?php
session_start();
?>
<html>

<head>
    <title>Pagina 1c</title>
</head>

<body>
    <?php
    if ($_SESSION["acceso"] == 1) {
    ?>
        Esta es la pagina 3c<br> 3333333333333333333333333333333c<br>
        33333333333333333333333333333333333333333c<br>
        33333333333333333333333333333333333333333c<br>
        33333333333333333333333333333333333333333c<br>
        <br>
        <hr>
    <?php
    } else {
        echo "usted no tiene permisos para ver esta pagina<br>";
    }
    ?>
    <a href="salir.php">Salir</a><br>
    <a href="index.php">Volver</a><br>
</body>

</html>