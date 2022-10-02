<?php
//Ordenar aleatoriamente, invertir matriz

$mat8 = array(
    'Pedro', 'Pablo', 'Diaz',
    'Cornejo', 'Filomeno', 'Garcia', 'Calisaya'
);
echo "Datos d matriz original <br>";
print_r($mat8);
//obtener nuvo ordenamiento 
shuffle($mat8);
echo "<br> Datos d matriz reorganizada <br>";
print_r($mat8);
//obtener matriz invertida 
$mat9 = array_reverse($mat8);
echo "<br> Datos d matriz reversa <br>";
print_r($mat9);
