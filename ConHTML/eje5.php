<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Operaciones</title>
</head>

<body>
    <h2>Operaciones normales y con ()</h2>
    <?php
$a=20;
$b=65;
$resultado=$a+$b;
echo $resultado;
$a=10;
$b=2;
$c=1;
$d=6;
$resultado=(($a+$b)/($c+$d))+($a*$b*$c*$d); 
echo "<br>" .$resultado;
?>
</body>

</html>