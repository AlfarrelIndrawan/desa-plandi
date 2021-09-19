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

//Auth
$routes->get('/login', 'Admin::loginPage');
$routes->post('/proses_login','Admin::login');
$routes->get('/logout', 'Admin::logout');

// Admin
$routes->group('admin',['filter' => 'cekLogin'], function($routes){
	$routes->get('/','Admin::index');

	// Admin Berita
	$routes->get('berita','Admin::berita');
	$routes->get('berita/tambahdata','Admin:viewAddBerita');
	$routes->post('berita/tambah','Admin::tambahBerita');
	$routes->get('berita/edit/(:any)','Admin::viewEditBerita/$1');
	$routes->post('berita/update/(:any)','Admin::editBerita/$1');
	$routes->get('berita/delete/(:any)','Admin::hapusBerita/$1');

	//Admin Penduduk
	$routes->get('penduduk','Admin::penduduk');

	// Admin UMKM
	$routes->get('umkm','Admin::umkm');
	$routes->get('umkm/tambahdata','Admin::viewAddUMKM');
	$routes->post('umkm/tambah','Admin::tambahUMKM');
	$routes->get('umkm/edit/(:any)','Admin::viewEditUMKM/$1');
	$routes->post('umkm/update/(:any)','Admin::editUMKM/$1');
	$routes->get('umkm/delete/(:any)','Admin::hapusUMKM/$1');

	// Admin Layanan
	$routes->get('layanan', 'Admin::layanan');
	$routes->get('layanan-selesai', 'Admin::layanan_selesai');
	$routes->get('layanan/info/(:any)', 'Admin::informasiLengkap');
	$routes->get('layanan/konfirmasi/(:any)', 'Admin::konfirmasiSurat/$1');
	$routes->get('layanan/delete/(:any)', 'Admin::hapusSurat/$i');
});

// Bukan Admin
$routes->get('bukanadmin', 'Admin::bukan_admin');

// Layanan
$routes->get('/layanan/surat/tambah', 'Layanan::tambahSurat');
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
