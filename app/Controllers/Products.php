<?php

namespace App\Controllers;

class Products extends BaseController{

  public function index(): string{
    $db = \Config\Database::connect(); // conection to database

    $query = $db->query('SELECT * FROM products');
    $result = $query->getResult(); // resturn the result in object

    $data = ['title' => 'Products',
      'id' => 12,
      'products' => $result
    ];

    return view('products/index', $data);
  }

  public function show($id) : string{
    
    $data = ['title' => 'Products',
      'id' => $id
    ];

    // return view('products/index', $data);
    // return view('templates/header')
    //   .view('products/show', $data)
    //   .view('templates/footer');

    return view('products/show', $data);
  }

  public function cat($categoria, $id) : string{
    return "<h2>Categoria: $categoria <br> Producto: $id </h2>";
  }


}