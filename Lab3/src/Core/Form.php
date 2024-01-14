<?php

namespace App\Core;

class Form
{
    protected $action;
    protected $method;

    public static function begin($action, $method)
    {
        echo sprintf('<form action="%s" method="%s">', $action, $method);
        return new Form($action, $method);
    }

    public static function end()
    {
        return '</form>';
    }

    public function __construct($action, $method)
    {
        $this->action = $action;
        $this->method = $method;
    }

    public function field($attribute)
    {
        return new Field($attribute);
    }

    public function getAction()
    {
        return $this->action;
    }

    public function getMethod()
    {
        return $this->method;
    }
}
