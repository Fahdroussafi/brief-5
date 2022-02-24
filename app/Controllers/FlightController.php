<?php
class FlightController
{
    public function getAllFlights() // displays all flight
    {
        $flights = Flight::getAll();
        return $flights;
    }

    public function getOneFlight() // returns one flight for update flight form
    {
        if (isset($_POST['id'])) {
            $data = array(
                'id' => $_POST['id']
            );
            $flight = Flight::getFlight($data);
            return $flight;
        }
    }

    public function findFlight()
    {
        if (isset($_POST['search'])) {
            $data = array('search' => $_POST['search']);
        }
        $flights = flight::searchFlight($data);
        return $flights;
    }


    public function addFlight()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'origin' => $_POST['origin'],
                'destination' => $_POST['destination'],
                'dep_time' => $_POST['depart'],
                'return_time' => $_POST['returntime'],
                'price' => $_POST['price'],
                'nbrSeats' => $_POST['nbrSeats'],
                // 'nbrSeatsReserved' => $_POST['nbrSeatsReserved'],
                'flighttype' => $_POST['flighttype'],

            );
            $result = flight::add($data);
            if ($result === 'ok') {
                Session::set('success', 'Flight added');
                Redirect::to('home');
            } else {
                echo $result;
            }
        }
    }
    public function updateFlight()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'id' => $_POST['id'],
                'origin' => $_POST['origin'],
                'destination' => $_POST['destination'],
                'dep_time' => $_POST['depart'],
                'return_time' => $_POST['returntime'],
                'price' => $_POST['price'],
                'nbrSeats' => $_POST['nbrSeats'],
                // 'nbrSeatsReserved' => $_POST['nbrSeatsReserved'],
                'flighttype' => $_POST['flighttype'],

            );
            $result = flight::update($data);
            if ($result === 'ok') {
                Session::set('success', 'Flight updated');
                Redirect::to('home');
            } else {
                echo $result;
            }
        }
    }

    public function deleteFlight()
    {
        if (isset($_POST['id'])) {
            $data['id'] = $_POST['id'];
            $result = Flight::delete($data);
            if ($result === 'ok') {
                session::set('success', 'Flight deleted');
                Redirect::to('home');
            } else {
                echo $result;
            }
        }
    }

}
