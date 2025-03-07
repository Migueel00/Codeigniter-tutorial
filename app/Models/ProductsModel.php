<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductsModel extends Model{
  protected $table = 'products';
  protected $primaryKey = 'id';

  protected $useAutoIncrement = true;

  protected $returnType = 'object'; // or array 
  protected $useSoftDeletes = true; // dont delete , only change the status

  protected $allowedFields = ['code', 'name', 'stock', 'id_storage', 'status']; // To insert and update columns

  //DATES
  protected $useTimestamps = true;
  protected $dateFormat = 'datetime';
  protected $createdField = 'created_at';
  protected $updatedField = 'updated_at';
  protected $deletedField = 'deleted_at';
}

?>