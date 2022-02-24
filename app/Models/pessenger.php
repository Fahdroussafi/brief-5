<?php
class Passenger
{


    static public function add($data)
    {
        //$nbr = $_POST['nbr_passager'];
        // $cnt = 1;
        // for ($i = 0; $i < 2; $i++) {

            $stmt = DB::connect()->prepare('INSERT INTO passenger (user_id,reservation_id,first_name,last_name,birthday) VALUES (:user_id,:reservation_id,:first_name,:last_name,:birthday)');
            $stmt->bindParam(':user_id', $data['user_id']);
            $stmt->bindParam(':reservation_id', $data['reservation_id']);
            $stmt->bindParam(':first_name', $data['first_name' ]);
            $stmt->bindParam(':last_name', $data['last_name' ]);
            $stmt->bindParam(':birthday', $data['birthday' ]);

            $stmt->execute();
            // $cnt++;
        // }

        // if ($cnt == $nbr) {
        //     return 'ok';
        // } else {
        //     return 'error';
        // }
        $stmt = null;
    }
}
