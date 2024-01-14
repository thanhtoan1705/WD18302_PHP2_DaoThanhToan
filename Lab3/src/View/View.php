<?php

namespace App\View;

class View {
    public static function render($view, $data = []) {
        extract($data);
        ob_start();
        include __DIR__ . "/$view";
        return ob_get_clean();
    }
}
