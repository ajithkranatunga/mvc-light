<?php
class PersonModel extends BaseModel{
    function addNew($person){
        $add_person_query = "INSERT INTO person(first_name, last_name, address) VALUES (:fname, :lname, :addr)";
        try{
            $conn = $this->database->load();
            $stmt = $conn->prepare($add_person_query);

            $stmt->bindParam(':fname', $fname, PDO::PARAM_STR, 30);
            $stmt->bindParam(':lname', $lname, PDO::PARAM_STR, 30);
            $stmt->bindParam(':addr', $address, PDO::PARAM_STR, 150);

            $fname = $person->getFname();
            $lname = $person->getLname();
            $address = $person->getAddress();

            $stmt->execute();

        } catch (PDOException $e){
            echo "Error : ".$e->getMessage();
        }
    }
}