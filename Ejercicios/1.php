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
    ?>
        <form method="post" action="1.php">
            <p> <b>N primeros multiplos de un numero:</b> </p>
            <p> Ingresa el valor de numero para calcular: </p>
            <input type="text" name="num" size="3" />
            <p> Ingresa el número de multiplos a calcular: </p>
            <input type="text" name="mul" size="3" /><br><br>
            <input type="submit" name="btnEnvia" value="Calcular" />
        <?php
        // si formulario se envio procesar datos de entrada 
    } else {
        $numeromultiplos = $_POST['mul'];
        $numero = $_POST['num'];
        $limite = 1;
        $contador = 1;
        do {
            if ($contador % $numero == 0) {
                echo "<br>Multiplo Nro " . $limite, ' es:   --------    ', $contador;
                $limite = $limite + 1;
            }
            $contador = $contador + 1;
        } while ($limite <= $numeromultiplos);
    }
        ?>
</body>

</html>