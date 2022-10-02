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
        /**Ingresar horas trabajadas, costo hora, tipo (1=gerencia, 2=administración,
        3=empleado, 4=obrero).Hallar sueldo bruto, hallar bonificación (si tipo 1 bonifica=10% de sueldo bruto,
        si tipo=2 bonifica 8%, si tipo 3 bonifica 6%, si tipo 4 bonifica 5%).Imprimir
        sueldo bruto, bonificación, sueldo neto. */

    ?>
        <form method="post" action="6.php">
            <p> <b>Salario</b> </p>
            <label for="">Ingrese numero de horas trabajadas </label>
            <input type="text" name="nh" size="3" /><br>
            <label for="">Ingrese el salario pagado por hora </label>
            <input type="text" name="sh" size="3" /><br>
            <label for="">Escoja el tipo de cargo tiene: </label>
            <select name="cargo">
                <option value="Gerente"><b>gerencia</b></option>
                <option value="Administrador"><b>administración</b></option>
                <option value="Empleado"><b>empleado</b></option>
                <option value="Obrero"><b>obrero</b></option>
            </select><br>
            <label for="">Escoja el tipo de vonificacion: </label>
            <select name="tipo">
                <option value="1"><b>tipo 1</b></option>
                <option value="2"><b>tipo 2</b></option>
                <option value="3"><b>tipo 3</b></option>
                <option value="4"><b>tipo 4</b></option>
            </select><br>
            <input type="submit" name="btnEnvia" value="Calcular" />
        <?php
        // si formulario se envio procesar datos de entrada 
    } else {
        $nhoras = $_POST['nh'];
        $shora  = $_POST['sh'];
        $cargo  = $_POST['cargo'];
        $tipodv  = $_POST['tipo'];
        $vonifi = 0;
        $suebruto = $nhoras * $shora;
        switch ($tipodv) {
            case 1:
                $vonifi = 10;
                break;
            case 2:
                $vonifi = 8;
                break;
            case 3:
                $vonifi = 6;
                break;
            case 4:
                $vonifi = 5;
                break;
            default:
                # code...
                break;
        }
        echo "<b>Detalles</b>";
        echo "<br>Cargo que ocupa: " . $cargo;
        echo "<br>Salario bruto es: " . $suebruto;
        echo "<br>Vonificacion: " . $suebruto * ($vonifi / 100);
        echo "<br>Salario neto es: " . $suebruto + $suebruto * ($vonifi / 100);
    }
        ?>
</body>

</html>