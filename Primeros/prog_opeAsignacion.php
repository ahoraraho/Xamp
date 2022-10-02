<?php 
//operaciones por asignancion (reduce el codigo, mas simplificado
//definimos las variables
$cuenta=10; 
$edad=30; 
$saludo=" welcome"; 

$edad+=5; $cuenta-=2;// $edad=$edad+5; $cuenta=$cuenta-2; 
echo "<br>uso de {edad += 5 } =  ".$edad."<br> uso de {cuenta -= 2} = ".$cuenta; 
echo "<br> uso de {edad *= 2 } = ".$edad*=2; 
echo " <br>uso {de edad /= 2 } = ".$edad/=2;
echo " <br> usu de {edad %= 7 } = ".$edad%=7;  
echo "<br> uso de .= ".$saludo.=" to city of Arequipa"; 
?>