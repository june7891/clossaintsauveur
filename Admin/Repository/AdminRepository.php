<?php

require_once("Admin/database/database_connection.php");


class AdminRepository extends Database_connection {


  

    public function isConnexionValid($username, $password){
        $passwordBd = $this->getPasswordUser($username);
        return password_verify($password, $passwordBd);
    }  
    
    
    private function getPasswordUser($username){
        $req = "SELECT * FROM admin WHERE username = :username";
        $statement = $this->getConnexion()->prepare($req);
        $statement->bindValue(":username",$username,PDO::PARAM_STR);
        $statement->execute();
        $admin = $statement->fetch(PDO::FETCH_ASSOC);
        $statement->closeCursor();
        return $admin['password'];
    }



    public function findUserByUsername($username){
        $req = 'SELECT * FROM admin WHERE username = :username';
        $statement = $this->getConnexion()->prepare($req);
        $statement->bindValue(":username",$username,PDO::PARAM_STR);
        $statement->execute();
        $admin = $statement->fetch(PDO::FETCH_OBJ);
        $statement->closeCursor();
        return $admin;
     }



     public function login($username, $password){
        $user = $this->findUserByUsername($username);

        $hashedPassword = $user->password;
        if(password_verify($password, $hashedPassword)){
            return $user;
        }else{
            return false;
        }
    }
 

    public function getAllReservations(){
        $req = 'SELECT * FROM events';
        $statement = $this->getConnexion()->prepare($req);
        $statement->execute();
        $reservations = $statement->fetchAll(PDO::FETCH_ASSOC);
        $statement->closeCursor();

        return $reservations;
    }
    public function getAllPrices(){
        $req = 'SELECT * FROM prices';
        $statement = $this->getConnexion()->prepare($req);
        $statement->execute();
        $prices = $statement->fetchAll(PDO::FETCH_ASSOC);
        $statement->closeCursor();

        return $prices;
    }


    public function getDisponibilities(){
        $req = 'SELECT * FROM disponibilities';
        $statement = $this->getConnexion()->prepare($req);
        $statement->execute();
        $disponibilities = $statement->fetchAll(PDO::FETCH_ASSOC);
        $statement->closeCursor();

        return $disponibilities;
    }

public function addDbDisponibility($price, $start, $end) {

    $req = "INSERT INTO disponibilities (price, start, end) VALUES (:price, :start, :end)";
    $statement = $this->getConnexion()->prepare($req);
    $statement->bindValue(":price",$price,PDO::PARAM_STR);
    $statement->bindValue(":start",$start,PDO::PARAM_STR);
    $statement->bindValue(":end",$end,PDO::PARAM_STR);
    $statement->execute();
    $statement->closeCursor(); 
    return $this->getConnexion()->lastInsertId();

}
public function addDbReservation($name, $price, $start, $end) {

    $req = "INSERT INTO events (name, price, start, end) VALUES (:name, :price, :start, :end)";
    $statement = $this->getConnexion()->prepare($req);
    $statement->bindValue(":name",$name,PDO::PARAM_STR);
    $statement->bindValue(":price",$price,PDO::PARAM_STR);
    $statement->bindValue(":start",$start,PDO::PARAM_STR);
    $statement->bindValue(":end",$end,PDO::PARAM_STR);
    $statement->execute();
    $statement->closeCursor(); 
    return $this->getConnexion()->lastInsertId();

}


public function deleteDbReservation($id_reservation){
    $req = "DELETE FROM events WHERE id = :id_reservation";
    $statement = $this->getConnexion()->prepare($req);
    $statement->bindValue(":id_reservation",$id_reservation,PDO::PARAM_INT);
    $statement->execute();
    $statement->closeCursor(); 
    
}
public function deleteDbDisponibility($id_disponibility){
    $req = "DELETE FROM disponibilities WHERE id = :id_disponibility";
    $statement = $this->getConnexion()->prepare($req);
    $statement->bindValue(":id_disponibility",$id_disponibility,PDO::PARAM_INT);
    $statement->execute();
    $statement->closeCursor(); 
    
}

}
