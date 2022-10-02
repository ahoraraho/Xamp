<?php
//Extrae segmento de matriz

$color = array(
    'verde', 'rojo', 'azul',
    'amarillo', 'cafe', 'negro', 'blanco'
);
$mat5 = array_slice($color, 2, 3);
echo "datos de matriz color <br>";
print_r($color);
echo "<br> Datos de matriz de extraccion mat5 <br>";
print_r($mat5);
