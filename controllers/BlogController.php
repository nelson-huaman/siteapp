<?php

namespace Controllers;

use MVC\Router;

class BlogController {

   public static function index(Router $router) {

      if(!isAdmin()) {
         header('Location: /');
      }

      $router->renderizar('admin/blog/index', [
         'title' => 'Blogs'
      ]);
   }

   public static function categoria(Router $router) {

      if(!isAdmin()) {
         header('Location: /');
         return;
      }

      $router->renderizar('admin/blog/categoria', [
         'title' => 'Categorías del Blog'
      ]);
   }

}