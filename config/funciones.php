<?php

function debuguear($variable) : string {
   echo '<pre>';
   var_dump($variable);
   echo '</pre>';
   exit;
}

function stringHTML($html) : string {
   $sanitizado = htmlspecialchars($html);
   return $sanitizado;
}

function paginaActual($path) : bool {
   return str_contains($_SERVER['PATH_INFO'] ?? '/', $path) ? true : false;
}

function isAdmin() : bool {
   if(!isset($_SESSION)) {
      session_start();
   }
   return isset($_SESSION['admin']) && !empty($_SESSION['admin']);
}

function isAnimacion() : void {
   $efectos = ['fade-up', 'fade-down', 'fade-left', 'fade-right', 'flip-left', 'flip-right', 'zoom-in', 'zoom-in-up', 'zoom-in-down', 'zoom-out'];
   $efecto = array_rand($efectos, 1);
   echo ' data-aos="' . $efectos[$efecto] . '" ';
}