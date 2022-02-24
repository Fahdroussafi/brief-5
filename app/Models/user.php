<?php
class User
{

    static public function createUser($data)
    {
        $stmt = DB::connect()->prepare('INSERT INTO user
        (fullname,username,password)
        VALUES(:fullname,:username,:password)');
        $stmt->bindParam(':fullname', $data['fullname']);
        $stmt->bindParam(':username', $data['username']);
        $stmt->bindParam(':password', $data['password']);

        if ($stmt->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
        // $stmt->close();
        // $stmt->db = null;
        $stmt = null;
    }

    static public function Login($data)
    {
        $username = $data['username'];
        $password = $data['password'];
        try {
            $query = 'SELECT * FROM user WHERE username=:username AND password=:password';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":username" => $username, ":password" => $password));
            $User = $stmt->fetch(PDO::FETCH_OBJ);
            return $User;
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }
}
