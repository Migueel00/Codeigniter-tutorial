<?php

namespace App\Controllers;

use App\Models\ProductsModel;

class Products extends BaseController{
  private $productsModel;

  public function __construct(){
    
    $this->productsModel = new ProductsModel();
  }

  public function index(): string{
/*     $db = \Config\Database::connect(); // conection to database

    $query = $db->query('SELECT * FROM products');
    $result = $query->getResult(); // resturn the result in object */

    $productsModel = new ProductsModel();
    $result = $productsModel->findAll();  // return all data with deleteSoftMode true return all the values without delete_at info 

    $data = ['title' => 'Products',
      'id' => 12,
      'products' => $result
    ];

    return view('products/index', $data);
  }

  public function show($id) : string{
    
    $productsModel = new ProductsModel();
    $product = $productsModel->find($id); // return only 1 product with the id;

    

    $data = ['title' => 'Products',
      'id' => $id,
      'product' => $product
    ];

    // return view('products/index', $data);
    // return view('templates/header')
    //   .view('products/show', $data)
    //   .view('templates/footer');

    return view('products/show', $data);
  }

  public function transaction() : void{

    // datat to insert
    $data = [
      'code' => '192736251128',
      'name' => 'Camera',
      'stock' => 7,
      'id_storage' => 1,
      'status' => 1
    ];

    echo $this->productsModel->insert($data, false); // insert data to the model;
    echo $this->productsModel->getInsertID();
  }

  public function update() : void{
     // datat to insert
    $data = [
      'status' => 0
    ];

    echo $this->productsModel->update([6,5,3], $data); // First parameter : id, Second: Updated Data
  }

  public function delete() : void{
    echo $this->productsModel->delete([6,5]);
  }

  public function cat($categoria, $id) : string{
    return "<h2>Categoria: $categoria <br> Producto: $id </h2>";
  }

  public function showAll() : string{
    $data = $this->productsModel->withDeleted()->findAll(); // return all the values deleteds too

    return view('products/showAll', $data);
  }

  public function showDeleteds() : void {
    $data = $this->productsModel->onlyDeleted()->findAll(); // return only the deleted values
    echo $data;
  }

  public function deleteSoftDeleted() : void{
    $this->productsModel->purgeDeleted(); // delete all the softdeleteds fields
  }
}