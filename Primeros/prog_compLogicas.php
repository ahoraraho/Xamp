<?php
// comparacion logica de tipos de variables y sus valores
$x=100; $y=20; 
echo "Comparaciones logicas <br>"; 
echo "<br> x > 50 and < 25: ".($x > 50 && $y<25); 
echo "<br> x  150 or > 80: ".($x > 150 || $y > 80); 
echo "<br> not(x > 200) :".!($x > 200); 
?>