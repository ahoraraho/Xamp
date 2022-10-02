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
        <form method="post" action="2.php">
            <p> <b>Digite un Numero entre un rango de 7 a 700:</b> </p>
            <input type="text" name="num" size="3" />
            <input type="submit" name="btnEnvia" value="Calcular" />
        <?php
        // si formulario se envio procesar datos de entrada 
    } else {
        $num = $_POST['num'];

        if ($num > 6 && $num < 701) {
            $cont = 0;
            for ($i = 1; $i <= $num; $i++) {
                //$f = $num % $i;
                //echo $f;
                if ($num % $i == 0) {
                    $cont = $cont + 1;
                }
            }
            if ($cont == 2) {
                echo " el numero " . $num . " es un numero primo";
            } else {
                echo " el numero " . $num . " no es un numero primo";
            }
        } else {
            echo "el numero esta fuera de rango espesificado";
        }
    }
        ?>
</body>

</html>