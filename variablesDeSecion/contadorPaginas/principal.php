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
    <title>Contar paginas visitadas</title>
</head>

<body>
    <?php
    echo "Desde que entraste has visto " . $_SESSION['cuentaPaginas'] . " páginas<br>";
    ?>
    <a href="pagina1b.php">Ver página 1</a><br>
    <a href="pagina2b.php">Ver página 2</a><br>
    <a href="pagina3b.php">Ver página 3</a><br>
</body>

</html>