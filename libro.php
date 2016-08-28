<?php
header('Content-Type: text/html; charset=utf-8');

require_once 'producto.php';

 class Libro extends Producto {    
  
   private $numPaginas;

  public function __construct($id, $titulo, $precio, $nombreAutor, $apellidosAutor,$numPaginas) {  
     parent::__construct($id, $titulo, $precio, $nombreAutor, $apellidosAutor);  
     $this->numPaginas = $numPaginas;  
   }

  
   public function getNumPaginas() {  
     return $this->numPaginas;  
   }  

   public function getResumen() {  
     $resumen = parent::getResumen();  
     $resumen .= "<br>El número de páginas es: " . $this->getNumPaginas();  
     return $resumen;  
   }


 } 



?>