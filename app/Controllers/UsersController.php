<?php

class UsersController
{
    public function auth() 
    {
        if (isset($_POST['submit'])) {
            $data['username'] = $_POST['username'];
            $result = User::login($data); // $ gains access to method login and user class
            if ($result->username === $_POST['username'] && password_verify($_POST['password'], $result->password))
            //set -> property username to object result
            // $_POST['password'] is the password entered by user
            {
                $_SESSION['login'] = true; // set session login to true
                $_SESSION['username'] = $result->username; // set -> property username to object result
                $_SESSION['role'] = $result->role; // set -> property role to object result
                $_SESSION['id'] = $result->id;
                if ($result->role == 0) { // == : compares the value of the variables to return true
                    Redirect::to('homeuser');
                } else {
                    Redirect::to('homeadmin');
                }
            } else {
                Session::set('error', 'Username or Password incorrect');
                Redirect::to('login');
            }
        }
    }
    public function register()
    {
        if (isset($_POST['submit'])) {  // isset : checks if the variable is set
            $options = [    // array : stores the options for the password hashing
                'cost' => 12
            ];
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT, $options);
            $data = array(
                'fullname' => $_POST['fullname'], // => fullname will have the corresponding value of post fullname
                'username' => $_POST['username'], // => username will have the corresponding value of post username
                'password' => $password, // => password will have the corresponding value of post password
                'role' => 0
            );
            $result = User::createUser($data); // $ gains access to method createUser and user class
            if ($result === 'ok') {
                Session::set('success', 'Account Created'); // => set the session success to the message
                Redirect::to('login'); // => redirect to login
            } else {
                echo $result;
            }
        }
    }
    public function findPessenger()
    {
        if (isset($_POST['search'])) {
            $data = array('search' => $_POST['search']); // $_POST['search'] is the value of the search input
        }
        $pessengers = User::searchPessenger($data);
        return $pessengers;
    }
    static public function logout()
    {
        session_destroy();
    }
}
