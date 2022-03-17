<?php
// error_reporting(0);
class Vol
{
    static public function getAll()
    {
        $stmt = DB::connect()->prepare('SELECT * FROM vols');
        $stmt->execute();
        return $stmt->fetchAll();
        // $stmt->close();
        // $stmt = null;
    }

    // static public function getAllres($id_user)
    // {
    //     if ($_SESSION['role'] == 1) {
    //         $stmt = DB::connect()->prepare('SELECT
    //             booking.id,
    //             booking.origin,
    //             booking.destination,
    //             booking.dep_time,
    //             users.fullname,
    //             booking.id_vol,
    //             booking.flight_type
    //         FROM
    //             booking
    //         INNER JOIN users ON booking.id_user = users.id;');
    //         $stmt->execute();
    //         return $stmt->fetchAll();
    //     } else {
    //         $stmt = DB::connect()->prepare('SELECT * FROM booking WHERE id_user=:id_user');
    //         $stmt->bindParam(':id_user', $id_user);
    //         $stmt->execute();
    //         return $stmt->fetchAll();
    //     }
    // }
    static public function getVol($data)
    {
        $id = $data['id'];
        try {
            $query = 'SELECT * FROM vols WHERE id=:id';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":id" => $id));
            $vol = $stmt->fetch(PDO::FETCH_OBJ);
            return $vol;
        } catch (PDOException $ex) {
            echo 'error' . $ex->getMessage();
        }
    }

    static public function add($data)
    {
        $stmt = DB::connect()->prepare('INSERT INTO vols (origin,destination,dep_time,return_time,price,nbrSeats,nbrSeatsReserved,flighttype) VALUES (:origin,:destination,:dep_time,:return_time,:price,:nbrSeats,:nbrSeatsReserved,:flighttype)');
        $stmt->bindParam(':origin', $data['origin']);
        $stmt->bindParam(':destination', $data['destination']);
        $stmt->bindParam(':dep_time', $data['dep_time']);
        $stmt->bindParam(':return_time', $data['return_time']);
        $stmt->bindParam(':price', $data['price']);
        $stmt->bindParam(':nbrSeats', $data['nbrSeats']);
        $stmt->bindParam(':nbrSeatsReserved', $data['nbrSeatsReserved']);
        $stmt->bindParam(':flighttype', $data['flighttype']);

        if ($stmt->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
        // $stmt->close();
        $stmt = null;
    }
    static public function update($data)
    {
        $stmt = DB::connect()->prepare('UPDATE vols SET origin =:origin,destination =:destination,dep_time = :dep_time,return_time =:return_time,price = :price,flighttype = :flighttype WHERE id =:id');
        $stmt->bindParam(':id', $data['id']);
        $stmt->bindParam(':origin', $data['origin']);
        $stmt->bindParam(':destination', $data['destination']);
        $stmt->bindParam(':dep_time', $data['dep_time']);
        $stmt->bindParam(':return_time', $data['return_time']);
        $stmt->bindParam(':price', $data['price']);
        // $stmt->bindParam(':seats',$data['seats']);
        $stmt->bindParam(':flighttype', $data['flighttype']);

        if ($stmt->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
        // $stmt->close();
        $stmt = null;
    }
    static public function delete($data)
    {
        $id = $data['id'];
        try {
            $query = 'DELETE FROM vols WHERE id=:id';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":id" => $id));
            if ($stmt->execute()) {
                return 'ok';
            }
        } catch (PDOException $ex) {
            echo 'error' . $ex->getMessage();
        }
    }
    static public function searchVol($data)
    {
        $search = $data['search'];
        try {
            $query = 'SELECT * FROM vols WHERE origin LIKE ? OR destination LIKE ?';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array('%' . $search . '%', '%' . $search . '%'));
            $vols = $stmt->fetchAll();
            return $vols;
        } catch (PDOException $ex) {
            echo 'error' . $ex->getMessage();
        }
    }
    static public function deleteRev($data)
    {
        $id = $data['id'];
        try {
            $query = 'DELETE FROM booking WHERE id=:id';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":id" => $id));
            if ($stmt->execute()) {
                return 'ok';
            }
        } catch (PDOException $ex) {
            echo 'error' . $ex->getMessage();
        }
    }

    static public function reserve($data)
    {
        $stmt = DB::connect()->prepare('SELECT * FROM vols WHERE id=:id');        
        // $stmt= DB::connect()->prepare('SELECT COUNT (*) FROM booking WHERE id=:id');  
        // $stmt= DB::connect()->prepare('SELECT COUNT (nbrSeats) FROM booking WHERE nbrSeats=:nbrSeats');  

        $stmt = DB::connect()->prepare('INSERT INTO booking (id_user, id_vol, flight_type, origin, destination, dep_time) VALUES (:id_user,:id_vol,:flight_type,:origin,:destination,:dep_time)');
        $stmt->bindParam(':id_user', $data['id_user']);
        $stmt->bindParam(':id_vol', $data['id_vol']);
        $stmt->bindParam(':flight_type', $data['flighttype']);
        $stmt->bindParam(':origin', $data['origin']);
        $stmt->bindParam(':destination', $data['destination']);
        $stmt->bindParam(':dep_time', $data['dep_time']);
        if ($stmt->execute()) {
            return 'ok';
        }
    }
    static public function addpass($data)
    {
        $stmt = DB::connect()->prepare('INSERT INTO passenger (user_id, fullname,birthday) VALUES (:user_id,:fullname,:birthday)');
        $stmt->bindParam(':user_id', $data['user_id']);
        // $stmt->bindParam(':reservation_id', $data['reservation_id']);
        $stmt->bindParam(':fullname', $data['fullname']);
        $stmt->bindParam(':birthday', $data['birthday']);
        if ($stmt->execute()) {
            return 'ok';
        }
    }
}
