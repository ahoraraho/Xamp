<html>
<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
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
                <a href="protectos.php">PROYECTOS</a><br>
                <a href="acerca.php">ACERCA DE</a><br>
                <a href="salir.php">SALIR</a><br>
            </nav>
        </div>

        <div id="login">
            <h1>Loguear</h1> 
            <form method="post" action="login2.php" name="form1">
                Usuario: <br> <input type="text" name="usuario"><br>
                Contraseña: <br> <input type="password" name="password"><br><br>
                <input type="submit" name="submit" value="Enviar"><br>
            </form>
            <br>
            <a href="index.php">Volver</a><br>
        </div>
        
    </body>
</html>
