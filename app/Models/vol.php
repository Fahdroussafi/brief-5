<?php
// error_reporting(0);
class Vol
{
    static public function getAll()
    {
        $stmt = DB::connect()->prepare('SELECT * FROM vols WHERE nbrSeats > 0');
        $stmt->execute();   // if the query is executed
        return $stmt->fetchAll();  // returns an array of objects
        // $stmt->close();
        // $stmt = null;
    }

    static public function getAllres($id_user)
    {
        if ($_SESSION['role'] == 1) { // if the user is an admin
            $stmt = DB::connect()->prepare('SELECT  
                booking.id_booking,
                booking.origin,
                booking.destination,
                booking.dep_time,
                users.fullname,
                booking.id_vol,
                booking.flight_type
            FROM 
                booking
            INNER JOIN users ON booking.id_user = users.id;'); // inner join : to get all the data from the two tables
            $stmt->execute();  // if the query is executed
            return $stmt->fetchAll();  // returns an array of objects
        } else {
            $stmt = DB::connect()->prepare('SELECT * FROM booking WHERE id_user=:id_user'); // inner join : to get all the data from the two tables
            $stmt->bindParam(':id_user', $id_user);  // bindParam : binds the value of the parameter to the variable
            $stmt->execute();
            return $stmt->fetchAll();
        }
    }

   
// show passengers of a coresponding vol from table passengers
    static public function getpassengers($data)
    {
        $stmt = DB::connect()->prepare('SELECT * FROM passenger WHERE id_user=:id_user'); // inner join : to get all the data from the two tables
        $stmt->bindParam(':id_user', $data['id']);  // bindParam : binds the value of the parameter to the variable
        $stmt->execute();
        return $stmt->fetchAll();
    }

  
    static public function getVol($data)
    {
        $id = $data['id'];
        try {
            $query = 'SELECT * FROM vols WHERE vol_id=:id'; // prepare the query
            $stmt = DB::connect()->prepare($query); // prepare the query
            $stmt->execute(array(":id" => $id)); // array(":id" => $id) : the key is the same as the value
            $vol = $stmt->fetch(PDO::FETCH_OBJ); // PDO::FETCH_OBJ : returns an object
            return $vol;  // returns the user object
        } catch (PDOException $ex) { // if the query fails
            echo 'error' . $ex->getMessage(); // echo the error message
        }
    }

    static public function add($data)
    {
        $stmt = DB::connect()->prepare('INSERT INTO vols (origin,destination,dep_time,return_time,price,nbrSeats,flighttype) VALUES (:origin,:destination,:dep_time,:return_time,:price,:nbrSeats,:flighttype)');   
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
        $stmt = null;
    }
    static public function update($data)
    {
        $stmt = DB::connect()->prepare('UPDATE vols SET origin =:destination =:destination,dep_time = :dep_time,return_time =:return_time,price = :price,flighttype = :flighttype WHERE id =:id');
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
            $query = 'DELETE FROM vols WHERE vol_id=:id';
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
            $query = 'DELETE FROM booking WHERE booking_id=:booking_id';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":booking_id" => $id));
            if ($stmt->execute()) {
                return 'ok';
            }
        } catch (PDOException $ex) {
            echo 'error' . $ex->getMessage();
        }
    }

    static public function reserve($data)
    {
        $stmt = DB::connect()->prepare('SELECT * FROM vols WHERE vol_id=:id');
        $stmt = DB::connect()->prepare('INSERT INTO booking (id_user, id_vol, flight_type, origin, destination, dep_time) VALUES (:id_user,:id_vol,:flight_type,:origin,:destination,:dep_time)');
        $stmt->bindParam(':id_user', $data['id_user']);
        // $stmt->bindParam(':passenger_id', $data['passenger_id']);
        $stmt->bindParam(':id_vol', $data['id_vol']);
        $stmt->bindParam(':flight_type', $data['flighttype']);
        $stmt->bindParam(':origin', $data['origin']);
        $stmt->bindParam(':destination', $data['destination']);
        $stmt->bindParam(':dep_time', $data['dep_time']);
        if ($stmt->execute()) {
            return 'ok';
        }
    }

    static public function decrease($id)
    {
        $stmt = DB::connect()->prepare('UPDATE vols SET nbrSeats = nbrSeats - 1 WHERE vol_id=:id');
        $stmt->bindParam(':id', $id);
        if ($stmt->execute()) {
            return 'ok';
        }
    }
    static public function addpass($data)
    {
        $stmt = DB::connect()->prepare('INSERT INTO passenger (id_user,vol_id,fullname,birthday) VALUES (:id_user,:vol_id,:fullname,:birthday)');
        $stmt->bindParam(':id_user', $data['id_user']);
        $stmt->bindParam(':vol_id', $data['vol_id']);
        $stmt->bindParam(':fullname', $data['fullname']);
        $stmt->bindParam(':birthday', $data['birthday']);
        if ($stmt->execute()) {
            return 'ok';
        }
    }
}