<!DOCTYPE html>
<html lang="es">

<head>
    <title> Tabla Colores </title>
    <style type="text/css">
    body {
        font-family: verdana sans-serif;
    }

    td {
        border: solid 10px white;
    }
    </style>
</head>

<body>
    <h2> Colores con Php y Html </h2>
    <table>
        <tr>
            <td> Azul </td>
            <td style="width: 4px; background-color:#0000ff"> </td>
        </tr>
        <tr>
            <td> <?php echo "Rojo"; ?> </td>
            <td style="width: 4px; background-color: <?php echo '#ff0000'; ?>"> </td>
        </tr>
        <?php echo "<tr> <br>"; echo "<td> Verde </td> <br>"; echo "<td style=\"width: 4px; background-color: #00ff00\"> </td> <br>"; echo "</tr> <br>"; ?>
    </table>
</body>

</html>