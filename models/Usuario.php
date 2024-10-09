<?php

namespace Model;

class Usuario extends ActiveRecord {

   protected static $tabla = 'usuario';
   protected static $columnasDB = ['id', 'nombre', 'apellidoPaterno', 'apellidoMaterno', 'email', 'password', 'confirmado', 'token', 'admin', 'estado'];

   public $id;
   public $nombre;
   public $apellidoPaterno;
   public $apellidoMaterno;
   public $email;
   public $password;
   public $password2;
   public $confirmado;
   public $token;
   public $admin;
   public $estado;

   public function __construct($args = []) {
      $this->id = $args['id'] ?? null;
      $this->nombre = $args['nombre'] ?? '';
      $this->apellidoPaterno = $args['apellidoPaterno'] ?? '';
      $this->apellidoMaterno = $args['apellidoMaterno'] ?? '';
      $this->email = $args['email'] ?? '';
      $this->password = $args['password'] ?? '';
      $this->confirmado = $args['confirmado'] ?? 0;
      $this->token = $args['token'] ?? '';
      $this->admin = $args['admin'] ?? 0;
      $this->estado = $args['estado'] ?? 0;
   }

   public function validarLogin() : array {
      if(!$this->email) {
         self::$alertas['error'][] = 'El correo es Obligatorio';
      }
      if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
         self::$alertas['error'][] = 'Email no válido';
      }
      if(!$this->password) {
         self::$alertas['error'][] = 'La contraseña no puede ir vacío';
      }
      return self::$alertas;
   }

}