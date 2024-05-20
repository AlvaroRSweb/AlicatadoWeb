<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Registro - AlicatadoWeb</title>
    <link rel="stylesheet" href="../css/estilosdos.css">
</head>
<body>
    <main>
<div class="contenedor__todo">

    <div class="caja__trasera">
        <div class="caja__trasera-login">
            <h3>¿tienes ya una cuenta?</h3>
            <p>inicia secion para entrar en la pagina</p>
            <button id="btn__iniciar-sesion">Iniciar Sesion </button>
        </div>
        <div class="caja__trasera-register">
            <h3>¿todavia no tienes cuenta?</h3>
            <p>registrate para poder entrar</p>
            <button id="btn__iniciar-registrarse">Registrarse </button>
        </div>

    </div>
    <!--esto es un formulario de login y registro-->
    <!--login-->
    <div class="contenedor__login-register">
         <form action="../php/login_usuario_be.php" method = "POST" class="formulario__login">
            <h2>iniciar Sesion</h2>
            <input type="text" placeholder="Correo Electronico" name="correo">
            <input type="password" placeholder="contraseña" name="contrasena">
            <button>Entrar</button>

        </form>
          <!--registro-->
        <form action="../php/registro_usuario_be.php" method = "POST" class="formulario__register">
            <h2>Registrarse</h2>
            <input type="text" placeholder="Nombre Completo" name = "nombre_completo">
            <input type="text" placeholder="Correro Electronico" name = "correo">
            <input type="text" placeholder="Usuario" name = "usuario">
            <input type="password" placeholder="Contraseña" name = "contrasena">
            <select name="rol" required>
                <option value="1">Albañil</option>
                <option value="2">Peon</option>
                <option value="3">Oficial</option>
            </select>
            <button>Registrarse</button>
         </form>
    </div>



</div>
  </main>
    <script src ="../js/scriptdos.js"></script>
</body>
</html>