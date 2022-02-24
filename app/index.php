<?php
require_once './Views/includes/header.php';
require_once './autoload.php';
require_once './Controllers/HomeController.php';
require_once './Controllers/AdminController.php';
require_once './Controllers/UsersController.php';
require_once './Controllers/FlightController.php';
require_once './Controllers/PessengerController.php';
require_once './Controllers/ReservationController.php';
// require_once './Views/includes/alerts.php';


$home = new HomeController();

$pages = ['home', 'add', 'update', 'delete', 'register', 'loginAdmin', 'login', 'logout', 'logoutAdmin', 'reserve', 'homeusser', 'addpassenger', 'allres'];

if (isset($_SESSION['logged']) && $_SESSION['logged'] === true) {


	if (isset($_GET['page'])) {
		if (in_array($_GET['page'], $pages)) {
			$page = $_GET['page'];
			$home->index($page);
		} else {
			include('Views/includes/404.php');
		}
	} else {
		$home->index('reserve');
	}


	require_once './Views/includes/footer.php';
} else if (isset($_GET['page']) && $_GET['page'] === 'register') {
	$home->index('register');
} else if (isset($_GET['page']) && $_GET['page'] === 'login') {
	$home->index('login');
} else if (isset($_GET['page']) && $_GET['page'] === 'loginAdmin') {
	$home->index('loginAdmin');
} else {
	$home->index('homeusser');
}
