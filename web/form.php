<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<title>Formulario</title>
</head>
<body class="container">

	<h3>Formulario</h3>

	<form action='resumen.php' method='post'>
		<div class="form-group">
			<p>Nombre: <input type='text' class='form-control' name='nombre'/></p>
			<p>Apellido: <input type='text' class='form-control' name='apellido'/></p>
			<p>Correo: <input type='text' class='form-control' name='correo'/></p>

			<p><input type='submit' class="btn btn-primary" value='Enviar'/></p>
		</div>	
	</form>

</body>
</html>