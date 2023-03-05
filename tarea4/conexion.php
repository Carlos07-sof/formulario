<?php
function conectarDB() 
{
    $host = 'localhost'; //'148.222.7.8'
    $user = 'id20284397_root';
    $pass = 'ILikeIt2001*';

    if (!( $link = @mysqli_connect($host,$user,$pass)) )
    {    
        echo "Error al realizar la conexión a la base de datos.";
        exit();

    }
    if (!mysqli_select_db($link,"id20284397_bd_aspirante"))
    { 
        echo "Error al seleccionar la base de datos."; 
        exit(); 
    }   
    return $link; 
}
?>