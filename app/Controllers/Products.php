<?php

namespace App\Controllers;

use App\Models\ProductsModel;

class Products extends BaseController{
  private $productsModel;
  protected $helpers = ['form']; // call helper

  public function __construct(){
    
    $this->productsModel = new ProductsModel();

  }

  public function index(): string{
    helper('form'); // call helper

    $db = \Config\Database::connect(); // conection to database

    $condition = ['status' => 1, 'stock >' => 5];

    // query builder
  /*   $query = $db->table('products')
    ->select('id, code, name, stock')
    ->where($condition)
    ->orderBy('name', 'asc')
    ->limit(1)
    ->get();
 */
    $sql = $db->table('products');
    $sql->select('products.id, products.code, products.name, products.stock, storage.name AS storage');
    $sql->join('storage', 'products.id_storage = storage.id'); // inner join 

    $query = $sql->get();
    $result = $query->getResult();
    echo $db->getLastQuery();


    //$result = $query->getResult(); // resturn the result in object 

    // $productsModel = new ProductsModel();
    // $result = $productsModel->findAll();  // return all data with deleteSoftMode true return all the values without delete_at info 

    $data = ['title' => 'Products',
      'id' => 12,
      'products' => $result
    ];

    return view('products/index', $data);
  }

  public function indexFiltered() : string{
    
    $result = $this->productsModel->where('status', 1)->findAll(); 

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

  public function add() : string{

    helper('form');
    $data = [
      'title' => 'Add'
    ];

    return view('products/add', $data);
  }

  public function save(){
    print_r($_POST);

    $rules = [
      'code' => [
        'label' => 'code', 
        'rules' => 'required|is_unique[products.code]',
        'errors' => [
          'required' => 'The {field} field is required.',
          'is_unique' => 'The {field} field must be unique.'
        ],
      ],
      'name' => 'required|min_length[3]',
      'price' => 'required|numeric|greater_than[0]',
      'stock' => 'required|numeric',
      'storage' => 'required|is_not_unique[storage.id]'
    ];

    if(!$this->validate($rules)){
      return redirect()->back()->withInput();
    }

    echo "Data saved";
  }
}