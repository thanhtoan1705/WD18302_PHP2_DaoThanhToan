<?php

namespace App\Models;

interface CrudInterface
{
    /**
     * Phương thức getAll() dùng để lấy tất cả records
     */
    public function getAll();



    /**
     * Phương thức getOne() dùng để lấy một records
     * @param int $id
     * @return array $record
     */
    public function getOne(int $id);



    /**
     * Phương thức create() dùng để tạo một dữ liệu mới
     * @param array $data
     * @return mixed
     */
    public function create(array $data);


    
    /**
     * Phương thức update() dùng để cập nhật một records
     * @param array $data
     * 
     */
    public function update($data);



    /**
     * Phương thức delete() dùng để cập nhật một records
     * @param int $id
     * 
     */
    public function delete(int $id): bool;



    /**
     * Phương thức read() dùng để đọc một records
     * @param int $id
     * @return array $record
     */
    // public function read(int $id);

}
