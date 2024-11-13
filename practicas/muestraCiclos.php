<?php 
if(!isset($_POST))
{
    echo "<script type='text/javascript'>
         alert('La Asignacion de las Tablas no es correcta');
         window.location='ciclos.php';
      </script>";
}else{
    $v1=$_POST['minimo'];
    $v2=$_POST['maximo'];


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="diseño.css">
    <title>Document</title>
</head>
<body>
    <?php
    for($i=$v1;$i<=$v2;$i++)
    
    {
        for($j=1;$j<11;$j++)
        {
            $v3=$i*$j;
            ?>
            <input type="text" name="mult" value="<?php echo $i;?>">

            <input type="text" nmae="multip" value="<?php echo $j;?>">

            <input type="text" name="resu" value="<?php echo $v3;?>">
            <br>
            <?php
            
        
            

        }

        
    }
    ?>
</body>
</html>