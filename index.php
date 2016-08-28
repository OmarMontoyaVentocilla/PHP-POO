<?php 
//require_once 'libro.php';
//$libro1 = new Libro(1,"título",40,"Omar", "Montoya Ventocilla",440);
//$libro1->setPrecio(80);
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>inicio</title>
	<link rel="stylesheet" href="">
</head>
<body>
<h1>Aprendiendo clases y herencia</h1>
<?php
for ($i=1;$i<=10;$i++){
if($i%2==0){
?>
<div style="background:lightblue;color: white;">
<?php echo $libro1->getResumen().'<br><br>';?>	
</div>
<?php
}else{
echo $libro1->getResumen().'<br><br>';	
}
}
?>
</body>
</html>