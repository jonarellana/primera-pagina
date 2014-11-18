<?php 
	
	require('conexion.php');
	
	$id=$_POST['id'];
	$usuario=$_POST['usuario'];
	$medicos=$_POST['medicos'];
	$sucursales=$_POST['sucursales'];
	$medicamentos=$_POST['medicamentos'];
	$formula=$_POST['formula'];
	$fcita=$_POST['fcita'];
	
	
	$query="UPDATE usuarios SET usuario='$usuario', sucursales='$sucursales', medicos='$medicos', medicamentos='$medicamentos', formula='$formula', fcita='$fcita' WHERE id='$id'";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Modificar usuario</title>
	</head>
	
	<body>
		<center>
			
			<?php 
				if($resultado>0){
				?>
				
				<h1>Usuario Modificado</h1>
				
					<?php 	}else{ ?>
				
				<h1>Error al Modificar Usuario</h1>
				
			<?php	} ?>
			
			<p></p>	
			
			<a href="index.php">Regresar</a>
			
		</center>
	</body>
</html>
				
				