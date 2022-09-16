<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">

</head>
<body> 
<?php 

	include("data.php");
	$id= $_REQUEST['id'];
    
			$consulta = "DELETE FROM `viviendas`  WHERE id = '$id'";
			$resultado = mysqli_query($conex,$consulta);

			if ($resultado) {
				?> 
				<h3 class="ok">¡Se ha eliminado!</h3>
			<?php
			} else {
				?> 
				<h3 class="bad">¡Ups no se pudo eliminar!</h3>
			<?php
			}
	?>
	<div class="ir">
		<a href="mostrar.php">
			Volver
		</a>
	</div>
</body>
</html>
