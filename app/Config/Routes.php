<?php

use App\Controllers\MasyarakatController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->group('auth', function ($routes) {
    $routes->get('register', 'LoginController::registrasi');
    $routes->post('register', 'LoginController::valid_register');
    $routes->get('login', 'LoginController::index');
    $routes->post('login', 'LoginController::valid_login');
    $routes->get('logout', 'LoginController::logout');
});

$routes->group('admin', function ($routes) {
    $routes->get('/', 'PengaduanController::index');
    $routes->get('verifikasi', 'AdminController::verval');
    $routes->get('petugas', 'AdminController::petugas');
    $routes->get('manajemen_masyarakat', 'ManajemenMasyarakat::index');
    $routes->post('tambah_tanggapan/(:any)', 'AdminController::tanggapan/$1');
});

$routes->group('pengaduan-masyarakat', function ($routes) {
    $routes->get('history', 'MasyarakatController::history');
    $routes->get('afterlogin', 'MasyarakatController::afterlogin');
    $routes->post('afterloginn', 'PengaduanController::create');
    $routes->post('afterloginn', 'PengaduanController::index');
});

$routes->group('petugas', function ($routes) {
    $routes->get('/', 'PetugasController::index');
    $routes->get('masyarakat', 'PetugasController::masyarakat');
});
$routes->get('admincontroller/terima/(:num)', 'AdminController::terima/$1');
$routes->get('admincontroller/tolak/(:num)', 'AdminController::tolak/$1');
$routes->post('admin/tanggapan/(:num)', 'AdminController::Tanggapan/$1');

$routes->get('petugascontroller/terima/(:num)', 'PetugasController::terima/$1');
$routes->get('petugascontroller/tolak/(:num)', 'PetugasController::tolak/$1');
$routes->post('petugas/tanggapan/(:num)', 'PetugasController::Tanggapan/$1');

$routes->post('/tambahpetugas', 'PetugasController::tambahpetugas');
$routes->post('pengaduan/update', 'PengaduanController::update');
$routes->get('/pengaduan/delete/(:num)', 'PengaduanController::delete/$1');



$routes->post('masyarakat/reset-password/(:num)', 'MasyarakatController::updater/$1');
$routes->get('masyarakat/reset-password/(:num)', 'MasyarakatController::showResetForm/$1');

$routes->post('petugas/reset-password-petugas/(:num)', 'PetugasController::updater/$1');
$routes->get('petugas/reset-password-petugas/(:num)', 'PetugasController::showResetForm/$1');

$routes->post('petugas/reset-password/(:num)', 'MasyarakatController::updatepw/$1');
$routes->get('petugas/reset-password/(:num)', 'MasyarakatController::showResetpw/$1');


$routes->post('data-masyarakat/update', 'MasyarakatController::updatemasyarakat');


$routes->get('/', 'MasyarakatController::index');
// $routes->get('/', 'Home::index');
