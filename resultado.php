<?php
require_once 'libro.php';

$id=$_POST['id'];
$titulo=$_POST['titulo'];
$precio=$_POST['precio'];
$nombreAutor=$_POST['nombreAutor'];
$apellidosAutor=$_POST['apellidosAutor'];
$numPaginas=$_POST['numPaginas'];

$libro1 = new Libro($id,$titulo,$precio,$nombreAutor,$apellidosAutor,$numPaginas);
echo $libro1->getResumen();
?>