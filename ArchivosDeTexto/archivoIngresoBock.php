<?php
//escribir o grabar archivo usando bloqueo
$datos = " Esta es una TERCERA prueba de grabar No 03 con bloque";
$fp = fopen("archivoGravado.txt", "w") or die("ERROR: no se puede abrir archivo...");
flock($fp, LOCK_EX) or die("ERROR: no se puede bloquear archivo...");
fwrite($fp, $datos) or die("ERROR: no se puede grabar datos...");
flock($fp, LOCK_UN) or die("ERROR: no se puede desbloquear archivo...");
fclose($fp);
echo "<br> Los datos fueron grabados en el archivo";
$cad = file_get_contents("archivoGravado.txt") or die("ERROR: no esta el archivo...");
echo "<br> Los nuvos datos leidos son: $cad";
//leer archivo grabado