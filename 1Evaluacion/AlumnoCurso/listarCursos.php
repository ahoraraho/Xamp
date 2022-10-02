<!doctype html>
<html>

<head>
    <title>Lista de cursos</title>
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
    $registros = mysqli_query($con, "select codigocurso, nombrecurso from curso") or die(mysqli_error($con));
    echo '<table class="tablalistado">';
    echo '<tr><th>Codigo curso</th><th>Nombre del curso</th></tr>';
    while ($reg = mysqli_fetch_array($registros)) {
        echo '<tr>';
        echo '<td>';
        echo $reg['codigocurso'];
        echo '</td>';
        echo '<td>';
        echo $reg['nombrecurso'];
        echo '</td>';
        echo '</tr>';
    }
    echo '</table>';
    mysqli_close($con);
    ?>
</body>

</html>