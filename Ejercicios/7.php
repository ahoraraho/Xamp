<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // si formulario no se envio lo muestra
    if (!isset($_POST['btnEnvia'])) {
        /**Ingresar cantidad, precio unitario de n productos; hallar importe a pagar; hallar descuento (si
importe es de 1..20 no hay descuento, si es de 21..50 descuento 11%, si es de 51 a mas
descuento 15% del importe a pagar). Imprimir Importe, Descuento, Total a pagar. */

    ?>
        <form method="post" action="7.php">
            <p> <b>Descuento por la compra</b> </p>
            <label for="">Ingrese la cantidad de productos </label>
            <input type="text" name="c" size="3" /><br>
            <label for="">Ingrese el precio por unidad </label>
            <input type="text" name="p" size="3" /><br>
            <input type="submit" name="btnEnvia" value="Calcular descuento" />
        <?php
        // si formulario se envio procesar datos de entrada 
    } else {
        $cantidad = $_POST['c'];
        $precio  = $_POST['p'];
        $coste = $cantidad * $precio;
        $des = 0;
        $fiche = "";
        if ($coste > 0 && $coste < 21) {
            $fiche = "Lalimosamente no tiene descuento...";
            $des = 0;
        } elseif ($coste > 20 && $coste < 51) {
            $fiche = "Felicitaciones!!! tiene descuento del 11%";
            $des = 11;
        } elseif ($coste > 50) {
            $fiche = "Felicitaciones!!! tiene descuento del 15%";
            $des = 15;
        } else {
            echo "dato ingresado erroneamente";
        }
        echo "<b>Detalles</b>";
        echo "<br>" . $fiche;
        echo "<br>Importe total es: " . $coste;
        echo "<br>Descuento: " . $coste * ($des / 100);
        echo "<br>Total a pagar es: " . $coste - $coste * ($des / 100);
    }
        ?>
</body>

</html>