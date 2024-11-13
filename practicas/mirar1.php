<?php
$id_usuario = $_POST['id_usuario'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dir_usua = $_POST['dir_usua'];
$Num_Tel = $_POST['Num_Tel'];
$correo_us = $_POST['correo_us'];
echo "su id de usuario es " , $id_usuario;
echo "<br>"; echo "<hr>";
echo "el nombre del usuario es ", $nombre , $apellido;
echo "<br>"; echo "<hr>";
echo "su direccion es ", $dir_usua;
echo "<br>"; echo "<hr>";
echo "su telefono es " , $Num_Tel;
echo "<br>"; echo "<hr>";
echo "su correo es " , $correo_us;
?>