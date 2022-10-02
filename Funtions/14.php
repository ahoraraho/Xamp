<?php
//Combinar matrices

$m1 = array(
    'rojo', 'verde',
    'azul', 'amarillo'
);
$m2 = array(
    'blanco', 'amarillo',
    'negro'
);
//combinando 
$m3 = array_merge($m1, $m2);
echo "Matriz m1 <br>";
print_r($m1);
echo "<br> Matriz m2 <br>";
print_r($m2);
echo "<br> Matriz combinada m3 <br>";
print_r($m3);
