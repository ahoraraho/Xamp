<?php
session_start();
if (!isset($_SESSION['cuentaPaginas'])) {
    $_SESSION['cuentaPaginas'] = 1;
} else {
    $_SESSION['cuentaPaginas']++;
}
?>
<html>

<head>
    <title>Pagina 2b</title>
</head>

<body>
    <h1>ESTA ES LA PAGINA2</h1>
    <?php
    echo "Desde que entraste has visto " . $_SESSION['cuentaPaginas'] . " páginas<br>";
    ?>
    <br><br>
    <a href="principal.php">Volver</a>
</body>

</html>