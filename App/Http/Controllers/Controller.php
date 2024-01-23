<?php 
namespace App\Http\Controllers;

class Controller{
    // controller sẽ lay view + sử dụng layout và data
    public function View($view,$data=[],$layout='clients'){
        $contentLayout = $this->Layout($layout);
        $contentView = $this->OnlyView($view,$data);
        $contentLayout = str_replace('{{content}}',$contentView,$contentLayout);
        echo $contentLayout;
    }
    public function Layout($layout){
        ob_start();
        include("resources/views/layouts/$layout.php");
        return ob_get_clean();
    }

    // 
    public function OnlyView($view,$data=[]){
        ob_start();
        include("resources/views/$view.php");
        return ob_get_clean();
    }

    // 
    public function Model($model){
        include("app/Model/$model.php");
        return new $model;
    }
}

