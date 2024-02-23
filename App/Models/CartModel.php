<?php

namespace App\Models;

class CartModel extends BaseModel
{

    protected $table = 'carts';

    public function addToCart($productId, $userId, $name, $quantity, $price, $image, $total)
    {
        $data = [
            'id_pro' => $productId,
            'id_user' => $userId,
            'name' => $name,
            'quantity' => $quantity,
            'price' => $price,
            'img' => $image,
            'total' => $total
        ];

        return $this->table($this->table)->create($data);
    }

    public function getAllCarts()
    {
        return $this->table($this->table)->getAll()->get();
    }

    public function getCartById($cartId)
    {
        return $this->table($this->table)->getOne($cartId);
    }

    public function getAllCartsByUserId($userId)
    {
        return $this->table($this->table)->where('id_user', '=', $userId)->get();
    }

    public function deleteAllCartsByUserId($userId)
    {
        return $this->table($this->table)->delete('id_user = ' . $userId);
    }

    public function deleteCart($cartId)
    {
        return $this->table($this->table)->delete('id = ' . $cartId);
    }

    public function getCartItems()
    {
        $userId = $_SESSION['user']['id'];

        $this->table($this->table);
        $this->select('carts.*', 'products.name as product_name', 'products.price as product_price');
        $this->join('products', 'carts.id_pro = products.id');
        $this->where('id_user', '=', $userId);
        return $this->get();
    }

    public function updateCartItemQuantity($cartId, $quantity)
    {
        $data = ['quantity' => $quantity];
        return $this->table($this->table)->update($data)->where('id', '=', $cartId);
    }


    public function getCartItemCount($userId)
    {
        return $this->table($this->table)->where('id_user', '=', $userId)->count();
    }
}
