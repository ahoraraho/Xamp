<?php 
$carro="Hyndai"; 
echo "Antes de destruir variable Mi carro: $carro <br>";
// aplicando unset() para destruir variable
unset($carro); 
echo "Despues de destruir variable con unset() Mi carro: $carro <br>";
// limpiar variables asignando NULL
$carro="Toyota"; 
echo "Antes de asignar NULL variable Mi carro: $carro <br>";
// aplicando NULL a variable
echo "Despues de asignar NULL a variable Mi carro: $carro <br>"; ?>


