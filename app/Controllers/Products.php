<?php

namespace App\Controllers;

class Products extends BaseController{

  public function index(): string{

    $data = ['title' => 'Products',
      'id' => 12
    ];
    // return view('products/index', $data);
    return view('templates/header')
      .view('products/index', $data)
      .view('templates/footer');

  }

  public function show($id) : string{
    
    $data = ['title' => 'Products',
      'id' => $id
    ];

    // return view('products/index', $data);
    return view('templates/header')
      .view('products/show', $data)
      .view('templates/footer');
  }

  public function cat($categoria, $id) : string{
    return "<h2>Categoria: $categoria <br> Producto: $id </h2>";
  }


}