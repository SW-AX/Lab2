<!DOCTYPE html>
<html>
	<head>
		<meta name="tipo_contenido" content="text/html;" http-equiv="content-type" charset="utf-8">
		<title>Preguntas</title>
		<link rel='stylesheet' type='text/css' href='estilos/style.css' />
		<link rel='stylesheet' type='text/css' media='only screen and (min-width: 530px) and (min-device-width: 481px)' href='estilos/wide.css'/>
		<link rel='stylesheet' type='text/css' media='only screen and (max-width: 480px)' href='estilos/smartphone.css'/>
	</head>
	<body>
		<div id='page-wrap'>
			<header class='main' id='h1'>				
				<span class="right"><a href="login">Login</a></span>
				<h2>Quiz: el juego de las preguntas</h2>
			</header>
			<nav class='main' id='n1' role='navigation'>
				<span><a href='layout.html'>Inicio</a></spam>
				<span><a href='quizes'>Preguntas</a></spam>
				<span><a href='creditos.html'>Creditos</a></spam>
				<span>Añadir Pregunta</spam>
			</nav>
			<section class="main" id="s1">
				<div>
			<?php
			$link = mysqli_connect("localhost","root","","quiz");
			$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

			if ($_POST[email] == "" || $_POST[identificador] == "" || $_POST[nick] == "" || $_POST[password1] == "" || $_POST[password2] == "")
				die("Error campos vacios");
			if !preg_match("/^([a-zA-Z])+([0-9]{3})+(@ikasle.ehu.)+(es|eus)$/","$_POST[email]")
				die("Error email");
			if !preg_match("/^([a-zA-Z])+((([ ])+([a-zA-Z]{1,})){1,})$/","$_POST[identificador]")
				die("Error identificador");
			if ($_POST[password1] == "" != $_POST[password2] == "")
				die("Error contraseñas");
			

			$sql = "INSERT INTO usuarios(email, nombre, nick, password, foto) VALUES ('$_POST[email]', '$_POST[identificador]', '$_POST[nick]', '$_POST[password1]', '$_POST[password2]', '$imagen')";

			if(!mysqli_query($link, $sql)) {
				die("Error: " . mysqli_error($link));
			}
			echo "<a href = 'login.php?op=login'> Logearse </a>";
			mysqli_close($link);
		?>
				
				</div>
			</section>
			<footer class='main' id='f1'>
				<p><a href="http://es.wikipedia.org/wiki/Quiz" target="_blank">Que es un Quiz?</a></p>
				<a href='https://github.com'>Link GITHUB</a>
			</footer>
		</div>

	</body>
</html>