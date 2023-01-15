<?php



Class Router {
    public static function get($url, $page){
        // catch request
        $query = $_GET['q'];

        if($url === '/' . $query){
            require_once 'get/' . $page . '.php';
        }
    }

    public static function post($url, $script){
        // catch request
        $query = $_GET['q'];

        if($url === '/' . $query){
            require_once 'post/' . $script . '.php';
        }
    }
}

Router::get('/auth-page', 'auth-page');
Router::post('/auth', 'auth');



// можно сделать метод get - он будет открывать страницу
// и метод post - он будет отправлять пост запрос