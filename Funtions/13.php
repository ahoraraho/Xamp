<?php $datos2 = array(
    //Ordenar matriz asociativa por clave
    "apellido" => "Diaz",
    "sexo" => "Masculino",
    "edad" => "33",
    "ocupacion" => "Empresario",
    "nombre" => "Pedro"
);
echo "Matriz original <br>";
print_r($datos2);
//ordenar por valor ksort($datos2); 
echo "<br> Matriz ordenada por clave <br>";
print_r($datos2);
//invertir secuencia krsort($datos2); 
echo "<br> Matriz invertida <br>";
print_r($datos2);
