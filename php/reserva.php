<?php
$usuario="root";
$clave="";
$servidor="localhost";
$db="p_final";

$enlace = new mysqli($servidor,$usuario,$clave,$db);

    if($enlace->connect_errno)
	{
		echo "No hay conexión: (" . $conn->connect_errno . ") " . $conn->connect_error;
        exit();
	}

$nombre  = $_POST["user_name"];
$telefono = $_POST["user_phone"];
$correo    = $_POST["user_email"];
$consola   = $_POST["guests"];
$fecha    = $_POST["date"];
$hora    = $_POST["time"];


$insertarDatos ="INSERT INTO reservas(nombre,telefono,correo,consola,fecha,hora) values('$nombre','$telefono','$correo','$consola','$fecha','$hora')";
if($enlace->query($insertarDatos))
    {
        echo "<script> alert('registrado');window.location= '../reserva.html' </script>";
    }
    else 
    {
        echo "Error: " .$queryregistrar."<br>";
    }
//$enlace->query($insertarDatos);
//$insertarDatos->close();
$enlace->close();
 //$ejecutarinsertar = mysqli_query($enlace, $insertarDatos) ;   
 /*if($ejecutarinsertar){
     echo"error en la linea de sql";
 } */                                          

?>