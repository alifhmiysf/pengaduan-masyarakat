<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->group('auth', function ($routes) {
    // Rute Registrasi
    $routes->get('register', 'LoginController::registrasi');
    $routes->post('register', 'LoginController::valid_register');

    // Rute Login dan Otentikasi
    $routes->get('login', 'LoginController::index');
    $routes->post('login', 'LoginController::valid_login');
});

$routes->group('admin', function ($routes) {
    $routes->get('/', 'AdminController::index');
    $routes->get('verifikasi', 'AdminController::verval');
    $routes->get('petugas', 'AdminController::petugas');
    $routes->get('manajemen_masyarakat', 'ManajemenMasyarakat::index');
});

$routes->group('pengaduan-masyarakat', function ($routes) {
    // Rute Masyarakat
    $routes->get('home', 'MasyarakatController::index');
    $routes->get('afterlogin', 'MasyarakatController::afterlogin');
    $routes->get('tanggapan_after_login', 'MasyarakatController::tanggapan_after_login');
    $routes->get('tanggapan', 'MasyarakatController::tanggapan');
});

$routes->group('petugas', function ($routes) {
    // Rute petugas
    $routes->get('/', 'PetugasController::index');
    $routes->get('masyarakat', 'PetugasController::masyarakat');
    $routes->get('verifikasi', 'PetugasController::verifikasi');
});


$routes->get('/', 'Home::index');
