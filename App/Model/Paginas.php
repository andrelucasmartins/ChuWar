<?php
namespace App\Model;

class Paginas{
    function Load(){
        $page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_STRING);

        $page = (!$page) ? 'View/home.php' : 'View/{$page}.php';

        if(file_exists($page)){
            throw new \Exception("Página não existe!");
        }
        return $page;
    }
}