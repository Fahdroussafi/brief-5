<?php

// error_reporting(0);

if (isset($_POST['id'])) {
    $existFlight = new FlightController();
    $flight = $existFlight->getOneFlight();
} else {
    Redirect::to('reserve');
}

if (isset($_POST['submit'])) {

    $data = new ReservationController();
    $data->addReservation();
    $pass = new PessengerController();
    $pass->addPassager();
}
?>

<head>
    <link rel="stylesheet" href="./views/includes/css/styles.css">

</head>
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h1>Add Passengers</h1>
                </div>
                <div class="card-body bg-light">
                    <div>
                        <a href="<?php echo BASE_URL; ?>reserve" class="btn btn btn-secondary mr-2 mb-2">
                            <i class="fas fa-home"></i>
                        </a>
                        <a href="<?php echo BASE_URL; ?>logout" title="Logout" class="btn btn-outline-primary float-end">
                            <i class="fas fa-user"></i> <?php echo $_SESSION['username']; ?> | Logout
                        </a>
                    </div>
                    <form id="login-form" class="form" action="" method="post">
                        <div class="form-group" style="display:none">
                            <label for="user_id" class="text-info">id_client:</label><br>
                            <input type="text" name="user_id" id="user_id" value="<?php echo $_SESSION['user_id']; ?>" class="form-control">
                        </div>
                        <div class="form-group" style="display:none">
                            <label for="reservation_id" class="text-info">reservation_id:</label><br>
                            <input type="text" name="reservation_id" id="reservation_id" value="" class="form-control">
                        </div>
                        <div class="form-group mb-4">
                            <label for="first Name">First Name</label>
                            <input type="text" name="first_name" class="form-control" value="<?php echo $_SESSION['first_name']; ?>" placeholder="First Name">
                        </div>
                        <div class="form-group mb-4">
                            <label for="last name">Last Name</label>
                            <input type="text" name="last_name" class="form-control" value="<?php echo $_SESSION['last_name']; ?>" placeholder="Last Name">
                        </div>
                        <div class="form-group" style="display:none">
                            <label for="id" class="text-info">id flight:</label><br>
                            <input type="text" name="id" id="id" value="<?php echo $flight->id; ?>" class="form-control">
                        </div>
                        <div class="form-group mb-4">
                            <label for="birthday">Birthday</label>
                            <input type="date" name="birthday" class="form-control" value="<?php echo $_SESSION['birthday']; ?>" placeholder="Birthday">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" name="submit" value="submit">Add passenger</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




<?php
if (isset($_POST['id'])) {
    $existFlight = new FlightController();
    $flight = $existFlight->getOneFlight();
} else {
    Redirect::to('reserve');
}

if (isset($_POST['submit'])) {

    $data = new ReservationController();
    $data->addReservation();
    $pass = new PessengerController();
    $pass->addPassager();
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h1>Add Passengers</h1>
                </div>
                <div class="card-body bg-light">
                    <div>
                        <a href="<?php echo BASE_URL; ?>" class="btn btn btn-secondary mr-2 mb-2">
                            <i class="fas fa-home"></i>
                        </a>
                        <a href="<?php echo BASE_URL; ?>logout" title="Logout" class="btn btn-outline-primary float-end">
                            <i class="fas fa-user"></i> <?php echo $_SESSION['username']; ?> | Logout
                        </a>
                    </div>
                    <div class="form-group">
                        <label for="fname">Please enter your passenger's Full name</label>
                        <form method="post" id="pass_form">
                            <input type="text" hidden value="<?php echo $_SESSION['id'] ?>" name="user_id">
                            <input type="text" hidden value="<?php echo $_POST['id'] ?>" name="res_id">
                        </form>
                    </div>
                    <div class="form-group">
                        <button form="pass_form" type="submit" class="btn btn-primary mt-3" name="addpass">Add passenger to flight</button>
                        <button type="submit" class="btn btn-primary mt-3" id="pluspass" name="add1pass"><i class="fa fa-plus"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>