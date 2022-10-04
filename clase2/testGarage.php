<?php
/*
Fernandez, Lautaro
Ejercicio 18 (adjunto nuevamente la clase auto del ejercicio 17)
*/

require "ejer18.php";

$auto1= new Auto("Toyota","Rojo");
$auto2= new Auto("Toyota","Verde");

$_autos= array($auto1,$auto2);

$garage1 = new Garage("RI",1500,$_autos);

echo "Intento agregar un elemento ya existente:<br>";
echo $garage1->Add(new Auto("Toyota","Rojo"));
echo "Intento agregar un elemento nuevo!";
echo $garage1->Add(new Auto("Lambo","Verde"));
echo "Remuevo un elemento existente:<br>";
echo $garage1->Remove($auto1);
echo "Muestro el garage<br>";
$garage1->MostrarGarage();

echo "--------- <br> Creo otro garage<br>";

$autos2= array($auto1,new Auto("Limusina","Negra"));
$garage2 = new Garage("Monotributista",100,$autos2);
echo "Intento remover un elemento que no existe:<br>";
echo $garage2->Remove(new Auto("Citroen C3","Azul"));
echo "Muesto el garage:<br>";
$garage2->MostrarGarage();






?>