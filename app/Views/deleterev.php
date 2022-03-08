<?php 
	if(isset($_POST['iddelete'])){
		$deleteRev = new VolsController();
		$deleteRev->deleteRev();
        Redirect::to("showvols");
	}


?>