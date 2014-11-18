<?php
	require('conexion.php');
	
	$query="SELECT id, usuario, sucursales, medicos, medicamentos, formula, fcita FROM usuarios";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Citas Medicas</title>
	</head>
	<body>
		
		<center><h1>Citas Medicas</h1></center>
		
		<a href="nuevo.php">Programar Cita</a>
		<p></p>
		
		<table border=1 width="80%">
			<thead>
				<tr>
					<td><b>Pasiente</b></td>
					<td><b>Sucursal</b></td>
					<td><b>Medico Asignado</b></td>
					<td><b>Medicamentos</b></td>
					<td><b>Formula</b></td>
					<td><b>fecha</b></td>
					<td></td>
					<td></td>
				</tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc()){ ?>
						<tr>
							<td><?php echo $row['usuario'];?>
							</td>
							<td>
								<?php echo $row['sucursales'];?>
							</td>
							<td>
								<?php echo $row['medicos'];?>
							</td>
							<td>
								<?php echo $row['medicamentos'];?>
							</td>
							<td>
								<?php echo $row['formula'];?>
							</td>
							<td>
								<?php echo $row['fcita'];?>
							</td>
							<td>
								<a href="modificar.php?id=<?php echo $row['id'];?>">Modificar</a>
							</td>
							<td>
								<a href="eliminar.php?id=<?php echo $row['id'];?>">Eliminar</a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</body>
	</html>	
	
