<?php
  
if ($_SESSION['role'] == 0) {
    Redirect::to(BASE_URL);
}
if(isset($_POST['id'])){ // if the form was submitted
    $existVol= new VolsController();
    $existVol->deleteVol();
}

if (isset($_POST['search'])) { // If the search button is clicked
    $data = new VolsController();
    $vols = $data->findVols();
} else {
    $data = new VolsController();
    $vols = $data->getAllVols();
}

// // print_r($flights);
?>

<head>
    <link rel="stylesheet" href="./views/includes/css/styles.css">

</head>

<h1><span class="blue"></span>Admin<span class="blue"></span> <span class="yellow">Space</span>
</h1>
<div class="container mt-5">
    <div class="row mt-4">
        <!-- <div class="card">
        <div class="card-body bg-dark"> -->
        <div class="table-responsive">
            <div class="col-md-14 mx-auto">
                <?php include('./views/includes/alerts.php'); ?>
                <a href="<?php echo BASE_URL; ?>homeadmin" class="btn btn-sm btn-secondary mr-2 mb-2">
                    <i class="fa fa-home"></i>
                </a>
                <a href="<?php echo BASE_URL; ?>add" class="btn btn-sm btn-primary mr-2 mb-2">

                    <i class="fa fa-plus"></i>


                    <a href="<?php echo BASE_URL; ?>login" title="Déconnexion" class="btn btn-link mr-2 mb-2">
                        <i class="fas fa-user mr-2"> <?php echo "Logout"; ?></i>
                    </a>
                    <form method="post" class="float-end mb-2 d-flex flew-row">
                        <input type="text" class="form-control" placeholder="Search" name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>


                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">
                                    Origin
                                </th>
                                <th scope="col">
                                    Destination
                                </th>
                                <th scope="col">
                                    Depart Time
                                </th>
                                <th scope="col">
                                    Return Time
                                </th>
                                <th scope="col">
                                    Price
                                </th>
                                <th scope="col">
                                    Seats Available
                                </th>
                                <!-- <th scope="col">
                                    Seats Reserved
                                </th> -->
                                <th scope="col">
                                    FlightType
                                </th>

                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($vols as $vols) : ?>
                                <tr>
                                    <td scope="col"><?php echo $vols['origin']; ?>
                                    <td><?php echo $vols['destination']; ?></td>
                                    <td><?php echo $vols['dep_time']; ?></td>
                                    <td><?php echo $vols['return_time']; ?></td>
                                    <td><?php echo $vols['price']; ?></td>
                                    <td><?= $vols["nbrSeats"]; ?></td>
                                    <!-- <td><?php echo $vols['nbrSeatsReserved']; ?></td> -->

                                    <td>
                                        <?php echo $vols['flighttype']
                                            ?
                                            '<span class="badge bg-secondary">One Way</span>'
                                            :
                                            '<span class="badge bg-success">Round Trip</span>'; ?>
                                    </td>


                                    <td class="d-flex flex-row justify-content-evenly">
                                        <form method="post" class="mr-1" action="update">
                                            <input type="hidden" name="id" value="<?php echo $vols['vol_id']; ?>">
                                            <button class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></button>
                                        </form>
                                        <form method="post" class="mr-1" action="homeadmin">
                                            <input type="hidden" name="id" value="<?php echo $vols['vol_id']; ?>">
                                            <button class="btn btn-sm btn-danger"><i class="fa p-auto fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>

                            <?php endforeach; ?>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>