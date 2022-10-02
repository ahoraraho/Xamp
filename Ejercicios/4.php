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
        //Leer un numero n hallar la suma de pares hasta el numero
    ?>
        <form method="post" action="4.php">
            <p> <b>Suma de los primeros pares hasta N</b> </p>
            <p>Ingrese numero (N):</p>
            <input type="text" name="num" size="3" />
            <input type="submit" name="btnEnvia" value="Calcular" />
        <?php
        // si formulario se envio procesar datos de entrada 
    } else {
        $suma = 0;
        $num = $_POST['num'];

        for ($i = 1; $i <= $num; $i++) {
            if ($i % 2 == 0) {
                $suma = $suma + $i;
            }
        }
        echo "la suma de los pares es: " . $suma;
    }
        ?>
</body>

</html>