<?php 
//definicion de variables y comparaciones con distiontos tipos de variables
$p=10; $q=11; $r=11.5; $s=11; $b=(boolean) 1; $n=(integer) 1; 
echo "<br> Comparando q > p :".($q > $p); 
echo "<br> Comparando q < p :".($q < $p); 
echo "<br> Comparando q <= p :".($q <= $p); 
echo "<br> Comparando q <= s :".($q <= $s); 
echo "<br> Comparando q == s :".($q == $s); 
echo "<br> Comparando q == r :".($q == $r); 
echo "<br> Comparando b == n :".($b == $n); 
echo "<br> Comparando b === n :".($b === $n); 
//=== comparaciones espesificas, hasta con el tipo de variable
?>