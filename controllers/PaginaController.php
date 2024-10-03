<?php

namespace Controllers;

use MVC\Router;

class PaginaController {
   
   public static function inicio(Router $router) {

      $router->renderizar('paginas/inicio', [
         'title' => 'Inicio',
         'description' => 'Desarrollador web',
         'keyword' => 'keyword',
         'slug' => '',
         'portada' => true,
         'header' => true
      ]);
   }

   public static function acercade(Router $router) {

      $router->renderizar('paginas/acercade', [
         'title' => 'Acerca De',
         'description' => 'Conoce Más Sobre Nosotros',
         'keyword' => 'keyword',
         'slug' => 'acerca-de',
         'portada' => false,
         'header' => false
      ]);
   }

   public static function proyectos(Router $router) {

      $router->renderizar('paginas/proyectos', [
         'title' => 'Proyectos',
         'description' => 'Creando Conexiones: Proyectos Web que Transforman la Experiencia en Línea',
         'keyword' => 'keyword',
         'slug' => '/proyectos',
         'portada' => false,
         'header' => false
      ]);
   }

   public static function blogs(Router $router) {

      $router->renderizar('paginas/blogs', [
         'title' => 'Blogs',
         'description' => 'Enterate de las últimas noticias en nuestro blog',
         'keyword' => 'keyword',
         'slug' => '/blogs',
         'portada' => false,
         'header' => false,
      ]);
   }

   public static function contacto(Router $router) {

      $router->renderizar('paginas/contacto', [
         'title' => 'Contacto',
         'description' => 'Pongámonos en contacto: Estamos aquí para ti',
         'keyword' => 'keyword',
         'slug' => '/contacto',
         'portada' => false,
         'header' => false
      ]);
   }

   public static function proyecto(Router $router) {

      $router->renderizar('paginas/proyecto', [
         'title' => 'Proyecto 01',
         'description' => 'Desarrollo web',
         'keyword' => 'keyword',
         'slug' => '/proyecto/proyecto-01',
         'portada' => false,
         'header' => false
      ]);
   }

   public static function blog(Router $router) {

      $router->renderizar('paginas/blog', [
         'title' => 'Blog 01',
         'description' => 'Desarrollador web',
         'keyword' => 'keyword',
         'slug' => '/blog/blog-01',
         'portada' => false,
         'header' => false
      ]);
   }

   public static function error(Router $router) {

      $router->renderizar('paginas/error', [
         'title' => 'Página no encontrada',
         'description' => '404 - Página no encontrada',
         'keyword' => 'keyword',
         'slug' => '/404',
         'portada' => false,
         'header' => false
      ]);
   }
}