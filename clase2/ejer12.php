<?php
/*
Fernandez,Lautaro
Ejercicio 12

Realizar el desarrollo de una función que reciba un Array de caracteres y que invierta el orden
de las letras del Array.
Ejemplo: Se recibe la palabra “HOLA” y luego queda “ALOH”.
*/

function invertir($string)
{
    $len = count($string);
    $nuevaPalabra = '';
    
    for($i=$len-1;$i>-1;$i--)
    {
        
        $nuevaPalabra .=$string[$i];
    }

    return $nuevaPalabra;
}

$palabra = invertir(array("h","o","l","a"));
echo $palabra;

?>