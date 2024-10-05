<?php

namespace Controllers;

use MVC\Router;

class ProyectoController {
   
   public static function index(Router $router) {

      if(!isAdmin()) {
         header('Location: /');
         return;
      }

      $router->renderizar('admin/proyecto/index', [
         'title' => 'Proyectos'
      ]);
   }
}