<html>
    <head>
        <title>Pagina princilpal</title>
        <link rel="stylesheet" type="text/css" href="css/estilos.css"/>
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
        <div id="verLogin">
            <link rel="stylesheet" type="text/css" href="css/estilos.css"/>
                <?php
                session_start();
                $a = $_POST['usuario'];
                $b = $_POST['password'];
                if($a == "admin" && $b == "admin")
                {
                    echo "Bienvenido - Usted se ha registrado correctamente<br>";
                    $_SESSION["acceso"] = 1;
                }
                else 
                {
                    $_SESSION["acceso"] = 0;
                    echo "Alguno de los datos ingresados es incorrecto - vuelva a intentar<br>";
                }
            ?>
        <br><a href="index.php">ir a inicio</a><br>
</div>
</body>
</html>