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
        <form method="post" action="3.php">
            <p> <b>Tabla de multiplicar del Nro n </b> </p>
            <P>Ingrese el n: </P>
            <input type="text" name="num" size="3" />
            <input type="submit" name="btnEnvia" value="Ver tabla" />
        <?php
        // si formulario se envio procesar datos de entrada 
    } else {
        $num = $_POST['num'];;
        for ($i=1;$i<=20;$i++) {
            echo "<br>".$num,' x ',$i,' = ',$num*$i;
        }
        
    }
        ?>
</body>

</html>