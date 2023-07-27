<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}


// Login
$routes->get('/login', 'LoginController::index');
$routes->post('/login', 'LoginController::login');
//register
$routes->get('/register', 'RegisterController::index');
$routes->post('/register', 'RegisterController::store');
// Log out
$routes->get('logout', 'LoginController::logout');

// Dashboard
$routes->get('/dashboard', 'DashboardController::index');

$routes->get('/beranda', 'DashboardController::beranda', ['as' => 'beranda']);


// Temuan
$routes->get('/temuan', 'TemuanController::index');
$routes->get('/temuan/create', 'TemuanController::create');
$routes->post('/temuan/store', 'TemuanController::store');
$routes->get('/temuan/edit/(:num)', 'TemuanController::edit/$1');
$routes->post('/temuan/update/(:num)', 'TemuanController::update/$1');
$routes->get('/temuan/delete/(:num)', 'TemuanController::delete/$1');


// Kehilangan
$routes->get('/kehilangan', 'KehilanganController::index');
$routes->get('/kehilangan/create', 'KehilanganController::create');
$routes->post('/kehilangan/store', 'KehilanganController::store');
$routes->get('/kehilangan/edit/(:num)', 'KehilanganController::edit/$1');
$routes->post('/kehilangan/update/(:num)', 'KehilanganController::update/$1');
$routes->get('/kehilangan/delete/(:num)', 'KehilanganController::delete/$1');


$routes->get('laporan', 'LaporanTController::index');
$routes->get('laporan/create', 'LaporanTController::create');
$routes->post('laporan/store', 'LaporanTController::store');
