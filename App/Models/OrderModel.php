<?php

namespace App\Models;

class OrderModel extends BaseModel
{
    protected $table = 'bill_details';

    public function joinBill()
    {
        $this->table($this->table)->join('bills', 'bill_details.id_bill = bills.id');
        return $this;
    }

    public function joinProduct()
    {
        $this->join('products', 'bill_details.id_pro = products.id');
        return $this;
    }

    public function joinUser($userId)
    {
        $this->where('bills.id_user', '=', $userId);

        return $this;
    }
}
