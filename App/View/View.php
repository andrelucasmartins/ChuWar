<?php

namespace App\View;

include 'App/helpers.php';
class View{

    public static function make($viewName, array $customVars = array()){
        // cria as variáveis do array $customVars
        extract($customVars);
         
        // inclui o template, que vai processar a view na variável $viewName
        require_once viewsPath() . 'template.php';
    }
}