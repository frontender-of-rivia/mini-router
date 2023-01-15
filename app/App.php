<?php

Class App {
    public static function start(){
        self::session_start();
        self::db();
    }

    public static function db(){
        $mysqli = new mysqli("localhost", "root", "", "vanila");
    }
    
    public static function session_start(){
        session_start();
    }
}


?>