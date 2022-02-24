<?php
class AdminController
{
    public function authAdmin()
    {
        if (isset($_POST['submit'])) {
            $data['username'] = $_POST['username'];
            $data['password'] = $_POST['password'];
            $result = Admin::LoginAdmin($data);
            if ($result->username === $_POST['username'] && $result->password === $_POST['password']) {

                $_SESSION['logged'] = true;
                $_SESSION['admin'] = true;
                $_SESSION['username'] = $result->username;
                Redirect::to('home');
            } else {

                Session::set('error', 'username or password incorrect');
                Redirect::to('loginAdmin');
            }
        }
    }
    static public function logoutAdmin()
    {
        // echo 'logoutAdmin';
        // print_r($_SESSION);
        session_destroy();
    }
}
