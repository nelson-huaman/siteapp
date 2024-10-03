<?php

use Controllers\DashboardController;
use Controllers\LoginController;
use Controllers\PaginaController;
use MVC\Router;

require_once __DIR__ . '/../config/app.php';

$router = new Router;

$router->get('/', [PaginaController::class, 'inicio']);
$router->get('/acerca-de', [PaginaController::class, 'acercade']);
$router->get('/proyectos', [PaginaController::class, 'proyectos']);
$router->get('/servicios', [PaginaController::class, 'servicios']);
$router->get('/blogs', [PaginaController::class, 'blogs']);
$router->get('/contacto', [PaginaController::class, 'contacto']);

$router->get('/proyecto/proyecto-01', [PaginaController::class, 'proyecto']);
$router->get('/blog/blog-01', [PaginaController::class, 'blog']);


$router->get('/login', [LoginController::class, 'index']);
$router->post('/login', [LoginController::class, 'index']);
$router->get('/salir', [LoginController::class, 'salir']);

// Administrador
$router->get('/admin/dashboard', [DashboardController::class, 'index']);

// Página no encontrado 
$router->get('/admin/404', [PaginaController::class, 'error']);
$router->get('/404', [PaginaController::class, 'error']);

$router->rutas();