<?php

namespace App\Model;

use App\Core\Crudable;

abstract class BaseModel implements Crudable
{
    protected $table;

    public function __construct($table)
    {
        $this->table = $table;
    }

    abstract public function create(array $data);

    abstract public function read($id);

    abstract public function update($id, array $data);

    abstract public function delete($id);

    // Các phương thức chung có thể thêm vào theo nhu cầu
    protected function executeQuery($query)
    {
        // Thực hiện câu truy vấn và trả kết quả
        echo "Executing query: $query\n";
    }

    protected function validateData(array $data)
    {
        // Validate dữ liệu trước khi thực hiện CRUD operations
        echo "Validating data...\n";
    }
}


