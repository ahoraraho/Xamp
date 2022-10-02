<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Instituto Pedro P. Diaz</title>
</head>

<body>
    <?php
    /**Aplicando arrays asociativos: Este tipo de vectores no es común a 
     * otros lenguajes, pero en PHP son de uso indispensable en distintas 
     * situaciones. Un vector asociativo permite acceder a un elemento del 
     * vector por medio de un subíndice de tipo 
     * string entre los corchetes [] */
    $vec['dni'] = "29324747";
    $vec['nombre'] = "Pedro Pablo Díaz Cornejo";
    $vec['direccion'] = "Av. Pizarro Nro 130 J.L.B. y Rivero";
    echo "<br>".$vec['dni'];
    echo "<br>".$vec['nombre'];
    echo "<br>".$vec['direccion'];
    ?>
</body>

</html>