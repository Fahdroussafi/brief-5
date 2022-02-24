<?php
if (!$_SESSION['admin']) {
    Redirect::to(BASE_URL);
}

if (isset($_POST['id'])) {
    $existFlight = new FlightController();
    $flight = $existFlight->getOneFlight();
} else {
    Redirect::to('home');
}
if (isset($_POST['submit'])) {
    $existFlight = new FlightController();
    $flight = $existFlight->updateFlight();
}
?>

<head>
    <link rel="stylesheet" href="./views/includes/css/styles.css">

</head>
<h1><span class="blue"></span>Update<span class="blue"></span> <span class="yellow">Flight</span>
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
                        <input type="hidden" name="id" value="<?php echo $flight->id; ?>">

                        <div class="form-group mb-4">
                            <label for="origin">Origin*</label>
                            <input type="text" name="origin" class="form-control" placeholder="Origin" value="<?php echo $flight->origin; ?>">
                            <div class="form-group mb-4">
                                <label for="destination">Destination*</label>
                                <input type="text" name="destination" class="form-control" placeholder="Destination" value=" <?php echo $flight->destination; ?>">

                            </div>
                            <div class="form-group mb-4">
                                <label for="depart">Departure Time*</label>
                                <input type="datetime-local" name="depart" class="form-control" placeholder="Depart Time" value=" <?php echo $flight->dep_time; ?>">
                            </div>
                            <div class="form-group mb-4">
                                <label for="returntime">Return Time*</label>
                                <input type="datetime-local" name="returntime" class="form-control" placeholder="Return Time" value="<?php echo $flight->return_time; ?>">
                            </div>
                            <div class="form-group mb-4">
                                <label for="price">Price*</label>
                                <input type="text" name="price" class="form-control" placeholder="price" value=" <?php echo $flight->price; ?>">

                            </div>
                            <div class="form-group mb-4">
                                <label for="nbrSeats">Seats*</label>
                                <input type="text" name="nbrSeats" class="form-control" placeholder="Seats" value="<?php echo $flight->nbrSeats; ?>">
                            </div>
                            <!-- <div class="form-group mb-4">
                                <label for="nbrSeatsReserved">Seats Remaining*</label>
                                <input type="text" name="nbrSeatsReserved" class="form-control" placeholder="Seats Reserved" value="<?php echo $flight->nbrSeatsReserved; ?>">
                            </div> -->

                            <div class="form-group mb-4">
                                <label>Flight Type*</label>
                                <select class="form-control" name="flighttype">
                                    <option value="1" <?php echo $flight->flighttype ? 'selected' : '' ?>>One Way</option>
                                    <option value="0" <?php echo !$flight->flighttype ? 'selected' : '' ?>>Round Trip</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" name="submit">Update</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>