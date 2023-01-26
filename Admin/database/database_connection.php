<?php
abstract class Database_connection {
    private static $pdo;

    private static function setConnexion(){
        // self::$pdo = new PDO('mysql:host=tomajuy1987.mysql.db;dbname=tomajuy1987;charset=utf8', 'tomajuy1987', 'Zaibaket2018');
        self::$pdo = new PDO('mysql:host=localhost;dbname=clos_saint_sauveur;charset=utf8', 'root', '');
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    }
    
    protected function getConnexion(){
        if(self::$pdo === null){
            self::setConnexion();
        }
        return self::$pdo;
    }


    public static function sendJSON($info){
        header("Access-Control-Allow-Origin: *");
        header("Content-Type: application/json");
        echo json_encode($info);
        
    }
    
}