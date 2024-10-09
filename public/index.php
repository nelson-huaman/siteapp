<?php

use Controllers\BlogCategoriaController;
use Controllers\BlogController;
use Controllers\DashboardController;
use Controllers\LoginController;
use Controllers\MensajeController;
use Controllers\PaginaController;
use Controllers\ProyectoController;
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
$router->post('/salir', [LoginController::class, 'salir']);

// Administrador
$router->get('/admin/dashboard', [DashboardController::class, 'index']);
$router->get('/admin/proyectos', [ProyectoController::class, 'index']);
$router->get('/admin/blogs', [BlogController::class, 'index']);
$router->get('/admin/blogs/crear', [BlogController::class, 'crear']);
$router->post('/admin/blogs/crear', [BlogController::class, 'crear']);
$router->get('/admin/blogs/categorias', [BlogCategoriaController::class, 'index']);
$router->get('/admin/blogs/categorias/crear', [BlogCategoriaController::class, 'crear']);
$router->post('/admin/blogs/categorias/crear', [BlogCategoriaController::class, 'crear']);
$router->get('/admin/blogs/categorias/editar', [BlogCategoriaController::class, 'editar']);
$router->post('/admin/blogs/categorias/editar', [BlogCategoriaController::class, 'editar']);
$router->post('/admin/blogs/categorias/estado', [BlogCategoriaController::class, 'estado']);
$router->post('/admin/blogs/categorias/eliminar', [BlogCategoriaController::class, 'eliminar']);

$router->get('/admin/mensajes', [MensajeController::class, 'index']);



// Página no encontrado
$router->get('/admin/404', [DashboardController::class, 'error']);
$router->get('/404', [PaginaController::class, 'error']);

$router->rutas();