<?php

include 'conexion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$perfil = $_POST['rol'];
// encriptamiento de contraseña



$query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena, IdPerfil)
          VALUES('$nombre_completo','$correo','$usuario','$contrasena','$perfil');";
// aqui vamos a verificar que el correro no ser repita en l base de datos 
$verificar_correo = mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo = '$correo' ");
if(mysqli_num_rows($verificar_correo) > 0 ){
    echo'
    <script>
    alert("El correo que estas introduciendo ya existe, intenta con otro diferente");
    window.location = "../html/index.php";
    </script>
    
    ';
    exit();
}
// aqui vamos a verificar que el usuario no ser repita en l base de datos 
$verificar_usuario = mysqli_query($conexion,"SELECT * FROM usuarios WHERE usuario = '$usuario' ");
if(mysqli_num_rows($verificar_usuario) > 0 ){
    echo'
    <script>
    alert("El usuario que estas introduciendo ya existe, intenta con otro diferente");
    window.location = "../html/index.php";
    </script>
    
    ';
    exit();
}
$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
echo '<script>
        alert("usuario se ha almacenado con exito")
        window.location = "../html/index.php";
       </script> ';
}else{
    echo '<script>
        alert("intentalo de nuevo")
        window.location = "../html/index.php";
       </script> ';
}
mysqli_close($conexion);
?>
