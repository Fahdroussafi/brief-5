<?php

class Reservation
{

  static public function add($data)
  {
    //stmt = DB::connect()->prepare('SELECT * FROM flight WHERE id=:id');
    $stmt = DB::connect()->prepare('INSERT INTO reservation (user_id, flight_id) VALUES (:user_id,:flight_id)');
    $stmt->bindParam(':user_id', $data['user_id']);
    $stmt->bindParam(':flight_id', $data['flight_id']);
    /*$stmt->bindParam(':flight_type', $data['flighttype']);
        $stmt->bindParam(':origin', $data['origin']);
        $stmt->bindParam(':destination', $data['destination']);
        $stmt->bindParam(':dep_time', $data['dep_time']);*/
    if ($stmt->execute()) {
      return 'ok';
    }
    return 'No';

    //   if ($data['flighttype'] === 'Round Trip') {
    //       $stmt = DB::connect()->prepare('INSERT INTO reservation (user_id, flight_id, flight_type, origin, destination, dep_time) VALUES (:user_id,:flight_id,:flight_type,:origin,:destination,:dep_time)');
    //       $stmt->bindParam(':user_id', $data['user_id']);
    //       $stmt->bindParam(':flight_id', $data['flight_id']);
    //       $stmt->bindParam(':flight_type', $data['flighttype']);
    //       $stmt->bindParam(':origin', $data['destination']);
    //       $stmt->bindParam(':destination', $data['origin']);
    //       $stmt->bindParam(':dep_time', $data['ret_time']);
    //       $stmt->execute();
    //   }
  }
}
