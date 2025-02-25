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

$routes->group("user",function($routes){
    $routes->get('home','UserController::index',['as'=>'user.home']);
    $routes->get('addBook','UserController::addBook',['as'=>'user.addBook']);
    $routes->get('addAuthor','UserController::addAuthor',['as'=>'user.addAuthor']);
    $routes->get('author','UserController::ListAuthor',['as'=>'user.author']);
    $routes->get('detalleBook','UserController::DetalleBook',['as'=>'user.detalleBook']);
    // $routes->get('editar/(:num)', 'UserController::editar/$1',['as'=>'user.editar']);
});

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
$routes->post('guardarLibro', 'UserController::guardarLibro');
$routes->post('actualizarLibro', 'UserController::actualizarLibro');
$routes->post('guardarAuthor', 'UserController::guardarAuthor');
$routes->get('eliminar/(:num)', 'UserController::eliminar/$1');
$routes->get('editar/(:num)', 'UserController::editar/$1');