<?php


if ($_SESSION['role'] == 0) {
    Redirect::to(BASE_URL);
// }

// if (isset($_POST['reserve'])) {
//     $data = new VolsController();
//     $vols = $data->reserveFlight();
// } else {
    $data = new VolsController(); // Instance of the class
    $vols = $data->getAllreservations(); // Call the method
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto"></div>
        <div class="card">
            <div class="card-body bg-light">
                <div>
                    <a href="<?php echo BASE_URL; ?>" class="btn btn btn-secondary mr-2 mb-2">
                        <i class="fas fa-home"></i>
                    </a>
                    <a href="<?php echo BASE_URL; ?>logout" title="Logout" class="btn btn-outline-primary float-end">
                        <i class="fas fa-user"></i> <?php echo $_SESSION['username']; ?> | Logout
                    </a>
                </div>
                <div>
                    <h1><i class="fas fa-paper-plane"></i> All Reservations</h1>
                </div>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col"><i class="fa fa-id-badge"></i> Reservation ID</th>
                            <th scope="col"><i class="fa fa-plane-departure"></i> User ID</th>
                            <th scope="col"><i class="fa fa-map-marked-alt"></i> Flight ID</th>
                            <!-- <th scope="col"><i class="fa fa-clock"></i> Flight type</th> -->
                            <th scope="col"><i class="fa fa-id-card-alt"></i> Origin</th>
                            <th scope="col"><i class="fa fa-passport"></i> Destination</th>
                            <th scope="col"><i class="fa fa-location-arrow"></i> Depart Time</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($vols as $vol) : ?>
                            <tr>
                                <td></td>
                                <td><?php echo $vols['id']; ?></td>
                                <td><?php echo $vols['id_user']; ?></td>
                                <td><?php echo $vols['id_vol']; ?></td>
                                <td><?php echo $vols['flight_type']; ?></td>
                                <td><?php echo $booking['origin']; ?></td>
                                <td><?php echo $booking['destination']; ?></td>
                                <td><?php echo $booking['dep_time']; ?></td>
                                <td>
                                    <?php echo $booking['flight_type'] == "One Way"
                                        ?
                                        '<h5><span class="badge bg-primary"><i class="fa fa-location-arrow"></i> One Way</span></h5>'
                                        :
                                        '<h5><span class="badge bg-secondary"><i class="fa fa-exchange-alt"></i> Round Trip</span></h5>'
                                    ?>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>