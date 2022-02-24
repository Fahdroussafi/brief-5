<?php
// error_reporting(0);
class Flight
{
    static public function getAll()
    {
        $stmt = DB::connect()->prepare('SELECT * FROM flight');
        $stmt->execute();
        return $stmt->fetchAll();
        // $stmt->close();
        // $stmt->db = null;
        $stmt = null;
    }

    static public function getFlight($data)
    {
        $id = $data['id'];
        try {
            $query = 'SELECT * FROM flight WHERE id = :id';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":id" => $id));
            $flights = $stmt->fetch(PDO::FETCH_OBJ);
            return $flights;
        } catch (PDOException $ex) {
            echo 'Error: ' . $ex->getMessage();
        }
    }

    static public function add($data)
    {
        $stmt = DB::connect()->prepare('INSERT INTO flight
        (origin,destination,dep_time,return_time,price,nbrSeats,flighttype)
        VALUES(:origin,:destination,:dep_time,:return_time,:price,:nbrSeats,:flighttype)');
        $stmt->bindParam(':origin', $data['origin']);
        $stmt->bindParam(':destination', $data['destination']);
        $stmt->bindParam(':dep_time', $data['dep_time']);
        $stmt->bindParam(':return_time', $data['return_time']);
        $stmt->bindParam(':price', $data['price']);
        $stmt->bindParam(':nbrSeats', $data['nbrSeats']);
        // $stmt->bindParam(':nbrSeatsReserved', $data['nbrSeatsReserved']);
        $stmt->bindParam(':flighttype', $data['flighttype']);

        if ($stmt->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
        // $stmt->close();
        // $stmt->db = null;
        $stmt = null;
    }
    static public function update($data)
    {
        $stmt = DB::connect()->prepare('UPDATE flight SET
        origin = :origin ,destination = :destination ,dep_time = :dep_time ,return_time = :return_time,price = :price,nbrSeats = :nbrSeats, flighttype = :flighttype WHERE id = :id');
        $stmt->bindParam(':id', $data['id']);
        $stmt->bindParam(':origin', $data['origin']);
        $stmt->bindParam(':destination', $data['destination']);
        $stmt->bindParam(':dep_time', $data['dep_time']);
        $stmt->bindParam(':return_time', $data['return_time']);
        $stmt->bindParam(':price', $data['price']);
        $stmt->bindParam(':nbrSeats', $data['nbrSeats']);
        // $stmt->bindParam(':nbrSeatsReserved', $data['nbrSeatsReserved']);
        $stmt->bindParam(':flighttype', $data['flighttype']);
        // die(print_r($data));

        if ($stmt->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
        // $stmt->close();
        // $stmt->db = null;
        $stmt = null;
    }
    static public function delete($data)
    {
        $id = $data['id']; {
            try {
                $query = 'DELETE FROM flight WHERE id = :id';
                $stmt = DB::connect()->prepare($query);
                $stmt->execute(array(":id" => $id));
                if ($stmt->execute()) {
                    return 'ok';
                }
            } catch (PDOException $ex) {
                echo 'Error: ' . $ex->getMessage();
            }
        }
    }

    static public function searchFlight($data)
    { {
            $search = $data['search'];
            try {
                $query = 'SELECT * FROM flight WHERE origin LIKE ? OR destination LIKE ?';
                $stmt = DB::connect()->prepare($query);
                $stmt->execute(array('%' . $search . '%', '%' . $search . '%'));
                return $flights = $stmt->fetchAll();
                return $flights;
            } catch (PDOException $ex) {
                echo 'Error: ' . $ex->getMessage();
            }
        }
    }
    // static public function addRes($data){
    //     $stmt=DB::connect()->prepare('INSERT INTO reservation (user_id,flight_id) VALUES (:user_id,:flight_id)');
    //     // $stmt->bindParam(':nbr_passager',$data['nbr_passager']);
    //     $stmt->bindParam(':user_id',$data['user_id']);
    //     $stmt->bindParam(':flight_id',$data['flight_id']);
    //     if($stmt->execute()){
    //      return 'ok';
    //   }else{
    //      return 'error';
    //   }
      
    //   $stmt=null;
  
    //  }
    // static public function reserve($data)
    // {
    //     $stmt = DB::connect()->prepare('SELECT * FROM flight WHERE id=:id');
    //     $stmt = DB::connect()->prepare('INSERT INTO reservation (user_id, flight_id, flight_type, origin, destination, dep_time) VALUES (:user_id,:flight_id,:flight_type,:origin,:destination,:dep_time)');
    //     $stmt->bindParam(':user_id', $data['user_id']);
    //     $stmt->bindParam(':flight_id', $data['flight_id']);
    //     $stmt->bindParam(':flight_type', $data['flighttype']);
    //     $stmt->bindParam(':origin', $data['origin']);
    //     $stmt->bindParam(':destination', $data['destination']);
    //     $stmt->bindParam(':dep_time', $data['dep_time']);
    //     $stmt->execute();

    //     if ($data['flighttype'] === 'Round Trip') {
    //         $stmt = DB::connect()->prepare('INSERT INTO reservation (user_id, flight_id, flight_type, origin, destination, dep_time) VALUES (:user_id,:flight_id,:flight_type,:origin,:destination,:dep_time)');
    //         $stmt->bindParam(':user_id', $data['user_id']);
    //         $stmt->bindParam(':flight_id', $data['flight_id']);
    //         $stmt->bindParam(':flight_type', $data['flighttype']);
    //         $stmt->bindParam(':origin', $data['destination']);
    //         $stmt->bindParam(':destination', $data['origin']);
    //         $stmt->bindParam(':dep_time', $data['return_time']);
    //         $stmt->execute();
    //     }
    // }
    // static public function getAllres($user_id)
    // {
    //     if ($_SESSION['role'] == 1) {
    //         $stmt = DB::connect()->prepare('SELECT
    //             reservation.id,
    //             reservation.origin,
    //             reservation.destination,
    //             reservation.dep_time,
    //             users.fname,
    //             reservation.flight_id,
    //             reservation.flight_type
    //         FROM
    //             reservation
    //         INNER JOIN users ON reservation.user_id = users.id;');
    //         $stmt->execute();
    //         return $stmt->fetchAll();
    //     } else {
    //         $stmt = DB::connect()->prepare('SELECT * FROM reservation WHERE user_id=:user_id');
    //         $stmt->bindParam(':user_id', $user_id);
    //         $stmt->execute();
    //         return $stmt->fetchAll();
    //     }
    // }
    
    static public function addpass ($data){
        $stmt=DB::connect()->prepare('INSERT INTO reservation (id,user_id,reservation_id,first_name, last_name,birthday) VALUES (:id,:user_id,:reservation_id,:first_name,:last_name,:birthday)');
        $stmt->bindParam(':id',$data['id']);
        $stmt->bindParam(':user_id',$data['user_id']);
        $stmt->bindParam(':reservation_id',$data['reservation_id']);
        $stmt->bindParam(':first_name',$data['first_name']);
        $stmt->bindParam(':last_name',$data['last_name']);
        $stmt->bindParam(':birthday',$data['birthday']);
        if($stmt->execute()){
         return 'ok';
      }else{
         return 'error';
      }
      
      $stmt=null;
  
     }
    // static public function addpass($data)
    // {
    //     for ($i = 0; $i < count($data['fullname']); $i++) {
    //         $stmt = DB::connect()->prepare('INSERT INTO passenger (user_id, reservation_id, firstname, lastname,birthday) VALUES (:user_id,:reservation_id,:firstname,:lastname,:birthday)');
    //         $stmt->bindParam(':user_id', $data['user_id']);
    //         $stmt->bindParam(':reservation_id', $data['reservation_id']);
    //         $stmt->bindParam(':firstname', $data['firstname'][$i]);
    //         $stmt->bindParam(':lastname', $data['lastname']);
    //         $stmt->bindParam(':birthday', $data['birthday']);
    //         $stmt->execute();
    //     }
    // }
    static public function getRes() {

        $stmt = DB::connect()->prepare('SELECT * from reservation,user,flight where reservation.user_id=user.user_id and reservation.id=flight.id and user.user_id='.$_SESSION['user_id']);
        $stmt->execute();                                            
        return $stmt->fetchAll();
        $stmt->null;

     }
     static public function searchReservation ($data){

        $search=$data['search'];
        /*die (print_r($data));*/
        try{
           $query='SELECT distinct * from reservation,user,flight where  reservation.user_id=user.user_id and reservation.flight_id=flight.id and origin like ?  OR destination like ?  OR fullname like ? ';
           $stmt=DB::connect()->prepare($query);
           $stmt->execute((array('%'.$search.'%', '%'.$search.'%', '%'.$search.'%', '%'.$search.'%')));
           $reservation=$stmt->fetchAll();
           return $reservation;
  
       }
       catch(PDOException $ex)
       {
        echo 'erreur'.$ex->getMessage();
       }
  
     }

}
