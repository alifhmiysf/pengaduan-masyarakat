<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/auth/login', 'LoginController::index');
$routes->get('/auth/register', 'LoginController::registrasi');
$routes->get('/admin', 'AdminController::index');
$routes->get('/admin/verifikasi/', 'AdminController::verval');
$routes->get('/admin/petugas/', 'AdminController::petugas');
$routes->get('/admin/masyarakat/', 'AdminController::masyarakat');