<?php
/*
Fernandez,Lautaro
Ejercicio 4

Escribir un programa que use la variable $operador que pueda almacenar los símbolos
matemáticos: ‘+’, ‘-’, ‘/’ y ‘*’; y definir dos variables enteras $op1 y $op2. De acuerdo al
símbolo que tenga la variable $operador, deberá realizarse la operación indicada y mostrarse el
resultado por pantalla.

*/

$operador = array('+','-','/','.');
$op1 = 10;
$op2 = 5;

foreach($operador as $op)
{
    if($op == '+')// simplemente para elegir el + como operador, no se me ocurre como hacer para que un usuario ingrese el operador que desee.
    {
        break;
    }
}

switch($op)
{
    case '+':
        echo $op1+$op2;
        break;
    case '-':
        echo $op1-$op2;
        break;
    case '/':
        echo $op1/$op2;
        break;
    case '.':
        echo $op1.$op2;
        break;
    default:
        echo 'ERROR';
        break;                        
}


?>