<?php
	
	require('conexion.php');
	
	$id=$_GET['id'];
	
	$query="SELECT usuario, medicos, sucursales, medicamentos, formula, fcita FROM usuarios WHERE id='$id'";
	
	$resultado=$mysqli->query($query);
	
	$row=$resultado->fetch_assoc();
	
?>

<html>
	<head>
		<title>Usuarios</title>
	</head>
	<body>
		
		<center><h1>Modificar Usuario</h1></center>
		
		<form name="modificar_usuario" method="POST" action="mod_usuario.php">
			
			<table width="50%">
				<tr>
					<input type="hidden" name="id" value="<?php echo $id; ?>">
					<td width="20"><b>Usuario</b></td>
					<td width="30"><input type="text" name="usuario" size="25" value="<?php echo $row['usuario']; ?>" /></td>
				</tr>	
				<tr>
					<td><b>Sucursales</b></td>
					<td><input type="text" name="sucursales" size="50" value="<?php echo $row['sucursales']; ?>" /></td>
				</tr>
				<tr>
					<td><b>Medicos</b></td>
					<td><input type="text" name="medicos" size="50" value="<?php echo $row['medicos']; ?>" /></td>
				</tr>
				  <tr>
					<td><b>Medicamentos</b></td>
					<td><input type="text" name="medicamentos" size="50" value="<?php echo $row['medicamentos']; ?>" /></td>
				</tr>
				<tr>
					<td><b>Formula</b></td>
					<td><input type="text" name="formula" size="50" value="<?php echo $row['formula']; ?>" /></td>
				</tr>
				<tr>
					<td><b>Fecha</b></td>
					<td><input type="text" name="fcita" size="30" value="<?php echo $row['fcita']; ?>" /></td>
				</tr>
				<tr>
					<td colspan="2"><center><input type="submit" name="Guardar" value="Guardar" /></center></td>
				</tr>
			</table>
		</form>
	</body>
</html>	
