<?php

/**Se quiere imprimir las ternas de un sistema de ejes espaciales x,y,z, donde x de 1..10 */

echo "<b>Ternas de un sistema de ejes espaciales</b><br>";
for ($i = 0; $i < 11; $i++) {
    for ($j = 0; $j < 13; $j++) {
        for ($y=0; $y < 6; $y++) { 
            echo  $i . "," . $j .  "," . $y . " - ";
        }
        echo "<br>";
    }
    echo "<br>";
}
