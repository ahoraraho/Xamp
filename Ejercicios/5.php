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
        //Leer un numero n, hallar la media aritmetrica hasta el numero
    ?>
        <form method="post" action="5.php">
            <p> <b>Media aritmetrica de los primeros numeros negativos hasta N</b> </p>
            <p>Ingrese numero (N):</p>
            <input type="text" name="num" size="3" />
            <input type="submit" name="btnEnvia" value="Calcular" />
        <?php
        // si formulario se envio procesar datos de entrada 
    } else {
        $sumap = 0;
        $sumai = 0;
        $conta = 0;
        $num = $_POST['num'];

        for ($i = 1; $i <= $num; $i++) {
            if ($i % 2 == 0) {
                $sumap = $sumap + $i;
            } else {
                $sumai = $sumai + $i;
                $conta = $conta + 1;
            }
        }
        echo "la suma de los impares es: " . $sumai;
        echo "<br>la media aritmetrica de estos es: " . $sumai / $conta;
    }
        ?>
</body>

</html>