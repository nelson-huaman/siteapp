<?php

namespace Controllers;

use MVC\Router;

class DashboardController {

   public static function index(Router $router) {

      if(!isAdmin()) {
         header('Location: /');
         return;
      }

      $router->renderizar('admin/dashboard/index', [
         'title' => 'Panel de Administración'
      ]);

   }

   public static function error(Router $router) {

      if(!isAdmin()) {
         header('Location: /404');
         return;
      }

      $router->renderizar('admin/error', [
         'title' => 'Página no encontrada'
      ]);
   }
   
}