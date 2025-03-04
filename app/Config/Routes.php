<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/products', 'Products::index');
$routes->get('/products/([0-9]{2})', 'Products::show/$1'); // Filter for numbers
$routes->get('/products/(:alpha)/(:num)', 'Products::cat/$1/$2');

$routes->view('productsList/(:alpha)', 'list_products'); // This is a view route

$routes->group('admin', static function ($routes) { // this is a group route it will add /admin to the routes in the group 
    $routes->get('products', 'Admin\Products::index');
    $routes->get('products/(:num)', 'Admin\Products::show/$1');
    $routes->get('products/(:alpha)/(:num)', 'Admin\Products::cat/$1/$2');
});