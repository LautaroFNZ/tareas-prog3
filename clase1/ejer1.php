<?php   
/*
Fernández, Lautaro.
Confeccionar un programa que sume todos los números enteros desde 1 mientras la suma no
supere a 1000. Mostrar los números sumados y al finalizar el proceso indicar cuantos números
se sumaron.
*/

$suma = 0;
$i = 0;

do{
    $i++;

    if($suma + $i > 1000)
    {
        break;
    }else{
        $suma += $i;
    }
    echo $i . "<br>";

}while($suma < 1000);

echo "Su sumaron " .$i. " numeros <br>";
echo "La suma dio " . $suma;

?>