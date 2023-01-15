<?php



Class Router {
    public static function route($url, $script){
        // catch request
        $query = $_GET['q'];

        if($url === '/' . $query){
            require_once 'scripts/' . $script . '.php';
        }
    }
}

Router::route('/auth', 'Post');
Router::route('/register', 'Post');