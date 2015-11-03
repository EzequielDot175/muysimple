
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="resource/css/layout.css">
	<link href='http://fonts.googleapis.com/css?family=Gloria+Hallelujah' rel='stylesheet' type='text/css'>
	<title>Iniciar sesión</title>
</head>
<body class="bg">

<div class="header-login">
	<div class="logo-login"></div>
</div>
<div class="container-login">
 		
 		<h1>Administrador</h1>

	<form class="container-login" action="verify.inc.php" method="post">
	<div class="row">
	<label for="Usuario">Usuario</label><br>
		<input class="campo-login" type="text" name="user" placeholder="Usuario">
		<br>
	<label for="Password">Password</label><br>
		<input class="campo-login" type="password" name="pass" placeholder="Contraseña">

		<input class="btn" type="submit" name="submit" value="Iniciar Sesión">
	</div>
	</form>

</div><!-- /container-login -->
	
</body>
</html>