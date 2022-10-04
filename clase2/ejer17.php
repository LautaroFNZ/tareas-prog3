<?php
/*
Fernandez,Lautaro
Ejercicio 17

Realizar una clase llamada “Auto” que posea los siguientes atributos privados:

_color (String)
_precio (Double)
_marca (String).
_fecha (DateTime)

Realizar un constructor capaz de poder instanciar objetos pasándole como parámetros:

i. La marca y el color.
ii. La marca, color y el precio.
iii. La marca, color, precio y fecha.

Realizar un método de instancia llamado “AgregarImpuestos”, que recibirá un doble por
parámetro y que se sumará al precio del objeto.
Realizar un método de clase llamado “MostrarAuto”, que recibirá un objeto de tipo “Auto”
por parámetro y que mostrará todos los atributos de dicho objeto.
Crear el método de instancia “Equals” que permita comparar dos objetos de tipo “Auto”. Sólo
devolverá TRUE si ambos “Autos” son de la misma marca.
Crear un método de clase, llamado “Add” que permita sumar dos objetos “Auto” (sólo si son
de la misma marca, y del mismo color, de lo contrario informarlo) y que retorne un Double con
la suma de los precios o cero si no se pudo realizar la operación.
Ejemplo: $importeDouble = Auto::Add($autoUno, $autoDos);
En testAuto.php:
● Crear dos objetos “Auto” de la misma marca y distinto color.
● Crear dos objetos “Auto” de la misma marca, mismo color y distinto precio.
● Crear un objeto “Auto” utilizando la sobrecarga restante.
● Utilizar el método “AgregarImpuesto” en los últimos tres objetos, agregando $ 1500
al atributo precio.
● Obtener el importe sumado del primer objeto “Auto” más el segundo y mostrar el
resultado obtenido.
● Comparar el primer “Auto” con el segundo y quinto objeto e informar si son iguales o
no.
● Utilizar
*/

class Auto{
    private $color;
    private $precio;
    private $marca;
    private $fecha;

    public function __construct($marca,$color,$precio = 0.0,$fecha="-")
    {
        $this->marca = $marca;
        $this->color = $color;
        $this->precio = $precio;
        $this->fecha = $fecha;
       
    }


    /*
    Realizar un método de instancia llamado “AgregarImpuestos”, que recibirá un double por
    parámetro y que se sumará al precio del objeto.
    */

    public function AgregarImpuestos(float $valorAgregado)
    {        
        return $this->precio += $valorAgregado;
    }

    /*
    Realizar un método de clase llamado “MostrarAuto”, que recibirá un objeto de tipo “Auto”
    por parámetro y que mostrará todos los atributos de dicho objeto.
    */
    
    public static function MostrarAuto(Auto $auto)
    {
        echo $auto->marca . " " . $auto->color;

        if($auto->precio !=0 && $auto->fecha != "-")
        {
            echo " " . $auto->precio . " " . $auto->fecha;     
        }

        
    }

    /*
    Crear el método de instancia “Equals” que permita comparar dos objetos de tipo “Auto”. Sólo
    devolverá TRUE si ambos “Autos” son de la misma marca.
    */

    public function Equals(Auto $Auto1, Auto $Auto2)
    {                                              //-1 el primero 
        return strcmp($Auto1->marca,$Auto2->marca);//0 son iguales
                                                   //1 el segundo 
    }

    /*
    Crear un método de clase, llamado “Add” que permita sumar dos objetos “Auto” (sólo si son
    de la misma marca, y del mismo color, de lo contrario informarlo) y que retorne un Double con
    la suma de los precios o cero si no se pudo realizar la operación.
    Ejemplo: $importeDouble = Auto::Add($autoUno, $autoDos);
    */

    public static function Add(Auto $auto1,Auto $auto2)
    {
        $precioSumado=0;
        if($auto1 == $auto2 && $auto1->color == $auto2->color)
        {
            $precioSumado = $auto1->precio + $auto2->precio;
            return $precioSumado;
        }else{
            return "No se puede realizar la suma.<br>";
        }

        
    }

    

}
?>