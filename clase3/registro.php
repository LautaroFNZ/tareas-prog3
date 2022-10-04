<?php
require_once("user.php");



switch($_GET['tipo'])
{
    case 'usuario':
        $listaUsuarios = Usuario::leerArchivo();
        
        foreach($listaUsuarios as $usuario)
        {
            echo $usuario->toString();
        }
        
        break;

    case 'productos':
        echo 'Mostrando productos';
        break;

    case 'vehiculos':
        echo 'Mostrando vehiculos';
        break;
    case default:
        echo "ERROR";
        break;
}



?>