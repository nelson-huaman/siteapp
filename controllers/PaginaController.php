<?php

namespace Controllers;

use MVC\Router;

class PaginaController {
   
   public static function inicio(Router $router) {

      $router->renderizar('paginas/inicio', [
         'page_name' => 'Inicio',
         'page_description' => 'Desarrollo web',
         'header' => true
      ]);
   }

   public static function acercade(Router $router) {

      $router->renderizar('paginas/acercade', [
         'page_name' => 'Acerca De',
         'page_titulo' => 'Conoce Más Sobre Nosotros',
         'page_description' => 'Desarrollo web',
         'header' => false
      ]);
   }

   public static function proyectos(Router $router) {

      $router->renderizar('paginas/proyectos', [
         'page_name' => 'Proyectos',
         'page_titulo' => 'Creando Conexiones: Proyectos Web que Transforman la Experiencia en Línea',
         'page_description' => 'Desarrollo web',
         'header' => false
      ]);
   }

   public static function blogs(Router $router) {

      $router->renderizar('paginas/blogs', [
         'page_name' => 'Blog',
         'page_titulo' => 'Enterate de las últimas noticias en nuestro blog',
         'page_description' => 'Desarrollo web',
         'header' => false
      ]);
   }

   public static function contacto(Router $router) {

      $router->renderizar('paginas/contacto', [
         'page_name' => 'Contacto',
         'page_titulo' => 'Pongámonos en contacto: Estamos aquí para ti',
         'page_description' => 'Pongámonos en contacto: Estamos aquí para ti',
         'header' => false
      ]);
   }

   public static function proyecto(Router $router) {

      $router->renderizar('paginas/proyecto', [
         'page_name' => 'Proyecto',
         'page_titulo' => 'Proyecto 01',
         'page_description' => 'Desarrollo web',
         'header' => false
      ]);
   }

   public static function blog(Router $router) {

      $router->renderizar('paginas/blog', [
         'page_name' => 'Blog',
         'page_titulo' => 'Blog 01',
         'page_description' => 'Desarrollo web',
         'header' => false
      ]);
   }

   public static function error(Router $router) {

      $router->renderizar('paginas/error', [
         'page_name' => '404',
         'page_titulo' => '404 Página no encontrado',
         'page_description' => '404 Pagina no encontrado',
         'header' => false
      ]);
   }
}