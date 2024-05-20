<?php
session_start();

include 'conexion_be.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$validar_login = mysqli_query($conexion,"SELECT * FROM usuarios WHERE correo = '$correo'
and contrasena = '$contrasena'");

if(mysqli_num_rows($validar_login) > 0){
    $_SESSION['usuario']=$correo;
    header("location:../../html/index.html ");
    exit;

}else{
    echo'
    <script>
    alert("ESTE USUARIO NO EXISTE, POR FAVOR COMPRUEBE LOS DATOS INTRODUCIDOS ");
    window.location = "../html/index.php";
    </script>
    
    ';
    exit;
}

?>