<?php
//Añadir y eliminar elementos a la matriz
$animales = array('leon', 'perro', 'gato', 'paloma');
echo "Datos de matriz animales <br>";
print_r($animales);
//eliminar primer elemento 
array_shift($animales);
echo "<br> Datos de matriz animales <br>";
print_r($animales);
//eliminar ultimo elemento 
array_pop($animales);
echo "<br> Datos de matriz animales <br>";
print_r($animales);
//añadir elemento al final 
array_push($animales, 'araña');
echo "<br> Datos de matriz animales <br>";
print_r($animales);
