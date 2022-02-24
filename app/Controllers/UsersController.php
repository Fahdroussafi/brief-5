<?php
class UsersController
{

    public function auth()
    {
        if (isset($_POST['submit'])) {
            $data['username'] = $_POST['username'];
            $data['password'] = $_POST['password'];
            $result = user::Login($data);
            if ($result->username === $_POST['username'] && $result->password === $_POST['password']) {

                $_SESSION['logged'] = true;
                $_SESSION['admin'] = false;
                $_SESSION['username'] = $result->username;
                Redirect::to('reserve');
            } else {

                Session::set('error', 'username or password incorrect');
                Redirect::to('login');
            }
        }
    }
    static public function logout()

    {
        session_destroy();
    }


    public function register()
    {
        if (isset($_POST['submit'])) {
            // $options = [
            //     'cost' => 12
            // ];
            // $password = password_hash( //crypt password
            //     $_POST['password'],
            //     PASSWORD_BCRYPT,
            //     $options
            // );
            $data = array(
                'fullname' => $_POST['fullname'],
                'username' => $_POST['username'],
                'password' => $_POST['password'],
            );
            $result = User::createUser($data);
            if ($result === 'ok') {
                Session::set('success', 'Account Created Successfully');
                Redirect::to('login');
            } else {
                echo $result;
            }
        }
    }
}
