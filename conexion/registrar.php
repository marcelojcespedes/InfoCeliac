<?php
include 'conexion.php';
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];
$usuario = $_POST["usuario"];
$contraseña = $_POST["contraseña"];
$telefono = $_POST["telefono"];
$fechadenacimiento = $_POST["fechadenacimiento"];

$insertar = "INSERT INTO usuarios(nombre, apellido, correo, usuario, contraseña, telefono, fechadenacimiento) VALUES ('$nombre', '$apellido', '$correo', '$usuario', '$contraseña', '$telefono', '$fechadenacimiento')";

//ejecutar

$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) { 
    echo 'Error al registrarse';
} else        {
    echo 'Registro correcto';
}
//cerrar conexion
mysqli_close($conexion); 

