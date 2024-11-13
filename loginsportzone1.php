<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilologinsportzone1.css">
    <title>Document</title>
</head>
<body>
    <div class="formulario_registro">
        <h3>SportZone</h3>
        <div class="imgen">
        <img src="imgs/png-clipart-computer-icons-button-login-image-file-formats-logo.png" alt="">
        </div>
        <form action="sportzone1.php" method="POST">
            <input class="controles" type="text" name="id_usuario" id="id_usuario" value=""  placeholder="numero de cedula">
            <input class="controles" type="text" name="contraseña" id="nombre_us" value="" placeholder="contraseña">
            <select class="controles" name="tipo" id="tipo">
                <option value="1">Administrador</option>
                <option value="2">Cliente</option>
                <option value="3">Empleado</option>
                <option value="4">Gerente</option>
            </select>
            <div class="qwerty">               
                <p><a href="#">¿Olvidastes tu Contraseña?</a><p></div>
            <div class="boton">
            <button type="submit">INICIAR SESION</button>
            </div>
        </form>
    </div>
    
</body>
</html>