<?php
if (isset($_POST['submit'])) {
    $loginUser = new UsersController();
    $loginUser->auth();
} else {
    UsersController::logout();
}

?>
<style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
</style>

<head>
    <link rel="stylesheet" href="./views/includes/css/signin.css">
</head>


<body class="text-center">
    <main class="form-signin">
        <?php include('./views/includes/alerts.php'); ?>

        <form method="post">
            <i class="bi bi-person-circle" style="font-size:50px"></i>
            <h1 class="h3 mb-3 fw-normal">User Sign In</h1>

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
                <a href="<?php echo BASE_URL; ?>register" class="btn btn-link">Register</a>

            </div>
        </form>