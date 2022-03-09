<?php

if (isset($_POST['addpass'])) {
    $addPassenger = new VolsController();
    $addPassenger->addPassenger();

}

?>

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

<section class="vh-100" style="background-color: #9A616D;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <?php include('./views/includes/alerts.php'); ?>
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="col-md-12 col-lg-12 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">

                                <form method="post">

                                    <div class="d-flex align-items-center mb-3 pb-1">
                                        <img src="./views/assets/images/herosm.png" alt="">
                                        <!-- <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i> -->
                                        <span class="h1 fw-bold mb-0">ADD pessenger</span>
                                    </div>

                                    <!-- <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Update Flight</h5> -->

                                    <div class="form-outline mb-4">
                                        <!-- <input type="text" hidden name="reservation_id" class="form-control form-control-lg" /> -->
                                        <input type="text" hidden name="user_id" class="form-control form-control-lg" />
                                        <!-- <label for="reservation_id" class="form-label">Origin</label> -->
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="text" name="fullname" placeholder="Full Name" class="form-control form-control-lg" required />
                                        <!-- <label for="fullname" class="form-label">Full Name</label> -->
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="datetime-local" name="birthday" placeholder="Birthday" class="form-control form-control-lg" required />
                                        <!-- <label for="birthday" class="form-label">Birthday</label> -->
                                    </div>
                                    <div class="pt-1 mb-4">
                                        <button type="submit" name="addpass" class="btn btn-dark btn-lg btn-block">Add Passenger to Flight</button>
                                    </div>
                                    <a href="#" class="small text-muted">Terms of use.</a>
                                    <a href="#" class="small text-muted">Privacy policy</a>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>