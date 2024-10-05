<?php

namespace Controllers;

use MVC\Router;

class MensajeController {

   public static function index(Router $router) {

      if(!isAdmin()) {
         header('Location: /');
         return;
      }

      $router->renderizar('admin/mensaje/index', [
         'title' => 'Mensajes'
      ]);
   }
}