<?php
//def mat | Elimina elemento duplicado

$mat6 = array('e', 'u', 'c', 'e', 'a', 'l', 'i', 'p', 'e', 't', 'o');
$mat7 = array_unique($mat6);
echo "Matriz con elemntos repetidos <br>";
print_r($mat6);
echo "<br> Matriz sin elemntos repetidos <br>";
print_r($mat7);
