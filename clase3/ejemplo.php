<?php

function openandread()
{
    $ar = fopen("./archivos/saludar.txt","r");

    while(!feof($ar))

        echo fgets($ar) . "<br>";

    fclose($ar);
}

openandread();


?>