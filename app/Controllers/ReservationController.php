<?php

class ReservationController
{
    public function addReservation()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'user_id' => 13,
                'flight_id' => $_POST['id'],
                /*'flight_type' => $_POST['flight_type'],
                'origin' => $_POST['origin'],
                'destination' => $_POST['destination'],
                'dep_time' => $_POST['dep_time'],*/
                // 'ret_time' => $_POST['return_time'],

            );
            $result = Reservation::add($data);
            if ($result === 'ok') {
                Session::set('success', 'Flight reserved');
                Redirect::to('reserve');
            } else {
                echo $result;
            }
        }
    }

    // public function getALLReservation()
    // {
    //     $reservation = Reservation::getAll();
    //     return $reservation;
    // }

    // public function getReservation()
    // {
    //     $reservation = Reservation::getRes();
    //     return $reservation;
    // }


    // public function findReservation()
    // {

    //     if (isset($_POST['search'])) {
    //         $data = array('search' => $_POST['search']);
    //     }
    //     $reservation = Reservation::searchReservation($data);
    //     return $reservation;
    // }


    // public function getOneReservation()
    // {
    //     if (isset($_POST['id_reservation'])) {
    //         $data = array('id_reservation' => $_POST['id_reservation']);
    //     }
    //     $reservation = Reservation::getReservation($data);
    //     return $reservation;
    // }
}
