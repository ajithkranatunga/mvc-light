<?php
/**
 * Created by PhpStorm.
 * User: win 8
 * Date: 2/20/2016
 * Time: 5:58 PM
 */

class BaseModel {
    protected $database;
    function __construct(){
        $this->database = new DbConnect();
    }

    function create($object){
        //TODO implement generalized create function
    }

    /**
     * @param $table_name
     * @param $object_name
     * @param string $extra / can pass "WHERE" conditions etc as $extra
     * @return a result array of a select all query as a domain object
     */
    function read($table_name, $object_name, $extra=''){
        $query = "SELECT * FROM ".$table_name.$extra;
        try{
            $conn = $this->database->load();
            $stmt = $conn->prepare($query);

            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_CLASS, $object_name);

            $result = $stmt->fetchAll();

            return $result;
        } catch (PDOException $e){
            echo "ERROR : ".$e->getMessage();
        }
    }
}