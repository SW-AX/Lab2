<!DOCTYPE html>
<html>
  <head>
    <meta name="tipo_contenido" content="text/html;" http-equiv="content-type" charset="utf-8">
	<title>Preguntas</title>
    <link rel='stylesheet' type='text/css' href='estilos/style.css' />
	<link rel='stylesheet' 
		   type='text/css' 
		   media='only screen and (min-width: 530px) and (min-device-width: 481px)'
		   href='estilos/wide.css' />
	<link rel='stylesheet' 
		   type='text/css' 
		   media='only screen and (max-width: 480px)'
		   href='estilos/smartphone.css' />
  </head>
  <body>
  <div id='page-wrap'>
	<header class='main' id='h1'>
		<span class="right"><a href="registro">Registrarse</a></span>
      		<span class="right"><a href="login">Login</a></span>
      		<span class="right" style="display:none;"><a href="/logout">Logout</a></span>
		<h2>Quiz: el juego de las preguntas</h2>
    </header>
	<nav class='main' id='n1' role='navigation'>
		<span>Inicio</spam>
		<span><a href='quizes'>Preguntas</a></spam>
		<span><a href='creditos.html'>Creditos</a></spam>
		<span><a href='pregunta.html'>Añadir Pregunta</a></spam>
	</nav>
    <section class="main" id="s1">
    
	<div>
	<!DOCTYPE html>
<html>
  <head>
    <meta name="tipo_contenido" content="text/html;" http-equiv="content-type" charset="utf-8">
	<title>Preguntas</title>
    <link rel='stylesheet' type='text/css' href='estilos/style.css' />
	<link rel='stylesheet' 
		   type='text/css' 
		   media='only screen and (min-width: 530px) and (min-device-width: 481px)'
		   href='estilos/wide.css' />
	<link rel='stylesheet' 
		   type='text/css' 
		   media='only screen and (max-width: 480px)'
		   href='estilos/smartphone.css' />
  </head>
  <body>
  <div id='page-wrap'>
	<header class='main' id='h1'>
		<span class="right"><a href="registro">Registrarse</a></span>
      		<span class="right"><a href="login">Login</a></span>
      		<span class="right" style="display:none;"><a href="/logout">Logout</a></span>
		<h2>Quiz: el juego de las preguntas</h2>
    </header>
	<nav class='main' id='n1' role='navigation'>
		<span>Inicio</spam>
		<span><a href='quizes'>Preguntas</a></spam>
		<span><a href='creditos.html'>Creditos</a></spam>
		<span><a href='pregunta.html'>Añadir Pregunta</a></spam>
	</nav>
    <section class="main" id="s1">
    
	<div>
		<?php
			$link = mysqli_connect("localhost","root","","quiz");
			$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

			if ($_POST[email] == "" || $_POST[enunciado] == "" || $_POST[rCorrecta] == "" || $_POST[rIncorrecta1] == "" || $_POST[rIncorrecta2] == "" || $_POST[rIncorrecta3] == "" || $_POST[complejidad] == "" || $_POST[tema] == "")
				die("Error campos vacios");
			if !preg_match("/^([1-5])$/","$_POST[complejidad]")
				die("Error complejidad");
			if !preg_match("/^([a-zA-Z])+([0-9]{3})+(@ikasle.ehu.)+(es|eus)$/","$_POST[email]")
				die("Error email");
			if (strlen($_POST[enunciado]) < 10)
				die("Error enunciado");
			

			$sql = "INSERT INTO preguntas(email, enunciado, rCorrecta, rIncorrecta1, rIncorrecta2, rIncorrecta3, complejidad, tema, imagen) VALUES ('$_POST[email]', '$_POST[enunciado]', '$_POST[rCorrecta]', '$_POST[rIncorrecta1]', '$_POST[rIncorrecta2]', '$_POST[rIncorrecta3]', '$_POST[complejidad]', '$_POST[tema]', '$imagen')";

			if(!mysqli_query($link, $sql)) {
				die("Error: " . mysqli_error($link));
			}
			echo "<a href = 'VerPreguntasConFoto.php'> Ver preguntas </a>";
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

	</div>
    </section>
	<footer class='main' id='f1'>
		<p><a href="http://es.wikipedia.org/wiki/Quiz" target="_blank">Que es un Quiz?</a></p>
		<a href='https://github.com'>Link GITHUB</a>
	</footer>
</div>
</body>
</html>
