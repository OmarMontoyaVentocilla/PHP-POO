<?php
header('Content-Type: text/html; charset=utf-8');

class Producto{

protected $id;   
private $titulo;  
private $precio;  
private $nombreAutor;  
private $apellidosAutor;  

public function __construct($id, $titulo, $precio, $nombreAutor, $apellidosAutor) {  
    $this->id = $id;  
    $this->titulo= $titulo;  
    $this->nombreAutor = $nombreAutor;  
    $this->apellidosAutor = $apellidosAutor;  
    $this->precio = $precio;  
 }  

   public function getAutor() {  
     return $this->nombreAutor . " " . $this->apellidosAutor;  
   }

   public function getTitulo(){  
     return $this->titulo;  
   }

   public function getPrecio(){  
     return $this->precio;  
   }

   public function setId($id) {  
     $this->id = $id;  
   }

   public function setTitulo($titulo) {  
     $this->titulo = $titulo;  
   }

   public function setPrecio($precio) {  
     $this->precio = $precio;  
   }

   public function setNombreAutor($nombreAutor) {  
     $this->nombreAutor = $nombreAutor;  
   }

   public function setApellidosAutor($apellidosAutor) {  
     $this->apellidosAutor = $apellidosAutor;  
   } 
   

   protected function getResumen() {  
     $resumen = "El titulo es: " . $this->getTitulo() . "<br>El precio es: " . $this->getPrecio();  
     $resumen .= "<br>El autor es: " . $this->getAutor();  
     return $resumen;  
   } 

}









?>