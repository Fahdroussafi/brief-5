<?php
// require_once './database/DB.php';
if (!$_SESSION['admin']){
    Redirect::to(BASE_URL);
}

if (isset($_POST['submit'])) {
    $newFlight = new FlightController();
    $newFlight->addFlight();
}
?>

<head>
    <link rel="stylesheet" href="./views/includes/css/styles.css">

</head>


<h1><span class="blue"></span>Add<span class="blue"></span> <span class="yellow">Flight</span>
</h1>
<div class="container">
    <div class="row my-4">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-body bg-light-gray">
                    <a href="<?php echo BASE_URL; ?>home" class="btn btn-sm btn-secondary mr-2 mb-2">
                        <i class="fa fa-home"></i>
                    </a>
                    <form method="post">
                        <div class="form-group mb-4">
                            <label for="origin">Origin*</label>
                            <input type="text" name="origin" class="form-control" placeholder="Origin">
                        </div>
                        <div class="form-group mb-4">
                            <label for="destination">Destination*</label>
                            <input type="text" name="destination" class="form-control" placeholder="Destination">
                        </div>
                        <div class="form-group mb-4">
                            <label for="depart">Depart*</label>
                            <input type="datetime-local" name="depart" class="form-control" placeholder="Depart Time">
                        </div>
                        <div class="form-group mb-4">
                            <label for="returntime">Return Time*</label>
                            <input type="datetime-local" name="returntime" class="form-control" placeholder="Return Time">
                        </div>
                        <div class="form-group mb-4">
                            <label for="price">Price*</label>
                            <input type="text" name="price" class="form-control" placeholder="Price">
                        </div>
                        <div class="form-group mb-4">
                            <label for="nbrSeats">Seats*</label>
                            <input type="text" name="nbrSeats" class="form-control" placeholder="Seats">
                        </div>
                        <!-- <div class="form-group mb-4">
                            <label for="nbrSeatsReserved">Seats Reserved*</label>
                            <input type="text" name="nbrSeatsReserved" class="form-control" placeholder="Seats Reserved">
                        </div> -->

                        <div class="form-group mb-4">
                            <label>Flight Type*</label>
                            <select class="form-control" name="flighttype">
                                <option value="1">One Way</option>
                                <option value="0">Round Trip</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" name="submit">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>