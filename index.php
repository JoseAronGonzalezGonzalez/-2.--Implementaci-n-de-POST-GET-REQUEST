<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Trabajo 2</title>
	<style type="text/css">
		
		form{
			text-align: center;
			margin: auto;
			background-color: grey;
		}

		button{

			padding: 5px;
			background-color: red;
		}
	</style>
</head>
<body>
	<form method="POST" action="app/dato.php">
		valor 1
		<input type="text" name="val1"><br>
		valor 2
		<input type="text" name="val2"><br>
		<select name="t">
			<option value="1">suma</option>
			<option value="2">resta</option>
			<option value="3">multiplicacion</option>
			<option value="4">division</option>
		</select><br>
		<button type="sumbit">
			Enviar
		</button>
	</form>
</body>
</html>