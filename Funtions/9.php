<?php
//Búsqueda de dato en matriz indexada

$mat9 = array(
    'Lima', 'Arequipa', 'Trujillo',
    'Iquitos', 'Cuzco', 'Piura'
);
//buscando Iquitos 
echo "Iquitos sta en la matriz:" . in_array('Iquitos', $mat9);
echo "<br> Iquitos esta en la matriz: ";
if (in_array('Iquitos', $mat9) == 1) {
    echo "Si Esta";
} else {
    echo "No esta";
}
