<?php
if (isset($_POST['submit'])) {
    $loginAdmin = new AdminController();
    $loginAdmin->authAdmin();
} else {
    AdminController::logoutAdmin();
}
?>

<head>
    <link rel="stylesheet" href="./views/includes/css/signin.css">
</head>

<body class="text-center">
    <main class="form-signin">
        <?php include('./views/includes/alerts.php'); ?>

        <form method="post">
            <i class="bi bi-person-circle" style="font-size:50px"></i>
            <h1 class="h3 mb-3 fw-normal">Admin Sign In</h1>

            <div class="form-floating">
                <input type="text" name="username" class="form-control" id="floatingInput" placeholder="Username">
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <button name="submit" class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            <div class="card-footer">

                <a href="<?php echo BASE_URL; ?>login" class="btn btn-link">Login As User</a>

            </div>
        </form>