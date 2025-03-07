<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/products', 'Products::index');
$routes->get('/products/(:num)', 'Products::show/$1'); // Filter for numbers
$routes->get('/products/(:alpha)/(:num)', 'Products::cat/$1/$2');
$routes->get('/products/transaction', 'Products::transaction'); // only call to a function
$routes->get('/products/update', 'Products::update'); // only call to a function
$routes->get('/products/delete', 'Products::delete'); // only call to a function

$routes->get('/productsFiltered', 'Products::indexFiltered');


$routes->view('productsList/(:alpha)', 'list_products'); // This is a view route

$routes->group('admin', static function ($routes) { // this is a group route it will add /admin to the routes in the group 
    $routes->get('products', 'Admin\Products::index');
    $routes->get('products/(:num)', 'Admin\Products::show/$1');
    $routes->get('products/(:alpha)/(:num)', 'Admin\Products::cat/$1/$2');
});