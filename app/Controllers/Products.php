<?php

namespace App\Controllers;

class Products extends BaseController{

  public function index(){
    echo "<h1>This is the index method in the Products controller.</h1>";
    print_r($this->session);  
  }

  public function show($id) : string{
    return "<h1>Details of the product $id </h1>";
  }

  public function cat($categoria, $id) : string{
    return "<h2>Categoria: $categoria <br> Producto: $id </h2>";
  }


}