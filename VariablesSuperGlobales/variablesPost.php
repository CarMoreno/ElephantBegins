<?php
/*$_POST
La variable post nos va a permitir capturar parámetros enviados a través del método POST, la diferencia
con el método GET es que, con el método POST la información viaja oculta, es decir, no se muestra en la url
*/
$titulo = null;
$comentario = null;
if(isset($_POST["formulario"])){
	$titulo = $_POST["title"];
	$comentario = $_POST["comment"];
}

?>
<!DOCTYPE>
<html>
<head>
	
</head>
<body>
	<form action="variablesPost.php" method="POST">
		<table>
			<tr>
				<td>Titulo: </td>
				<td><input type="text" name="title"></td>
			</tr>
			<tr>
				<td>Cometario: </td>
				<td><textarea name="comment" cols="30" rows="10"></textarea></td>
			</tr>
		</table>
		<!-- <input type="hidden" name="formulario"> -->
		<input type="submit"value="Enviar>>" name="formulario">
	</form>
	<strong style="color: red;">
		<?php 
			print("$titulo <br><br> $comentario");
		?>
	</strong>		
</body>
</html>

