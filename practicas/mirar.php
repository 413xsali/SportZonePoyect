<?php 
$var1=$_POST["suldo"];
$var2=$_POST["nombre"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="mirar.php" method="post">
    <label for="valor">Valor Sueldo : </label>
    <input type="text" name="suldo" value="<?php echo $var1;?>"><br>
    <label for="nombre">Nombre Emp. : </label>
    <input type="text" name="nombre  placeholder="Digite el Nombre">
    <br>
    <input type="submit" value="Enviar">
  </form>  
    
</body>
</html>