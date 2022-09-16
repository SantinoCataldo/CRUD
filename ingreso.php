<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" href="img/marron.ico"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ingreso De Datos</title>
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
</head>
<body> 
<?php 

	include("data.php");

	if (isset($_POST['enviar'])) {
			$tipo = $_POST['tipo'];
			$zona = $_POST['zona'];
			$dorm = $_POST['dormitorios'];
			$precios = $_POST['precios'];
			$tamaño = $_POST['tamaño'];
			$extras = $_POST['extras'];
			$nom_img = $_FILES['foto']['name'];
			$temp = $_FILES['foto']['tmp_name'];
			$carpeta = 'img';
			$ruta = $carpeta. '/'. $nom_img;
			move_uploaded_file($temp,$carpeta.'/'. $nom_img);
			
			$consulta = "INSERT INTO viviendas(Tipo, Zona, Dormitorios, Precios, Tamaños, Extras, Fotos) VALUES ('$tipo','$zona','$dorm','$precios','$tamaño','$extras','$ruta')";
			$resultado = mysqli_query($conex,$consulta);

			if ($resultado) {
				?> 
				<h3 class="ok">¡Se han cargado los datos!</h3>
			<?php
			} else {
				?> 
				<h3 class="bad">¡Ups ha ocurrido un error!</h3>
			<?php
			}
	}

	?>
	<div class="ir">
	<a href="index.html">
		Volver
	</a>
	</div>
	
</body>
</html>

