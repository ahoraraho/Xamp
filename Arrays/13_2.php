<html>

<head>
    <title>Instituto Pedro P. Diaz</title>
</head>

<body>
    <form action="13_2.php" method="post">
        Ingrese un número : <input type="text" name="numero"> <br>
        <input type="submit" value="Mostrar"><br>
    </form>
    <?php
    //Printf nos ofrece otras posibilidades según su sintaxis:
    $num = $_REQUEST['numero'];
    printf("El número en decimal es: %d <br>", $num);
    printf("El número en binario es: %b <br>", $num);
    printf("El número en octal es: %o <br>", $num);
    printf("El número en hexadecimal es: %x <br>", $num);
    ?>
</body>

</html>