<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'PublicController::index');
$routes->get('home', 'PublicController::index');
$routes->get('szervezet/kozerdeku_adatok', 'PublicController::public_data');
$routes->get('szervezet/szervezet_felepeitese', 'PublicController::organization_structure');
$routes->get('segedanyagok', 'PublicController::excipients');
$routes->get('sajto', 'PublicController::press');
// $routes->get('galleria', 'PublicController::index');

// $routes->group('admin', function($routes){
//     $routes->get('', 'Admin\AdminController::index');
//     $routes->get('login', 'Admin\AdminController::index');
// });