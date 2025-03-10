<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/products', 'Products::index');
$routes->get('/products/add', 'Products::add');
$routes->get('/products/(:num)/edit', 'Products::edit/$1');
$routes->post('/products/edit/(:num)', 'Products::updateProduct/$1');

$routes->post('/products/save', 'Products::save');


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

/* /// Restful routes
$routes->get('storage/new', 'Storage::new'); // New
$routes->post('storage', 'Storage::create'); // create
$routes->get('storage', 'Storage::index'); // list
$routes->get('storage/(:num)', 'Storage::show/$1'); // show
$routes->get('storage/(:num)/edit', 'Storage::edit/$1'); // edit
$routes->put('storage/(:num)', 'Storage::update/$1'); // update mehtod PUT or PATCH
$routes->delete('storage/(:num)', 'Storage::delete/$1'); // delete
 */
$routes->resource('storage', ['controller' => 'Storage']); // this will create all the routes for the resource