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
    $routes->get('logout', 'LoginController::logout');
});

$routes->group('admin', function ($routes) {
    $routes->get('/', 'PengaduanController::index');
    $routes->get('verifikasi', 'AdminController::verval');
    $routes->get('petugas', 'AdminController::petugas');
    $routes->get('manajemen_masyarakat', 'ManajemenMasyarakat::index');
    $routes->post('tambah_tanggapan/(:any)','AdminController::tanggapan/$1');
});

$routes->group('pengaduan-masyarakat', function ($routes) {
    // Rute Masyarakat
    $routes->get('home', 'MasyarakatController::index');
    $routes->get('history', 'MasyarakatController::history');
    $routes->get('afterlogin', 'MasyarakatController::afterlogin');

    $routes->post('afterloginn', 'PengaduanController::create'); 
    $routes->post('afterloginn', 'PengaduanController::index'); 

    $routes->get('tanggapan_after_login', 'MasyarakatController::tanggapan');
    
});

$routes->group('petugas', function ($routes) {
    // Rute petugas
    $routes->get('/', 'PetugasController::index');
    $routes->get('masyarakat', 'PetugasController::masyarakat');
    $routes->get('verifikasi', 'PetugasController::verifikasi');
});
$routes->get('admincontroller/terima/(:num)', 'AdminController::terima/$1');
$routes->get('admincontroller/tolak/(:num)', 'AdminController::tolak/$1');
$routes->post('admin/tanggapan/(:num)', 'AdminController::Tanggapan/$1');
$routes->post('/tambahpetugas', 'PetugasController::tambahpetugas');
$routes->add('admin/reset-password', 'Admin::resetPassword');


$routes->get('/', 'Home::index');

