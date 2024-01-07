<?php
namespace App\Core;
class Database{

    //private: dong thuoc tinh va phuong thuc, protected: kế thừa, public
    private $_database_name;


    private $_database_user;


    private $_database_password;


    private $_database_port;


    private $_database_host;


    protected $connection;

    //Thuộc tính, có public thì lấy ra được
    public $name = "Toàn";

    //Đây là phương thức khởi tạo, new sẽ chạy
    function __construct()
    {
        echo "Đây là hàm khởi tạo";
    }

    //phương thức này public ở ngoài gọi vào dc
    public function connect($name){
        echo "Đây là phương thức private $name";
    }



     
}