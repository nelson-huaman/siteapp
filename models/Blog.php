<?php

namespace Model;

class Blog extends ActiveRecord {
   protected static $tabla = 'blog';
   protected static $columnasDB = ['id', 'titulo', 'imagen', 'slug', 'contenido', 'fecha', 'idCategoria', 'estado'];

   public $id;
   public $titulo;
   public $imagen;
   public $slug;
   public $contenido;
   public $fecha;
   public $idCategoria;
   public $estado;

   public function __construct($args = []) {
      $this->id = $args['id'] ?? null;
      $this->titulo = $args['titulo'] ?? '';
      $this->imagen = $args['imagen'] ?? '';
      $this->slug = $args['slug'] ?? '';
      $this->contenido = $args['contenido'] ?? '';
      $this->fecha = $args['fecha'] ?? date('Y-m-d h:m:s');
      $this->idCategoria = $args['idCategoria'] ?? '';
      $this->estado = $args['estado'] ?? 1;
   }

   public function validarCategoria() : array {
      if(!$this->titulo) {
         self::$alertas['error'][] = 'El titulo es obligatorio';
      }

      return self::$alertas;
   }
}