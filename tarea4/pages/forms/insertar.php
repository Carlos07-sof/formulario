<?php
    require_once '/xampp/htdocs/Practica/conexion.php';
    $con = conectarDB();

    $nombreCompleto = $_POST['nombre'];
    $Fecha = $_POST['fecha'];
    $Edad = $_POST['edad'];
    $Bachillerato = $_POST['bachi'];
    $Promedio = $_POST['promedio'];
    $Municipio = $_POST['seleccionar'];
    $Certificado = $_POST['certificado'];
    $fecha_mysql = date("Y-m-d", strtotime($Fecha));
    $imageNombre = $_FILES['foto']['name'];
    if (isset($imageNombre) && $imageNombre) {
        $tipo = $_FILES['foto']['type'];
        $temp = $_FILES['foto']['tmp_name'];

        if (!((strpos($tipo, 'gif') || strpos($tipo, 'png') || strpos($tipo, 'jpeg')))) {
            $_SESSION['mensaje'] = 'Solo se permite archivos png, gif, jpeg';
            header("location: ../forms/general.php");
        } else {
            $sql = "INSERT INTO aspirante(nombre, fecha, edad, bachillerato, promedio, municipio, certificado, foto) VALUES('".$nombreCompleto."','".$fecha_mysql."',".$Edad.", '".$Bachillerato."',".$Promedio.",'".$Municipio."', '".$Certificado."','".$imageNombre."')";
            $resultado = mysqli_query($con, $sql);
            if($resultado){
                move_uploaded_file($temp, '/xampp/htdocs/Practica/images/'.$imageNombre);
                $_SESSION['mensaje'] = 'Se ha subido correctamente';
                header("location: ../forms/general.php");
            }else{
                $_SESSION['mensaje'] = 'ocurrio un error en el servidor';
            }
        }
    }    
?>