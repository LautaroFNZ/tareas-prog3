<?php
/*
Fernandez,Lautaro
Ejercicio 9 

Realizar las líneas de código necesarias para generar un Array asociativo $lapicera, que
contenga como elementos: ‘color’, ‘marca’, ‘trazo’ y ‘precio’. Crear, cargar y mostrar tres
lapiceras.
*/

//crear
$lapicera1 = array(
    'color'=> '',
    'marca'=> '',
    'trazo'=> '',
    'precio'=> 0
);
$lapicera2 = array(
    'color'=> '',
    'marca'=> '',
    'trazo'=> '',
    'precio'=> 0
);
$lapicera3 = array(
    'color'=> '',
    'marca'=> '',
    'trazo'=> '',
    'precio'=> 0
);


//cargar
for($i=0;$i<3;$i++)
{
    if($i==0)
    {
        $lapicera1['color']='rojo';
        $lapicera1['marca']='bic';
        $lapicera1['trazo']='ultrafino';
        $lapicera1['precio']=150;
    }else{
        if($i==1)
        {
            $lapicera2['color']='azul';
            $lapicera2['marca']='fabercastel';
            $lapicera2['trazo']='fino';
            $lapicera2['precio']=200;
        }else{
            $lapicera3['color']='negra';
            $lapicera3['marca']='pelikan';
            $lapicera3['trazo']='grueso';
            $lapicera3['precio']=120;
        }       
    }
}    

//mostrar
var_dump($lapicera1);
var_dump($lapicera2);
var_dump($lapicera3);



?>