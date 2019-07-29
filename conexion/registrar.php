<?php
include 'conexion.php';

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];
$usuario = $_POST["usuario"];
$password = $_POST["contraseña"];

$insertar = "INSERT INTO usuarios (nombre, apellido, correo, usuario, contraseña) VALUES ('$nombre', '$apellido', '$correo', '$usuario', '$password')";

$verificar_usuario = mysqli_query($conexion, "SELEC * FROM usuarios WHERE usuario = '$usuario'");
if (mysqli_num_rows($verificar_usuario)) > 0)}
echo '<script>
       alert("el usuario ya esta registrado");
       window.history.go(-);
       </script>';
       exit;
}

$verificar_correo = mysqli_query($conexion, "SELEC * FROM usuarios WHERE usuario = '$usuario'");
if (mysqli_num_rows($verificar_usuario) > 0)}
echo ' El correo ya esta registrado';
exit;
}


//ejecutar

$resultado = mysqli_query($conexion, $insertar);
if (!$resultado) { 
    echo 'Error al registrarse';
} else        {
    echo 'Registro correcto';
}
//cerrar conexion

mysqli_close($conexion); 

