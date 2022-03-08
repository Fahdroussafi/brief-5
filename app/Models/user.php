<?php

class User{
    
    static public function login($data){
        $username = $data['username'];
        try{
            $query = 'SELECT * FROM users WHERE username=:username';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":username" => $username));
            $user = $stmt->fetch(PDO::FETCH_OBJ);
            return $user;
            if($stmt->execute()){
                return 'ok';
            }
        }catch(PDOException $ex){
            echo 'error'.$ex->getMessage();
        }
    }
    static public function createUser($data){
        try{
        $stmt = DB::connect()->prepare('INSERT INTO users (fullname,username,password) VALUES (:fullname,:username,:password)');
        $stmt->bindParam(':fullname',$data['fullname']);
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
}
