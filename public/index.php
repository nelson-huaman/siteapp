<?php

use Controllers\PaginaController;
use MVC\Router;

require_once __DIR__ . '/../config/app.php';

$router = new Router;

$router->get('/', [PaginaController::class, 'inicio']);
$router->get('/acerca-de', [PaginaController::class, 'acercade']);
$router->get('/proyectos', [PaginaController::class, 'proyectos']);
$router->get('/servicios', [PaginaController::class, 'servicios']);
$router->get('/blog', [PaginaController::class, 'blog']);
$router->get('/contacto', [PaginaController::class, 'contacto']);

$router->rutas();