<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="img/marron.ico"> 
	<title>Mostrar Datos</title>
	<link rel="stylesheet" href="css/style1.css?1.2">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="base">
		<h1>Base de Datos</h1>
		<span>tp83</span>
	</div>
	<div class="volver">
	<a href="index.html">
		ingresar datos
	</a>
	</div>	
	<section>
	<?php 
	include("data.php");
		$consulta = "SELECT * FROM viviendas";
		$resultado = mysqli_query($conex,$consulta);
		$suma = 1;
		if ($resultado) {
			while ($row = $resultado->fetch_array()) {
				$tipo = $row['Tipo'];
				$zona = $row['Zona'];
				$dorm = $row['Dormitorios'];
				$precios = $row['Precios'];
				$tamaño = $row['Tamaños'];
				$extras = $row['Extras'];
				$img = $row['Fotos'];
			?>
				<div class="borde">
						<div class="titulo"><?php echo 'Vivienda ' . $suma++?><br></div>
						<img src="<?php echo $img ?>" alt="" srcset=""><br>
						<div class="hover">
							<?php echo 'Tipo: ' . $tipo?><br>
							<?php echo 'Zona: ' . $zona?><br>
							<?php echo 'Dormitorios: ' . $dorm?><br>
							<?php echo 'Precio: ' . $precios?><br>
							<?php echo 'Tamaño: ' . $tamaño?><br>
							<?php if($extras != 0){
								echo 'Extra: ' . $extras;
							}else{
								echo 'Extra: No posee';
							} ?><br>
							<div class="a">
								<a href="modificar.php?id=<?php echo $row['Id']; ?>">modificar</a>
								<a href="eliminar.php?id=<?php echo $row['Id']; ?>">eliminar</a>
							</div>
						</div> 
				</div> 
			<?php
			}
		}
	?>
	</section>
</body>
