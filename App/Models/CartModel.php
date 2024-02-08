<?php
namespace App\Models;

class CartModel extends BaseModel{

    protected $table = 'carts';

    public function addToCart($productId, $userId, $quantity, $price, $image, $total)
    {
        $data = [
            'id_pro' => $productId,
            'id_user' => $userId,
            'quantity' => $quantity,
            'price' => $price,
            'img' => $image,
            'total' => $total
        ];

        return $this->table($this->table)->create($data);
    }

    public function getAllCarts(){
        return $this->table($this->table)->getAll()->get();
    }

    public function getCartById($cartId){
        return $this->table($this->table)->getOne($cartId);
    }


}