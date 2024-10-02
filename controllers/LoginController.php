<?php

namespace Controllers;

use Model\Usuario;
use MVC\Router;

class LoginController {

   public static function index(Router $router) {

      $alertas = [];

      if($_SERVER['REQUEST_METHOD'] === 'POST') {
         $usuario = new Usuario($_POST);
         $alertas = $usuario->validarLogin();
         if(empty($alertas)) {
            $usuario = Usuario::where('email', $usuario->email);
            if(!$usuario || !$usuario->confirmado) {
               Usuario::setAlerta('error', 'El usuario no existe o no esta confirmado');
            } else {
               if(password_verify($_POST['password'], $usuario->password)) {
                  session_start();

                  if($usuario->admin) {
                     header('Location: /admin/dashboard');
                  }
               } else {
                  Usuario::setAlerta('error', 'Contraseña incorrecto');
               }
            }
         }
      }

      $alertas = Usuario::getAlertas();
      $router->renderizar('login/index', [
         'page_name' => 'Iniciar Sesión',
         'page_titulo' => 'Iniciar Sesión',
         'page_description' => 'Desarrollo web',
         'header' => false,
         'alertas' => $alertas
      ]);
   }

   public static function salir() {
      
   }

}