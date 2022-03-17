<?php
if (isset($_POST['find'])) {
    $data = new VolsController();
    $vols = $data->findVols();
} else {
    $data = new VolsController();
    $vols = $data->getAllVols();
}

if (isset($_POST['reserve'])) {
    $data = new VolsController();
    $flights = $data->reserveFlight();
}
$data = new VolsController();
$flights = $data->getAllVols();

?>

<head>
    <link rel="stylesheet" href="./views/includes/css/styles.css">

</head>
<link rel="stylesheet" href="./views/assets/css/style.css">
<link rel="stylesheet" href="./views/assets/css/navbar.css">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo BASE_URL ?>">
            <img src="./views/assets/images/whitelogo.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form method="post" class="me-3">
                <div class="form-white input-group" style="width: 250px;">
                    <input type="text" name="search" class="form-control rounded" placeholder="Search or jump to... ( / )" aria-label="Search" aria-describedby="search-addon" />
                    <button class="btn btn-info btn-sm" name="find" type="submit"><i class="fa fa-search"></i></button>
                </div>
            </form>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL; ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL ?>showvols">Flight Reserved</a>
                </li>
            </ul>
            <ul class="navbar-nav d-flex flex-row ms-auto me-3">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL ?>"><?php echo $_SESSION['username']; ?></a>
                </li>
                <li class="nav-item me-3 me-lg-0 dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="./views/assets/images/pt3.png" class="rounded-circle" height="22" alt="" loading="lazy" />
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown1">
                        <li><a class="dropdown-item" href="<?php echo BASE_URL ?>logout">LogOut</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>







<div class="container mt-5">
    <h1><span class="blue"></span>Booking<span class="blue"></span> <span class="yellow">Management</span>
    </h1>
    <div class="row mt-4">
        <!-- <div class="card">
        <div class="card-body bg-dark"> -->
        <div class="table-responsive">
            <div class="col-md-14 mx-auto">
                <?php include('./views/includes/alerts.php'); ?>
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
                                Arrival Time
                            </th>
                            <th scope="col">
                                Price
                            </th>
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
                                <td>
                                    <?php echo $vols['flighttype']
                                        ?
                                        '<span class="badge bg-secondary">One Way</span>'
                                        :
                                        '<span class="badge bg-success">Round Trip</span>'; ?></td>

                                <td class="d-flex flex-row justify-content-evenly">
                                    <form method="POST" action="" class="mr-3">
                                        <input type="text" hidden name="id" value="<?php echo $vols['id']; ?>">
                                        <input type="text" hidden name="origin" value="<?php echo $vols['origin']; ?>">
                                        <input type="text" hidden name="destination" value="<?php echo $vols['destination']; ?>">
                                        <input type="text" hidden name="dep_time" value="<?php echo $vols['dep_time']; ?>">
                                        <input type="text" hidden name="return_time" value="<?php echo $vols['return_time']; ?>">
                                        <input type="text" hidden name="flighttype" value="<?php echo $vols['flighttype']; ?>">
                                        <button class="btn btn-sm btn-success" type="submit" name="reserve">Book</button>
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



<script src="./views/assets/js/jquery-3.3.1.min.js"></script>
<script src="./views/assets/js/main.js"></script>