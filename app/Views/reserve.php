<?php
if (isset($_POST['find'])) {
    $data = new FlightController();
    $flights = $data->findFlight();
} else {

    $data = new FlightController();
    $flights = $data->getAllFlights();
}
?>


<head>
    <link rel="stylesheet" href="./views/includes/css/styles.css">

</head>

<h1><span class="blue"></span>Flights<span class="blue"></span> <span class="yellow">Available</span>
</h1>
<div class="container">
    <div class="row mt-4">
        <!-- <div class="card">
        <div class="card-body bg-dark"> -->
        <div class="table-responsive">
            <div class="col-md-14 mx-auto">
                <!-- <?php include('./views/includes/alerts.php'); ?>
                <a href="<?php echo BASE_URL; ?>home" class="btn btn-sm btn-secondary mr-2 mb-2">
                    <i class="fa fa-home"></i>
                </a>
                <a href="<?php echo BASE_URL; ?>add" class="btn btn-sm btn-primary mr-2 mb-2">

                    <i class="fa fa-plus"></i> -->


                <a href="<?php echo BASE_URL; ?>logout" title="Logout" class="btn btn-outline-primary float-end">
                    <i class="fas fa-user"></i> <?php echo $_SESSION['username']; ?> | Logout
                </a>
                </h1>
                <form method="post" class="float-end mb-2 d-flex flew-row">
                    <input type="text" class="form-control" placeholder="Search" name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>


                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col"><i class="bi bi-geo-alt"></i> Origin</th>
                            <th scope="col"><i class="bi bi-geo-alt"></i> Destination</th>
                            <th scope="col"><i class="bi bi-clock"></i> Departure Time</th>
                            <th scope="col"><i class="bi bi-arrow-return-left"></i> Return Time</th>
                            <th scope="col"><i class="bi bi-currency-dollar"></i>Price</th>
                            <th scope="col"><i class="fa fa-location-arrow"></i> FlightType</th>
                            <!-- <th scope="col"><i class="fa fa-location-arrow"></i> Return Time</th> -->
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach ($flights as $flight) : ?>
                            <tr>
                                <td scope="col"><?php echo $flight['origin']; ?>
                                <td><?php echo $flight['destination']; ?></td>
                                <td><?php echo $flight['dep_time']; ?></td>
                                <td><?php echo $flight['return_time']; ?></td>
                                <td><?php echo $flight['price']; ?></td>
                                <!-- <td><?= $flight["nbrSeats"] - $flight["nbrSeatsReserved"] ?> / <?= $flight["nbrSeats"] ?></td> -->


                                <td>
                                    <?php echo $flight['flighttype']
                                        ?
                                        '<span class="badge bg-secondary">One Way</span>'
                                        :
                                        '<span class="badge bg-success">Round Trip</span>'; ?></td>

                                <td class="d-flex flex-row">
                                    <form method="post" class="me-2" action="addpassenger">
                                        <input type="hidden" name="id" value="<?php echo $flight['id']; ?>">
                                        <button class="btn btn btn-info">Book</button>
                                    </form>




                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>