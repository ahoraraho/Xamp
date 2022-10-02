<?php

/**Se quiere imprimir los pares ordenados del plano cartesiano para X de 1..10, para Y de 1..15 */

echo "<b>Listado de pares ordenados</b><br>";
for ($i = 0; $i < 11; $i++) {
    for ($j = 0; $j < 16; $j++) {
        echo  $i . "," . $j . " - ";
    }
    echo "<br>";
}
