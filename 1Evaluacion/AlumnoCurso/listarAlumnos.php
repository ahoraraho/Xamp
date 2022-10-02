<!doctype html>
<html>

<head>
    <title>Listado de alumnos</title>
    <style>
        .tablalistado {
            border-collapse: collapse;
            box-shadow: 0px 0px 8px #000;
            margin: 20px;
        }

        .tablalistado th {
            border: 1px solid #000;
            padding: 5px;
            background-color: #FCFC00;
        }

        .tablalistado td {
            border: 1px solid #000;
            padding: 5px;
            background-color: #7684B7;
        }
    </style>
</head>

<body>
    <?php
    $con = mysqli_connect("localhost", "root", "", "instituto") or die("Problemas con la conexión a la base de datos");
    $registros = mysqli_query($con, "select codigo as codigoalun,
nombre as nombrea, mail as maila, codigocurso as codigocur from alumnos ") or die(mysqli_error($con));
    echo '<table class="tablalistado">';
    echo '<tr><th>Codigo del alumno</th><th>Nombre el alumno</th><th>Correo electronico</th><th>Nombre del curso</th></tr>';
    while ($reg = mysqli_fetch_array($registros)) {
        echo '<tr>';
        echo '<td>';
        echo $reg['codigoalun'];
        echo '</td>';
        echo '<td>';
        echo $reg['nombrea'];
        echo '</td>';
        echo '<td>';
        echo $reg['maila'];
        echo '</td>';
        echo '<td>';
        echo $reg['codigocur'];
        echo '</td>';
        echo '</tr>';
    }
    echo '<table>';
    mysqli_close($con);
    ?>
</body>

</html>