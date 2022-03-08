<?php
     if ($_SESSION['role'] == 0) {
        Redirect::to(BASE_URL);
    }
    if(isset($_POST['id'])){
        $existVol= new VolsController();
        $existVol->deleteVol();
    }
