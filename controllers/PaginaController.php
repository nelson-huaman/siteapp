<?php

namespace Controllers;

use MVC\Router;

class PaginaController {
   
   public static function inicio(Router $router) {

      $router->renderizar('paginas/inicio', [
         'page_name' => 'Inicio',
         'header' => true
      ]);
   }

   public static function acercade(Router $router) {

      $router->renderizar('paginas/acercade', [
         'page_name' => 'Acerca De',
         'page_titulo' => 'Conoce Más Sobre Nosotros',
         'header' => false
      ]);
   }

   public static function proyectos(Router $router) {

      $router->renderizar('paginas/proyectos', [
         'page_name' => 'Proyectos',
         'page_titulo' => 'Creando Conexiones: Proyectos Web que Transforman la Experiencia en Línea',
         'header' => false
      ]);
   }

   public static function servicios(Router $router) {

      $router->renderizar('paginas/servicios', [
         'page_name' => 'Servicios',
         'page_titulo' => 'Cómo Podemos Ayudarte: Servicios Personalizados para Ti',
         'header' => false
      ]);
   }

   public static function blog(Router $router) {

      $router->renderizar('paginas/blog', [
         'page_name' => 'Blog',
         'page_titulo' => 'Enterate de las últimas noticias en nuestro blog',
         'header' => false
      ]);
   }

   public static function contacto(Router $router) {

      $router->renderizar('paginas/contacto', [
         'page_name' => 'Contacto',
         'page_titulo' => 'Pongámonos en Contacto: Estamos Aquí para Ti',
         'header' => false
      ]);
   }
}