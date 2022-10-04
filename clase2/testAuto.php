<?php
/*
● Crear dos objetos “Auto” de la misma marca y distinto color.
● Crear dos objetos “Auto” de la misma marca, mismo color y distinto precio.
● Crear un objeto “Auto” utilizando la sobrecarga restante.
● Utilizar el método “AgregarImpuesto” en los últimos tres objetos, agregando $ 1500
al atributo precio.
● Obtener el importe sumado del primer objeto “Auto” más el segundo y mostrar el
resultado obtenido.
● Comparar el primer “Auto” con el segundo y quinto objeto e informar si son iguales o
no.
● Utilizar el método de clase “MostrarAuto” para mostrar cada los objetos impares (1, 3,
5)
*/

require_once "ejer17.php";

$auto1 = new Auto("Ford","Gris");
$auto2 = new Auto("Ford","Beige");

$auto3 = new Auto("Peugeot","Negro",150);
$auto4 = new Auto("Peugeot","Negro",200);
$auto5 = new Auto("Toyota","Amarillo",15000,date("25/06/78"));

$precioAuto3 = $auto3->AgregarImpuestos(1500);
$precioAuto4 = $auto4->AgregarImpuestos(1500);
$precioAuto5 = $auto5->AgregarImpuestos(1500);

echo Auto::Add($auto1,$auto2);

echo $auto1->Equals($auto1,$auto2) . '<br>';
echo $auto1->Equals($auto1,$auto5) . '<br>';

echo Auto::MostrarAuto($auto1) . "<br>";
echo Auto::MostrarAuto($auto3) . "<br>";
echo Auto::MostrarAuto($auto5) . "<br>";
?>
