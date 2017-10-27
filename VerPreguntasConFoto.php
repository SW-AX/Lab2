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
			$link= mysqli_connect("localhost", "root", "", "quiz");
			$preguntas = mysqli_query($link, "SELECT * FROM preguntas" );
			echo '<table border=1> <tr> <th> email </th> <th> enunciado </th> <th> rCorrecta </th> <th> rIncorrecta1 </th> <th> rIncorrecta2 </th> <th> rIncorrecta3 </th> <th> complejidad </th> <th> tema </th> <th> imagen 
			</th> </tr>';
			while ($row = mysqli_fetch_array( $preguntas )) {
				echo '<tr> <td>' . $row["email"] . '</td> <td>' . $row["enunciado"] . '</td> <td>' . $row["rCorrecta"] . '</td> <td>' . $row["rIncorrecta1"] . '</td> <td>' . $row["rIncorrecta2"] . '</td> <td>' . $row["rIncorrecta3"] . '</td> <td>' . $row["complejidad"] . '</td> <td>' . $row["tema"] . '</td> <td>' . '<img src="data:image/jpeg;base64,'.base64_encode( $row['imagen'] ).'"/>' . '</td> </tr>';
			}
			echo '</table>';
			$preguntas->close();
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