<?php
require('conexion.php');
if(!empty($_POST))
	{
		$usuario = mysqli_real_escape_string($mysqli,$_POST['usuario']);
		$password = mysqli_real_escape_string($mysqli,$_POST['password']);
		$tipo = mysqli_real_escape_string($mysqli,$_POST['tipo']);
		$tipo = intval($tipo);
		$mensaje = '';
		
		$sha1_pass = sha1($password);
		
		$sql = "insert into usuario (ID_TIPO,NOMBRE_USUARIO,PASS_USUARIO) values ($tipo,'$usuario','$sha1_pass')";
		$result=$mysqli->query($sql);
		if($result){
			$mensaje = "registro insertado";
		}else{
			$mensaje = "registro  NO insertado";
		}
		
	}

?>

<html>
	<head>
		<title>Master</title>
	</head>
	
	<body>
		<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" > 
			<div><label>Usuario:</label><input id="usuario" name="usuario" type="text" ></div>
			<br />
			<div><label>Password:</label><input id="password" name="password" type="password"></div>
			<br />
			<div><label>Tipo usuario:</label>
				<select name="tipo">
					<option value="1">Admin</option>
					<option value="2">Contador</option>
					<option value="3">Chofer</option>
				</select>
			</div>
			<br />
			<br />
			<div><input name="login" type="submit" value="login"></div> 
		</form> 
		
		<br />
		
		<div style = "font-size:16px; color:#cc0000;"><?php echo isset($mensaje) ? $mensaje : '' ; ?></div>
	</body>
</html>