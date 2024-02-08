<?php

namespace App\Models;

use PDO;
use PDOException;

class Database
{
    private static $host = "localhost";
    private static $db_name = "php2";
    private static $username = "root";
    private static $password = "mysql";
    private static $dbPort = "3306";
    private static $connection;

    public function pdo()
    {
        try {
            $conn = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$db_name, self::$username, self::$password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            return $conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
