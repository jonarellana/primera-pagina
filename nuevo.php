<html>
	<head>
		<title>Usuarios</title>
	</head>
	<body>
		
		<center><h1>Nuevo Usuario</h1></center>
		
		<form name="nuevo_usuario" method="POST" action="guarda_usuario.php">
			<table width="50%">
				<tr>
					<td width="20"><b>Pasiente</b></td>
					<td width="30"><input type="text" name="usuario" size="25" /></td>
				</tr>
				<td><b>Sucursales</b></td>
				<td><select name="sucursales"> 

                   <option value="Boston">Boston</option> 
                   <option value="Prado">Prado</option> 
                   <option value="Silencio">Silencio</option>
				   <option value="Carrefur americano">Carrefur americano</option>  
                   </select></td>
				   </tr>
				<tr>
				<td><b>Medicos</b></td>
				<td><select name="medicos"> 

                   <option value="Jose luis oviedo">Jose luis oviedo</option> 
                   <option value="Wilmer Ruiz">Wilmer Ruiz</option> 
                   <option value="Jonathan Arellana">Jonathan Arellana</option> 
				    <option value="Jhon jimenez">Jhon Jimenez</option> 
                   </select></td>
				   </tr>
				<tr>
					<td><b>Medicamentos</b></td>
					<td><input type="text" name="medicamentos" size="50" /></td>
				</tr>
				<tr>
					<td><b>Formula</b></td>
					<td><input type="text" name="formula" size="50" /></td>
				</tr>
				<tr>
				<td><b>Fecha</b></td>
				<td><input type="text" name="fcita" value="2014-10-17-23:59"></td>
				</tr>
				<tr>
					<td colspan="2"><center><input type="submit" name="eviar" value="Registrar" /></center></td>
				</tr>
			</table>
		</form>
	</body>
</html>						