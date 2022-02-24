<?php

class PessengerController
{

    public function addPassager()
    {
        if (isset($_POST['submit'])) {
            //$nbr = $_POST['nbr_passager'];
            // $data = [];
            // for ($i = 0; $i < 2; $i++)
             {
                $data['user_id'] = $_POST['user_id'];
                $data['reservation_id' ] = $_POST['reservation_id']
                $data['first_name'] = $_POST['first_name'];
                $data['last_name' ] = $_POST['last_name'];
                $data['birthday' ] = $_POST['birthday' ];
                // $data['client'.$i] = $_POST['client'.$i];
            }


            $result = Passenger::add($data);


            if ($result === 'ok') {
                session::set('success', 'passager Ajouté avec success');
                Redirect::to('reserve');
            } else {
                echo $result;
            }
        }
    }
}
