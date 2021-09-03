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
$routes->setDefaultController('Beranda');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// Main Website
$routes->get('/', 'Beranda::index');
$routes->get('/potensi', 'Beranda::potensi');
$routes->get('/berita', 'Beranda::berita');
$routes->get('/berita/(:alpha)', 'Beranda::berita/$1', ['as' => 'berita_kategori']);
$routes->get('/detail_berita/(:num)', 'Beranda::detail_berita/$1', ['as' => 'detail_berita']);
$routes->get('/umkm', 'Beranda::umkm');
$routes->get('/profil','Beranda::profil');
$routes->get('/monografi','Beranda::monografi');
$routes->get('/layanan','Beranda::layanan');

// Admin
$routes->get('/admin','Admin::index');
$routes->get('/admin/berita','Admin::berita');
$routes->get('/admin/umkm','Admin::umkm');

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
