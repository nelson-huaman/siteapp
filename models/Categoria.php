<?php

namespace Model;

class Categoria extends ActiveRecord {
   protected static $tabla = 'categoria';
   protected static $columnasDB = ['id', 'nombre', 'slug', 'estado'];

   public $id;
   public $nombre;
   public $slug;
   public $estado;

   public function __construct($args = []) {
      $this->id = $args['id'] ?? null;
      $this->nombre = $args['nombre'] ?? '';
      $this->slug = $args['slug'] ?? '';
      $this->estado = $args['estado'] ?? 1;
   }

   public function validarCategoria() : array {
      if(!$this->nombre) {
         self::$alertas['error'][] = 'El nombre es obligatorio';
      }

      return self::$alertas;
   }
}