<html>
	<head>
		<meta charset="UTF-8">
		<title>Ver Preguntas</title>
	</head>
	<body>
		<?php
			$link= mysqli_connect("localhost", "root", "", "quiz");
			$preguntas = mysqli_query($link, "SELECT * FROM preguntas" );
			echo '<table border=1> <tr> <th> email </th> <th> enunciado </th> <th> rCorrecta </th> <th> rIncorrecta1 </th> <th> rIncorrecta2 </th> <th> rIncorrecta3 </th> <th> complejidad </th> <th> tema </th> </tr>';
			while ($row = mysqli_fetch_array( $preguntas )) {
				echo '<tr> <td>' . $row["email"] . '</td> <td>' . $row["enunciado"] . '</td> <td>' . $row["rCorrecta"] . '</td> <td>' . $row["rIncorrecta1"] . '</td> <td>' . $row["rIncorrecta2"] . '</td> <td>' . $row["rIncorrecta3"] . '</td> <td>' . $row["complejidad"] . '</td> <td>' . $row["tema"] . '</td> </tr>';
			}
			echo '</table>';
			$preguntas->close();
			mysqli_close($link);
		?>
</body>
</html>