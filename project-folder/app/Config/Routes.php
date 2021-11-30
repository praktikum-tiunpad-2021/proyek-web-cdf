<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/login', 'Home::login');
$routes->post('/validateLogin', 'Home::validateLogin');
$routes->get('/logout', 'Home::logout');
$routes->get('/Users/home', 'Users::home');
$routes->get('/Users/announcement', 'Users::announcement');
$routes->get('/Users/profile', 'Users::profile');
$routes->get('/Users/profile/edit', 'Users::editProfile');
$routes->post('/Users/profile/saveProfile', 'Users::saveProfile');
$routes->post('/Users/profile/savePassword', 'Users::savePW');
$routes->get('/Users/calendar', 'Users::calendar');
$routes->get('/Users/list', 'Users::list');
$routes->post('/Users/list/add', 'Users::addList');
$routes->post('/Users/list/delete', 'Users::deleteList');
$routes->post('/Users/list/update', 'Users::updateList');

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
