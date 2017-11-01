<!DOCTYPE html>
<html>
	<head>
		<meta name="tipo_contenido" content="text/html;" http-equiv="content-type" charset="utf-8">
		<title>Preguntas</title>
		<link rel='stylesheet' type='text/css' href='estilos/style.css' />
		<link rel='stylesheet' type='text/css' media='only screen and (min-width: 530px) and (min-device-width: 481px)' href='estilos/wide.css'/>
		<link rel='stylesheet' type='text/css' media='only screen and (max-width: 480px)' href='estilos/smartphone.css'/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	</head>
	
		<body>
		<div id='page-wrap'>
			<header class='main' id='h1'>
				<span class="right"><a href="registrar.html">Registrarse</a></span>
				<span class="left"><a href="login.php?op=login" onclick="despedida()">Logout</a></span>
				<h2>Quiz: el juego de las preguntas</h2>
			</header>
			<nav class='main' id='n1' role='navigation'>
				<span><a href='layout.html'>Inicio</a></span>
				<span ><a id="vp" href='VerPreguntaConFoto.php'>Preguntas</a></span>
				<span><a href='creditos.html'>Creditos</a></spam>
				<span ><a id="ip" href='pregunta.html'>Añadir Pregunta</a></span>
			</nav>
			<section class="main" id="s1">
				<div>
					<span id="sp1"></span>
					<?php
					$op = $_GET['op'];
					if ($op == "login")
						echo(
						"<form enctype='multipart/form-data' id='flogin' name='flogin' method='post' action=validarLogin.php >
						Email*:<input type='text' id='email' name='email' style='width:225px'> <br>
						Password*:<input type='password' id='pass' name='pass' style='width:225px'> <br>
						<input type='submit' value='nviar' id='send'>
						<input type='reset' id='del'>
						</form>
						<script type='text/javascript'>
							//$('#vp').removeAttr('href');
							$('#vp').attr('href', '').css({'cursor': 'pointer', 'pointer-events' : 'none'});
							//$('#ip').removeAttr('href');
							$('#ip').attr('href', '').css({'cursor': 'pointer', 'pointer-events' : 'none'});
						</script>");
					if ($op == "preguntas")
						echo("Bienvenido!");

						<script type='text/javascript'>
						function despedida(){
							alert("Adios! Vuelve pronto");
							
						} </script>
					
					?>
				</div>
			</section>
			<footer class='main' id='f1'>
				<p><a href="http://es.wikipedia.org/wiki/Quiz" target="_blank">Que es un Quiz?</a></p>
				<a href='https://github.com'>Link GITHUB</a>
			</footer>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	</body>
</html>