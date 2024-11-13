
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo_formulario_1.css">
    <title>Document</title>
</head>
<body>
    <div class="formulario_registro">
        <h3>formulario captura usuario</h3>
        <form action="mirar1.php" method="POST">
            <input class="controles" type="text" name="id_usuario" id="id_usuario" value="" placeholder="codigo u">
            <input class="controles" type="text" name="nombre" id="nombre_us" value="" placeholder="Nombres Usuario">
            <input class="controles" type="text" name="apellido" id="apellido_us" value=""placeholder="Apellidos Usuario">
            <input class="controles" type="text" name="dir_usua" id="dir_usua" value="" placeholder="Direccion Usuario">
            <input class="controles" type="text" name="Num_Tel" id="Num_Tel" value="" placeholder="Numero Telfonico">
            <input class="controles" type="email" name="correo_us" id="correo_us" value="" placeholder="Correo Electronico">
            <select class="controles" name="tipo" id="tipo">
                <option value="1">Administrador</option>
                <option value="2">Cliente</option>
                <option value="3">Empleado</option>
                <option value="4">Gerente</option>
            </select>
            <button type="submit">ENVIAR DATOS</button>
        </form>
    </div>
    
</body>
</html>
