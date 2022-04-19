<?php

class VolsController
{
    public function getAllVols()
    {
        $vols = Vol::getAll();
        return $vols;
    }

    public function getAllreservations()
    {
        $vols = Vol::getAllres($_SESSION['id']); // Sessions store user information to be used across multiple pages Session variables last until the user closes the browser.
        return $vols;
    }
    public function getOneVol()
    {
        if (isset($_POST['id'])) {
            $data = array('id' => $_POST['id']); // $_POST['id'] is the id of the vol
            $vol = Vol::getVol($data); // $ gains access to method getVol and vol class
            return $vol;
        }
    }
    public function findVols()
    {
        if (isset($_POST['search'])) {
            $data = array('search' => $_POST['search']); // $_POST['search'] is the value of the search input
        }
        $vols = Vol::searchVol($data);
        return $vols;
    }

    // get pessengers corresponding to a vol
    public function getpassengers()
    {
        if (isset($_POST['id'])) {
            $data = array('id' => $_POST['id']); // $_POST['id'] is the id of the vol
            $passengers = Vol::getpassengers($data); // $ gains access to method getpassengers and vol class
            return $passengers;
        }
    }
    
    public function addVol()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'origin' => $_POST['origin'], // => origin will have the corresponding value of post origin
                'destination' => $_POST['destination'],
                'dep_time' => $_POST['dep_time'],
                'return_time' => $_POST['return_time'],
                'price' => $_POST['price'],
                'nbrSeats' => $_POST['nbrSeats'],
                // 'nbrSeatsReserved' => $_POST['nbrSeatsReserved'],
                'flighttype' => $_POST['flighttype'],
            );
            $result = Vol::add($data);
            if ($result === 'ok') {
                Session::set('success', 'Flight Added');
                Redirect::to('homeadmin');
            } else {
                echo $result;
            }
        }
    }
    public function updateVol()
    {
        if (isset($_POST['submit'])) { 
            $data = array(
                'id' => $_POST['id'],
                'origin' => $_POST['origin'],
                'destination' => $_POST['destination'],
                'dep_time' => $_POST['dep_time'],
                'return_time' => $_POST['return_time'],
                'price' => $_POST['price'],
                // 'seats' => $_POST['seats'],
                'flighttype' => $_POST['flighttype'],
            );
            $result = Vol::update($data);
            if ($result === 'ok') {
                Session::set('success', 'Flight Modified');
                Redirect::to('homeadmin');
            } else {
                echo $result;
            }
        }
    }
    public function deleteVol()
    {
        if (isset($_POST['id'])) {
            $data['id'] = $_POST['id']; // $_POST['id'] is the id of the vol
            $result = Vol::delete($data);
            if ($result === 'ok') {
                Session::set('success', 'Flight Deleted');
                Redirect::to('homeadmin');
            } else {
                echo $result;
            }
        }
    }
    public function deleteRev()
    {
        if (isset($_POST['iddelete'])) {
            $data['id'] = $_POST['iddelete'];
            $result = Vol::deleteRev($data);
            if ($result === 'ok') {
                Session::set('success', 'Reservation Deleted');
                Redirect::to('showvols');
            } else {
                echo $result;
            }
        }
    }
    public function reserveFlight()
    {
        if (isset($_POST['reserve'])) {
            $data = array(
                'id_user' => $_SESSION['id'],
                'id_vol' => $_POST['id'],
                // 'passenger_id' => $_POST['passenger_id'],
                'destination' => $_POST['destination'],
                'origin' => $_POST['origin'],
                'dep_time' => $_POST['dep_time'],
                'flighttype' => $_POST['flighttype'],
            );

            $result = Vol::reserve($data);
            if ($result === 'ok') {
                Vol::decrease($data['id_vol']);
                Session::set('success', 'Flight reserved');
                Redirect::to('homeuser');
            } else {
                echo $result;
            }
        }
    }

    public function addPassenger()
    {
        if (isset($_POST['addpass'])) {
            $data = array(
                'id_user' => $_SESSION['id'],
                'vol_id' => $_POST['vol_id'],
                'fullname' => $_POST['fullname'],
                'birthday' => $_POST['birthday'],
            );
       
            $result = Vol::addpass($data);
            if ($result === 'ok') {
                Session::set('success', 'Passenger added');
                Redirect::to('showvols');
            } else {
                echo $result;
            }
        }
    }
}
