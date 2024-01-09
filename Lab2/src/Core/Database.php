<?php
namespace App\Core;

use PDO; // Sửa thành PDO (viết hoa)

class Database
{
    public function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "mysql";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=php2", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Kết nối thành công!";
            return $conn;
        } catch (\PDOException $e) { // Sửa thành \PDOException để chỉ định rõ ràng namespace global
            echo "Kết nối thất bại!: " . $e->getMessage();
        }
    }

    public function HelloWorld()
    {
        echo "Hello World";
    }
}
