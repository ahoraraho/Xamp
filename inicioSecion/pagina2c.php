<?php
session_start();
?>
<html>

<head>
    <title>Pagina 2c</title>
</head>

<body>
    <?php
    if ($_SESSION["acceso"] == 1) {
    ?>
        Esta es la pagina 2c<br> 22222222222222222222222222222c<br>
        2222222222222222222222222222222222222222222c<br>
        2222222222222222222222222222222222222222222c<br>
        2222222222222222222222222222222222222222222c<br>
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