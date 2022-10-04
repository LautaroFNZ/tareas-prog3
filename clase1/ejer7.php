<?php
/*
Fernandez,Lautaro
Ejercicio 7 
Generar una aplicación que permita cargar los primeros 10 números impares en un Array.
Luego imprimir (utilizando la estructura for) cada uno en una línea distinta (recordar que el 
salto de línea en HTML es la etiqueta <br/>). Repetir la impresión de los números utilizando
las estructuras while y foreach.
*/

$arrayImpares = array();
$index=0;

for($i=0;$i<10;$i++)
{
    if(!($i%2==0))
    {
        $arrayImpares[$index]=$i;
        $index++;
    }
}

//var_dump($arrayImpares);
echo 'Recorrido foreach <br>';
foreach($arrayImpares as $array)
{
    echo $array . '<br>';
}

echo '----------- <br>';

$cantidadElementos = count($arrayImpares);
//echo $cantidadElementos;
$index = 0;
echo 'Recorrido while <br>';
do{
    echo $arrayImpares[$index] . '<br>';
    $index++;

}while($index != $cantidadElementos);



?>