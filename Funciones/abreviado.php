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
        <form method="post" action="abreviado.php">
            <p> <b>Digite su nombre</b> </p>
            <input type="text" name="texto" id="texto" size="30" /><br><br>
            <input type="submit" name="btnEnvia" value="Abreviar" />
        <?php
        // si formulario se envio procesar datos de entrada 
    } else {
        $letra = array(
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M',
            'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'
        );
        //capturamos el texto ingresado 
        $tex = $_POST['texto'];
        //elimina los espacios extra que puedan existir
        $remuvi_espaci_blaco = trim($tex);
        //convierte a minuscula toda la cadena 
        $tex_minus_all = strtolower($remuvi_espaci_blaco);
        //pone en mayuscula cada inicio de palabra
        $mayu_ini_palabra = ucwords($tex_minus_all);
        //contamos el numero de espacio que ocupa la cadena
        $num_letras = strlen($mayu_ini_palabra);
        $abreviatura = "";

        for ($i = 0; $i < $num_letras; $i++) {
            for ($j = 0; $j < 26; $j++) {
                if ($mayu_ini_palabra[$i] == $letra[$j]) {
                    $abreviatura = $abreviatura . $mayu_ini_palabra[$i] . ". ";
                }
            }
        }
        echo "Su nombre en abreviatura: " . $abreviatura;
    }
        ?>
</body>

</html>