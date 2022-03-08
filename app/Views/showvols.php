<?php


if ($_SESSION['role'] == 1) {
    Redirect::to(BASE_URL);
}

if (isset($_POST['reserve'])) {
    $data = new VolsController();
    $vols = $data->reserveFlight();
} else {
    $data = new VolsController();
    $vols = $data->getAllreservations();
}
?>

<link rel="stylesheet" href="./views/assets/css/style.css">
<link rel="stylesheet" href="./views/assets/css/navbar.css">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo BASE_URL ?>">
            <img src="./views/assets/images/whitelogo.png" alt="">
            <!-- <i class="fab fa-github fa-2x mx-3 ps-1"></i> -->
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
                    <a class="nav-link" href="<?php echo BASE_URL ?>logout"><?php echo $_SESSION['username']; ?></a>
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
<!-- Navbar -->
<div class="content">
    <div class="container">
        <h1 class="mb-5 d-flex justify-content-center">FLIGHTS RESERVED</h1>
        <div class="table-responsive">
            <?php include('./views/includes/alerts.php'); ?>
            <table class="table table-striped custom-table">
                <thead>
                    <tr>
                        <th scope="col">Origin</th>
                        <th scope="col">Destination</th>
                        <th scope="col">Departure Time</th>
                        <th scope="col">Flight Type</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($vols as $vol) : ?>
                        <tr scope="row">
                            <td>
                                <?php echo $vol['origin']; ?>
                            </td>
                            <td><?php echo $vol['destination']; ?></td>
                            <td>
                                <?php echo $vol['dep_time']; ?>
                            </td>
                            <td><?php echo $vol['flight_type']
                                    ?
                                    '<span class="badge bg-light text-dark">One way</span>'
                                    :
                                    '<span class="badge bg-warning">Round trip</span>';; ?></td>
                            <td class="d-flex flex-row justify-content-evenly">
                                <form method="post" class="mr-2" action="addpassenger">
                                    <input type="hidden" name="id" value="<?php echo $vol['id']; ?>">
                                    <button class="btn btn btn-success"><i class="fa fa-users"></i> <i class="fa fa-plus"></i></button>
                                </form>

                                <form method="POST" action="deleterev" class="mr-2">
                                    <input type="hidden" name="iddelete" value="<?php echo $vol['id']; ?>">
                                    <button class="btn btn btn-danger"><i class="fa fa-trash la la-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="./views/assets/js/jquery-3.3.1.min.js"></script>
<script src="./views/assets/js/main.js"></script>