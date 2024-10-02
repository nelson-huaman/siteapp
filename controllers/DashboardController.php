<?php

namespace Controllers;

use MVC\Router;

class DashboardController {

   public static function index(Router $router) {

      $router->renderizar('admin/dashboard/index', [
         'titulo' => 'Panel de Administración'
      ]);

   }

   public static function error(Router $router) {

      $router->renderizar('admin/error', [
         'titulo' => 'Página no encontrado'
      ]);

   }
   
}