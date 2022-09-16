<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/marron.ico"> 
    <title>Modificar Datos</title>
    <link rel="stylesheet" href="css/style.css?1.1">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        include("data.php");
        $id= $_REQUEST['id'];
		$consulta = "SELECT * FROM viviendas WHERE id='$id'";
		$resultado = mysqli_query($conex,$consulta);
		$row = $resultado->fetch_array();
	?>
        <form action="modificado.php?id=<?php echo $row['Id']; ?>" method="post" enctype="multipart/form-data">
            <h1>Modificar Datos</h1>
            <input type="text" name="tipo" placeholder="Tipo" value="<?php echo $row['Tipo'];?>">
            <input type="text" name="zona" placeholder="Zona" value="<?php echo $row['Zona'];?>">
            <input type="number" name="dormitorios" placeholder="Dormitorios" value="<?php echo $row['Dormitorios'];?>">
            <input type="number" name="precios" placeholder="Precio" value="<?php echo $row['Precios'];?>">
            <input type="number" name="tamaño" placeholder="Tamaño" value="<?php echo $row['Tamaños'];?>">
            <input type="text" name="extras" placeholder="Extras" value="<?php echo $row['Extras'];?>">
            <img src="<?php echo $row['Fotos']; ?>" alt="" srcset="" width="100%" height="80px">
            <input type="file" name="foto" class="imagen" value="<?php echo $row['Fotos'];?>">
            <input type="submit" name="enviar" class="boton">
        </form>
        <div class="ir">
        <a href="mostrar.php">
            Base de Datos
        </a>
        </div>
</body>
</html>
