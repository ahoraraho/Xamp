<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
<?php
session_start();
?>
<html>
    <head>
        <title>Acerda des</title>
    </head>
    <body>
    <div id="titulo">
            <ul>
                <h1>GestOS</h1 class="titulo">
                <h2>Gestina proyectos y trabajos</h2>
            </ul>
        </div>

        <div id="barraLateral">
            <nav class="menu">
                <a href="login.php">LOGIN</a><br>
                <a href="inicio.php">INICIO</a><br>
                <a href="proyectos.php">PROYECTOS</a><br>
                <a href="acerca.php">ACERCA DE</a><br>
                <a href="salir.php">SALIR</a><br>
            </nav>
        </div>
        <div id="info">
            <?php
            if ($_SESSION["acceso"] == 1) {
                ?>
                <h3>ACERCA DE</h3>
                <p>este es un proyecto de programacion BackEnd usando PHP</p>
                <br>
                <hr>
                <?php
                } else {
                    echo "usted no tiene permisos para ver esta pagina<br>";
                }
                ?>
            <a href="index.php">Volver</a><br>
        </div>
    </body>
</html>