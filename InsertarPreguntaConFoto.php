<!DOCTYPE html>
<html>
	<head>
		<title>Insertar Preguntas</title>
	</head>
	<body>
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
	</body>
</html>