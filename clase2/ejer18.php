<?php
/*
Fernandez, Lautaro
Ejercicio 18

Crear la clase Garage que posea como atributos privados:

_razonSocial (String)
_precioPorHora (Double)
_autos (Autos[], reutilizar la clase Auto del ejercicio anterior)

Realizar un constructor capaz de poder instanciar objetos pasándole como parámetros:

i. La razón social.
ii. La razón social, y el precio por hora.

Realizar un método de instancia llamado “MostrarGarage”, que no recibirá parámetros y
que mostrará todos los atributos del objeto.
Crear el método de instancia “Equals” que permita comparar al objeto de tipo Garaje con un
objeto de tipo Auto. Sólo devolverá TRUE si el auto está en el garaje.
Crear el método de instancia “Add” para que permita sumar un objeto “Auto” al “Garage”
(sólo si el auto no está en el garaje, de lo contrario informarlo).
Ejemplo: $miGarage->Add($autoUno);
Crear el método de instancia “Remove” para que permita quitar un objeto “Auto” del
“Garage” (sólo si el auto está en el garaje, de lo contrario informarlo).
Ejemplo: $miGarage->Remove($autoUno);
En testGarage.php, crear autos y un garage. Probar el buen funcionamiento de todos los
métodos.
*/
include "ejer17.php";

class Garage{


private $_razonsocial;
private $_precioPorHora;
private $_autos;

public function __construct($_razonsocial,$_precioxhora=100,$_autos= NULL)
{
    $this->_razonsocial=$_razonsocial;
    $this->_precioPorHora=$_precioxhora;
    
    if($_autos == NULL)
    {
        $this->$_autos = array();
    }else{
        $this->_autos = $_autos;
    }
}    


public function MostrarGarage(){
    echo "<br>" . $this->_razonsocial . " $" .  $this->_precioPorHora . "<br>Autos: <br>";

    if(count($this->_autos)<=0)
    {
        echo "El garage esta vacio!";
    }else{
        foreach($this->_autos as $auto)
        {
            echo Auto::MostrarAuto($auto) . "<br>";
        }
    }

    
}

public function Equals(Auto $autito)
{
    $retorno = false;
    foreach($this->_autos as $auto)
    {
        if($auto == $autito)
        {
           $retorno = true;
        }
    }

    return $retorno;
}

public function Add(Auto $_auto)
{
    if($this->Equals($_auto)== FALSE)
    {
         array_push($this->_autos,$_auto);
         echo "Elemento agregado con exito<br>";
    }else{
        echo "El auto ya se encuentra en el garage.<br>";
    }
}

public function Remove(Auto $_auto)
{
    $control = 0;
    foreach($this->_autos as $key => $auto)
    {
        if($auto == $_auto)
        {
            unset($this->_autos[$key]);
            
            $control=1;
        }
    }
    
    if($control==1)
    {
        echo "El auto fue removido con exito!<br>";
    }else{
        echo "El auto no se encontraba en el garage!";
    }
    
}


}





?>