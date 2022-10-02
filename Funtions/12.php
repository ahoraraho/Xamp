<?php
//Ordenar matriz asociativa

$datos2 = array(
    "nombre" => "Pedro",
    "apellido" => "Diaz", "sexo" => "Masculino",
    "edad" => "33", "ocupacion" => "Empresario"
);
echo "Matriz original <br>";
print_r($datos2);
//ordenar por valor asort($datos2); 
echo "<br> Matriz ordenada por valor <br>";
print_r($datos2);
//invertir secuencia arsort($datos2); 
echo "<br> Matriz invertida <br>";
print_r($datos2);
