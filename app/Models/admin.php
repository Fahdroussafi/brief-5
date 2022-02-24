<?php
class Admin
{
    static public function LoginAdmin($data)
    {
        $username = $data['username'];
        $password = $data['password'];
        try {
            $query = 'SELECT * FROM admin WHERE username=:username AND password=:password';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":username" => $username, ":password" => $password));
            $Admin = $stmt->fetch(PDO::FETCH_OBJ);
            return $Admin;
        } catch (PDOException $ex) {
            echo 'erreur' . $ex->getMessage();
        }
    }
    
    public function auth($role = null)
    {
        if (!isset($_SESSION['logged']) || !$_SESSION['logged']) {
            header('location: login.php');
            exit;
        }

        if ($role && $_SESSION['role'] != $role) {
            header('location: home.php');
            exit;
        }
    }
}
