<?php

namespace Controllers;

use Classes\Paginacion;
use Model\Blog;
use Model\Categoria;
use MVC\Router;

class BlogController {

   public static function index(Router $router) {

      if(!isAdmin()) {
         header('Location: /');
         return;
      }

      $paginaActual = filter_var($_GET['page'], FILTER_VALIDATE_INT);
      if(!$paginaActual || $paginaActual < 1){
         header('Location: /admin/blogs?page=1');
      }

      $porPagina = 10;
      $total = Blog::total();

      $paginacion = new Paginacion($paginaActual, $porPagina, $total);
      $blogs = Blog::paginar($porPagina, $paginacion->offet());
      foreach($blogs as $blog) {
         $blog->categoria = Categoria::find($blog->idCategoria);
      }

      $router->renderizar('admin/blog/index', [
         'title' => 'Blogs',
         'blogs' => $blogs,
         'paginacion' => $paginacion->paginacion()
      ]);
   }

   public static function crear(Router $router) {

      if(!isAdmin()) {
         header('Location: /');
         return;
      }

      $alertas = [];

      if($_SERVER['REQUEST_METHOD'] === 'POST') {
         debuguear($_POST);
      }

      $router->renderizar('admin/blog/crear', [
         'title' => 'Crear Blog',
         'alertas' => $alertas
      ]);
   }

}