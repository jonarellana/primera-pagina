<?php 
	
	require('conexion.php');
	
	$usuario=$_POST['usuario'];
	$medicos=$_POST['medicos'];
	$sucursales=$_POST['sucursales'];
	$medicamentos=$_POST['medicamentos'];
	$formula=$_POST['formula'];
	$fcita=$_POST['fcita'];
	
	
	$query="INSERT INTO usuarios (usuario, medicos, sucursales, medicamentos, formula, fcita) VALUES ('$usuario','$medicos','$sucursales','$medicamentos','$formula','$fcita')";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Guardar usuario</title>
	</head>
	<body>
		<center>	
			
			<?php if($resultado>0){ ?>
				<h1>Usuario Guardado</h1>
				<?php }else{ ?>
				<h1>Error al Guardar Usuario</h1>		
			<?php	} ?>		
			
			<p></p>	
			
			<a href="index.php">Regresar</a>
			
		</center>
	</body>
	</html>	