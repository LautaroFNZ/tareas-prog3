<?php
/*
Fernández, Lautaro
Obtenga la fecha actual del servidor (función date) y luego imprímala dentro de la página con
distintos formatos (seleccione los formatos que más le guste). Además indicar que estación del
año es. Utilizar una estructura selectiva múltiple.
*/
date_default_timezone_set("America/Buenos_Aires");

$fecha = date("d/m/y");
echo $fecha . "<br>";
$fecha = date("l d/m/y");
echo $fecha . "<br>";
$fecha = date("M d-Y");
echo $fecha . "<br>";
$fecha = date("d/m");

/*
    Verano: 21 de diciembre | 21 de marzo
    Otoño: 21 de marzo | 21 de julio
    Invierno: 21 de julio | 21 de septiembre
    Primavera: 21 de septiembre | 21 de diciembre
*/


switch($fecha)
{
    case $fecha >= date("d21/m09") && $fecha <= date("d21/m12"):
        echo "Primavera";
        break;
    case $fecha >= date("d21/m03") && $fecha <= date("d21/m07"):
        echo "Otoño";
        break;
    case $fecha >= date("d21/m07") && $fecha <= date("d21/m09"):
        echo "Invierno";
        break;
    case $fecha >= date("d21/m12") && $fecha <= date("d21/m03"):
        echo "Otoño";
        break;
                           
}


?>