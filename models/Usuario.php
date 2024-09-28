<?php

namespace Model;

class Usuario extends ActiveRecord {

   protected static $tabla = 'usuario';
   protected static $columnasDB = ['id', 'nombre', 'apellido', 'email', 'password', 'confirmado', 'token', 'admin', 'estado'];

   public $id;
   public $nombre;
   public $apellido;
   public $email;
   public $password;
   public $password2;
   public $confirmado;
   public $token;
   public $admin;
   public $estado;

   public function __construct($arreglo = []) {
      $this->id = $arreglo['id'] ?? null;
      $this->nombre = $arreglo['nombre'] ?? '';
      $this->apellido = $arreglo['apellido'] ?? '';
      $this->email = $arreglo['email'] ?? '';
      $this->password = $arreglo['password'] ?? '';
      $this->confirmado = $arreglo['confirmado'] ?? 0;
      $this->token = $arreglo['token'] ?? '';
      $this->admin = $arreglo['admin'] ?? 0;
      $this->estado = $arreglo['estado'] ?? 0;
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