<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');




$routes->group('', ['filter' => 'belumLogin'], function ($routes) {
	$routes->get('/Logout', 'auth/Login::logout');
	$routes->get('/Profile', 'User::profile');
	$routes->post('/Profile', 'User::edit_profile');
});

$routes->group('', ['filter' => 'sudahLogin'], function ($routes) {
	$routes->get('/RegisterPembeli', 'auth/Register::index_pembeli');
	$routes->post('/RegisterPembeli', 'auth/Register::register_pembeli');
	$routes->get('/RegisterPenjual', 'auth/Register::index_penjual');
	$routes->post('/RegisterPenjual', 'auth/Register::register_penjual');
	$routes->get('/Login', 'auth/Login::index');
	$routes->post('/Login', 'auth/Login::Login');
});



/**
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
