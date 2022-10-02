<?php
//Búsqueda en matriz asociativa

$ciudad = array(
    "Peru" => "Lima", "Argentina" => "Buenos Aires",
    "Ecuador" => "Quito", "Chile" => "Santiago"
);
//busqueda por palabra clave 
echo "Buscar Ecuador: " . array_key_exists('Ecuador', $ciudad);
echo "<br> Buscar Ecuador: ";
if (array_key_exists('Ecuador', $ciudad) == 1) {
    echo "Si existe...";
} else {
    echo "No existe";
}
