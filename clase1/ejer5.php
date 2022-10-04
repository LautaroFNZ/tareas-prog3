<?php

/*
Fernandez, Lautaro
Ejercicio 5

Realizar un programa que en base al valor numérico de una variable $num, pueda mostrarse
por pantalla, el nombre del número que tenga dentro escrito con palabras, para los números
entre el 20 y el 60.
Por ejemplo, si $num = 43 debe mostrarse por pantalla “cuarenta y tres”.

*/

$letras = array('veinte','veintiuno','veintidos','veintitres','veinticuatro','veinticinco','ventiseis','ventisiete','veintiocho','veintinueve','treinta','cuarenta','cincuenta','sesenta');
$numlet = array(' y uno',' y dos', ' y tres',' y cuatro',' y cinco',' y seis',' y siete',' y ocho',' y nueve');
$index = 0;

for($i=0;$i<50;$i++)
{
    if($i <= 10)
    {
        echo $letras[$i] . '<br>';
    }else if($i >= 10)
    {
        if($i>=10 && $i<=19)
        {
            echo $letras[10] . $numlet[$index] . '<br>';
            $index++;
            
        }

        if($i==20)
        {
            echo $letras[10] . '<br>';
            $index=0;
        }
        
        if($i>=21 && $i<=28)
        {
            echo $letras[11] . $numlet[$index] . '<br>';
            $index++;
        }   

        if($i==29)
        {
            echo $letras[12] . '<br>';
            $index=0;
        }

        if($i>=30 && $i<=38)
        {
            echo $letras[12] . $numlet[$index] . '<br>';
            $index++;
        } 

        if($i==39)
        {
            echo $letras[13] . '<br>';
            $index=0;
        }
        //tal vez un poco rebuscado, pero se puede adaptar para que el usuario ingrese un numero y se muestre el mensaje.
    }

    
    


    
}


?>