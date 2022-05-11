<?php 
if (isset($_POST['view'])) {
    $data = new VolsController();
    $passengers = $data->getpassengers();
}

if (isset($_POST['find'])) {
    $data = new UsersController();
    $passengers = $data->findPessenger();
}
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


<body>
<div class="container">
  <h2 class="text-center mt-5" style="font-size:50px;">My Passangers</h2>
  <section class="container mt-5">

    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Full Name</th>
                <th scope="col">Birthday</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            foreach ($passengers as $passenger) {
                echo '<tr>';
                echo '<td>' . $i . '</td>';
                echo '<td>' . $passenger['fullname'] .'</td>';
                echo '<td>' . $passenger['birthday'] . '</td>';
                echo '</tr>';
                $i++;
            }
            ?>
           
        </tbody>
    </table>
    </section>
</div>
</body>





