<?php
//Comparación de matrices: intersección, diferencia

$m1 = array(
    'rojo', 'verde',
    'azul', 'amarillo'
);
$m2 = array(
    'blanco', 'amarillo',
    'negro'
);
//hallar interseccion 
$m3 = array_intersect($m1, $m2);
echo "Matriz m1<br>";
print_r($m1);
echo "<br> Matriz m2 <br>";
print_r($m2);
echo "<br> Matriz interseccion m3 <br>";
print_r($m3);
//hallar matriz diferencia 
$m4 = array_diff($m1, $m2);
echo "<br> Matriz diferencia m4 <br>";
print_r($m4);
