<?php

namespace App\Core;

class Base{

    const VAT = 0.1;

    public static $document = "document";


    private $_name ="PHP";

    public function getName(){
        return $this->_name;
    }

    public function setName($language){
        echo self::VAT. "<br>";
        $this->_name = $language;
    }

    public static function getVAT(){
        return self::VAT;
    }

    public static function getDocumentUrl(){
        return self::$document;
    }
}