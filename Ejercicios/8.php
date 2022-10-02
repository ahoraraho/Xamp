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
        /**Ingrese un numero de 0..6, imprimir día(0=domingo,...,6=sábado) */

    ?>
        <form method="post" action="8.php">
            <p> <b>Dias</b> </p>
            <label for="">Ingrese el numero de dia </label>
            <input type="text" name="d" size="3" /><br>
            <input type="submit" name="btnEnvia" value="Saber el dia" />
        <?php
        // si formulario se envio procesar datos de entrada 
    } else {
        $dia = $_POST['d'];
        if ($dia == 0) {
            echo "dia Domingo";
        } elseif ($dia == 1) {
            echo "dia Lunes";
        } elseif ($dia == 2) {
            echo "dia Martes";
        } elseif ($dia == 3) {
            echo "dia Miercoles";
        } elseif ($dia == 4) {
            echo "dia Jueves";
        } elseif ($dia == 5) {
            echo "dia Viernes";
        } elseif ($dia == 6) {
            echo "dia Sabado";
        } else {
            echo "No hay ese dia";
        }
    }
        ?>
</body>

</html>