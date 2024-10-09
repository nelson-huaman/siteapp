<?php

namespace Controllers;

use Classes\Paginacion;
use Model\Categoria;
use MVC\Router;

class BlogCategoriaController {

   public static function index(Router $router) {

      if(!isAdmin()) {
         header('Location: /');
         return;
      }

      $paginaActual = filter_var($_GET['page'], FILTER_VALIDATE_INT);
      if(!$paginaActual || $paginaActual < 1){
         header('Location: /admin/blogs/categorias?page=1');
      }

      $porPagina = 10;
      $total = Categoria::total();

      $paginacion = new Paginacion($paginaActual, $porPagina, $total);
      $categorias = Categoria::paginar($porPagina, $paginacion->offet());

      $router->renderizar('admin/blog/categoria/index', [
         'title' => 'Categorías del Blog',
         'categorias' => $categorias,
         'paginacion' => $paginacion->paginacion()
      ]);
   }

   public static function crear(Router $router) {

      if(!isAdmin()) {
         header('Location: /');
         return;
      }

      $alertas = [];
      $categoria = new Categoria;

      if($_SERVER['REQUEST_METHOD'] === 'POST') {

         if(!isAdmin()) {
            header('Location: /');
            return;
         }
         
         $categoria->sincronizar($_POST);
         $alertas = $categoria->validarCategoria();
         if(empty($alertas)) {
            $existeCategoria = Categoria::where('nombre', $categoria->nombre);
            if($existeCategoria) {
               Categoria::setAlerta('error', 'El nombre ya esta registrado');
            } else {
               $categoria->slug = generarSlug($categoria->nombre);

               // debuguear($categoria);
               $resultado = $categoria->guardar();
               if($resultado) {
                  header('Location: /admin/blogs/categorias');
               }
            }
         }
      }

      $alertas = Categoria::getAlertas();
      $router->renderizar('admin/blog/categoria/crear', [
         'title' => 'Crear Categoría',
         'alertas' => $alertas,
         'categoria' => $categoria
      ]);
   }

   public static function editar(Router $router) {

      if(!isAdmin()) {
         header('Location: /');
         return;
      }

      $alertas = [];
      $id = filter_var($_GET['id'], FILTER_VALIDATE_INT);
      if(!$id) {
         header('Location: /admin/blogs/categorias');
         return;
      }

      $categoria = Categoria::find($id);
      if(!$categoria) {
         header('Location: /admin/blogs/categorias');
         return;
      }

      if($_SERVER['REQUEST_METHOD'] === 'POST') {
         if(!isAdmin()) {
            header('Location: /');
            return;
         }

         $categoria->sincronizar($_POST);
         $alertas = $categoria->validarCategoria();
         if(empty($alertas)) {
            $resultado = $categoria->guardar();
            if($resultado) {
               header('Location: /admin/blogs/categorias');
            }
         }
      }

      $router->renderizar('admin/blog/categoria/editar', [
         'title' => 'Editar Categoría',
         'alertas' => $alertas,
         'categoria' => $categoria
      ]);
   }

   public static function estado() {
      if(!isAdmin()) {
         header('Location: /');
         return;
      }

      if($_SERVER['REQUEST_METHOD'] === 'POST') {
         if(!isAdmin()) {
            header('Location: /');
            return;
         }

         $id = filter_var($_POST['id'], FILTER_VALIDATE_INT);
         if(!$id) {
            header('Location: /admin/blogs/categorias');
            return;
         }

         $estado = filter_var($_POST['estado'], FILTER_VALIDATE_INT);

         $categoria = Categoria::find($id);
         if(!isset($categoria)) {
            header('Location: /admin/blogs/categorias');
            return;
         }

         $categoria->estado = ($estado == '1') ? '0' : '1';
         $resultado = $categoria->guardar();
         if($resultado) {
            header('Location: /admin/blogs/categorias');
         }
      }
   }

   public static function eliminar() {
      if(!isAdmin()) {
         header('Location: /');
         return;
      }

      if($_SERVER['REQUEST_METHOD'] === 'POST') {
         if(!isAdmin()) {
            header('Location: /');
            return;
         }

         $id = filter_var($_POST['id'], FILTER_VALIDATE_INT);
         if(!$id) {
            header('Location: /admin/blogs/categorias');
            return;
         }

         $categoria = Categoria::find($id);
         if(!isset($categoria)) {
            header('Location: /admin/blogs/categorias');
            return;
         }

         $resultado = $categoria->eliminar();
         if($resultado) {
            header('Location: /admin/blogs/categorias');
         }
      }
   }

}