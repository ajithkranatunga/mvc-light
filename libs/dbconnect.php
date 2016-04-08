<?php
/**
 * Created by PhpStorm.
 * User: win 8
 * Date: 2/20/2016
 * Time: 5:55 PM
 */

class DbConnect {
    public function load(){
        try{
            $conn = new PDO(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWORD);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e){
            echo "Error : ".$e->getMessage();
        }

    }
}