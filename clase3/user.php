<?php
/*
Archivo: registro.php
método:POST
Recibe los datos del usuario(nombre, clave,mail )por POST ,
crear un objeto y utilizar sus métodos para poder hacer el alta,
guardando los datos en usuarios.csv.
retorna si se pudo agregar o no.
Cada usuario se agrega en un renglón diferente al anterior.
Hacer los métodos necesarios en la clase usuario
*/
class Usuario{
    private $_nombre;
    private $_clave;
    private $_mail;

    public function __construct($nombre,$clave,$mail)
    {
        $this->_nombre = $nombre;
        $this->_clave = $clave;
        $this->_mail = $mail;
    }

    public function toString()
    {
        return "NOMBRE:" . $this->_nombre . "|CLAVE:" . $this->_clave . "|MAIL:" . $this->_mail . "<br>";
    }
    

    public function toWrite()
    {
        return $this->_nombre . "," . $this->_clave . "," . $this->_mail . "\n";
    }

    public static function guardarCSV(Usuario $user)
    {
        $ar = fopen("usuario.csv","a");

        $retorno = fwrite($ar,$user->toWrite());

        fclose($ar);

        if($retorno != FALSE)
        {
            echo "Datos guardados con exito!";
        }else echo "Error al guardar los datos!";
    }

    public static function leerArchivo()
    {

        $ar = fopen("usuario.csv","r");

        $listaUsuarios = array();

        while(!feof($ar))
        {
            $linea = fgets($ar);
            $usuario_farray = explode(",",$linea);
            
            $usuario = new Usuario($usuario_farray[0],$usuario_farray[1],$usuario_farray[2]);

            array_push($listaUsuarios,$usuario);

        }

        
        fclose($ar);

        return $listaUsuarios;
        
    }

    public function mostrarUsuarios($array)
    {
        foreach($array as $usuario)
        {
            echo $usuario->toString();
        }
    }
}

?>