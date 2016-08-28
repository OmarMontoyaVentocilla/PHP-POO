<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>inicio</title>
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	<form action="resultado.php" method="POST" id="formulario">
		
      <label for="id">ID:</label><input type="text" name="id"><br><br>
      <label for="titulo">TITULO:</label><input type="text" name="titulo"><br><br>
      <label for="precio">PRECIO:</label><input type="number" name="precio"><br><br>
      <label for="nombreAutor">NOMBRE AUTOR:</label><input type="text" name="nombreAutor"><br><br>
      <label for="apellidosAutor">APELLIDOS AUTOR:</label><input type="text" name="apellidosAutor"><br><br>
      <label for="numPaginas">NUMERO PAGINAS:</label><input type="number" name="numPaginas"><br><br>
      <button type="submit">Enviar</button>
	</form>
</body>
</html>