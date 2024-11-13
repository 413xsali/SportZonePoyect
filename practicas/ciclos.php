<?php 
    if(isset($_POST["mio"]))
    {
        $v1=$_POST["minimo"];
        $v2=$_POST["maximo"];
        if($v1>$v2)
        {
            echo "<script type='text/javascript'>
                alert('La Asignacion de las Tablas no es correcta');
                window.location='ciclos.php';
            </script>";

        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="muestraCiclos.php" method="post">
        <label for="minimo">Minima
            <input type="text" name="minimo" id="minimo" placeholder="Valor Minimo">
        </label>
        <label for="maximo">Maximo
            <input type="text" name="maximo" placeholder="Valor Maximo">
        </label>
        <input type="submit" name="enviar" value="Enviar">
        <input type="hidden" name="mio" value="si">
    </form>
</body>
</html>