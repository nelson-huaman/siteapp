<?php

namespace MVC;

class Router {

   public array $getRoutes = [];
   public array $postRoutes = [];

   // Metodo GET
   public function get($url, $funcion) {
      $this->getRoutes[$url] = $funcion;
   }

   // Metodo POST
   public function post($url, $funcion) {
      $this->postRoutes[$url] = $funcion;
   }

   // Compueba Rutas
   public function rutas() {
      $currentURL = strtok($_SERVER['REQUEST_URI'], '?') ?? '/';
      $method = $_SERVER['REQUEST_METHOD'];

      if($method === 'GET') {
         $funcion = $this->getRoutes[$currentURL] ?? null;
         // $funcion = $this->getRoutes[$currentURL] ?? $this->dinamicoRouter($currentURL, $this->getRoutes);
      } else {
         $funcion = $this->postRoutes[$currentURL] ?? null;
         // $funcion = $this->postRoutes[$currentURL] ?? $this->dinamicoRouter($currentURL, $this->postRoutes);
      }

      if($funcion) {
         call_user_func($funcion, $this);
         // call_user_func_array($funcion['callback'], $funcion['params']);
      } else {
         if (str_contains($currentURL, '/admin')) {
            header('location: /admin/404');
         } else {
            header('location: /404');
         }
      }
   }

   // Rutas Dinamicas
   private function dinamicoRouter($currentURL, $routes) {
      foreach ($routes as $url => $callback) {
         $urlPattern = preg_replace('/{[^\/]+}/', '([^\/]+)', $url);
         if (preg_match("#^$urlPattern$#", $currentURL, $matches)) {
            array_shift($matches);
            return ['callback' => $callback, 'params' => $matches];
         }
      }
      return null;
   }

   // Renderiza a la Vista
   public function renderizar($view, $datos = []) {
      foreach ($datos as $key => $value) {
         $$key = $value;
      }

      ob_start();
      include_once __DIR__ . "/views/$view.php";
      $contenido = ob_get_clean();
      $currentURL = strtok($_SERVER['REQUEST_URI'], '?') ?? '/';

      if (str_contains($currentURL, '/admin')) {
         include_once __DIR__ . '/views/layout-admin.php';
      } else {
         include_once __DIR__ . '/views/layout.php';
      }
   }

}