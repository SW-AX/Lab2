<!DOCTYPE html>
<html>
	<head>
		<title>Haciendo cosas</title>
	</head>
	<body>
		<?php
			$link = mysqli_connect("localhost","root","","quiz");
			$sql = "INSERT INTO preguntas(email, enunciado, rCorrecta, rIncorrecta1, rIncorrecta2, rIncorrecta3, complejidad, tema) VALUES ('$_POST[email]', '$_POST[enunciado]', '$_POST[rCorrecta]', '$_POST[rIncorrecta1]', '$_POST[rIncorrecta2]', '$_POST[rIncorrecta3]', '$_POST[complejidad]', '$_POST[tema]')";
			if(!mysqli_query($link, $sql)) {
				die("Error: " . mysqli_error($link));
			}
			echo "<a href = 'VerPreguntas.php'> Ver preguntas </a>";
			mysqli_close($link);
		?>
	</body>
</html>