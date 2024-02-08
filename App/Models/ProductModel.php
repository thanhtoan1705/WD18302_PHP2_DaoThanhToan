<?php

namespace App\Models;

use App\Models\BaseModel;

class ProductModel extends BaseModel
{
    public $table = 'products';


    public function getAllProducts()
    {
        ;
        return $this->table($this->table)->getAll()->get();
    }

    public function getProductById($productId)
    {
        return $this->table($this->table)->getOne($productId);
    }
    

}
