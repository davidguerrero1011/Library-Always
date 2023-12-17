<?php

class Connection {

    public static function connection() {

        try {

            $connect = "mysql:host=localhost;dbname=library-always;port=3306;charset=utf8mb4";
            $opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
            $user = "root"; 
            $password = "";
            $dbInstance = new PDO($connect, $user, $password, $opt);
            return $dbInstance;

        } catch (PDOException $bug) {

            echo "<h2>I can't connect with the database, sorry...<br></h2>".$bug->getMessage();
            exit;
            
        }
    }

    
}