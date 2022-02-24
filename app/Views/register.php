<?php
if (isset($_POST['submit'])) {
    $createUser = new UsersController();
    $createUser->register();
}
?>

<head>
    <link rel="stylesheet" href="./views/includes/css/styles.css">

</head>

<div class="container">
    <div class="row my-4">
        <div class="col-md-6 mx-auto">
            <?php include('./views/includes/alerts.php'); ?>
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center text-dark">Registration</h3>
                </div>
                <div class="card-body bg-light">
                    <form method="post" class="mr-1">
                        <div class="form-group mb-4">
                            <input type="text" name="fullname" placeholder="Full Name" class="form-control">
                        </div>

                        <div class="form-group mb-4">
                            <input type="text" name="username" placeholder="Username" class="form-control">
                        </div>
                        <div class="form-group mb-4">
                            <input type="password" name="password" placeholder="Password" class="form-control">
                        </div>
                        <button name="submit" class="btn btn-sm btn-primary">Register</button>
                    </form>
                </div>
                <div class="card-footer">
                    <a href="<?php echo BASE_URL; ?>login" class="btn btn-link">Login</a>

                </div>
            </div>
        </div>
    </div>
</div>