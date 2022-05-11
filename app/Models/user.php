<?php

class User{
    
    static public function login($data){
        $username = $data['username'];
        try{
            $query = 'SELECT * FROM users WHERE username=:username';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":username" => $username)); // array(":username" => $username) : the key is the same as the value
            $user = $stmt->fetch(PDO::FETCH_OBJ); // PDO::FETCH_OBJ : returns an object
            return $user;   // returns the user object
            if($stmt->execute()){   // if the query is executed
                return 'ok';
            }
        }catch(PDOException $ex){ // if the query fails 
            echo 'error'.$ex->getMessage();   // echo the error message
        }
    }
    static public function createUser($data){
        try{
        $stmt = DB::connect()->prepare('INSERT INTO users (fullname,username,password) VALUES (:fullname,:username,:password)');
        $stmt->bindParam(':fullname',$data['fullname']); // bindParam : binds the value of the parameter to the variable
        $stmt->bindParam(':username',$data['username']);
        $stmt->bindParam(':password',$data['password']);
        if($stmt->execute()){
            return 'ok';
        }
        }catch(PDOException $ex){
            return '<div style="background-color : #ff3851;"><h4 style="color:red;">Username Already Exist Choose an other One </h4></div>';
        }

        $stmt = null;
    }

    static public function searchPessenger($data)
    {
        $search = $data['search'];
        try {
            $query = 'SELECT * FROM passenger WHERE fullname LIKE ?';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array('%' . $search . '%'));
            $pessengers = $stmt->fetchAll();
            return $pessengers;
        } catch (PDOException $ex) {
            echo 'error' . $ex->getMessage();
        }
    }
}
