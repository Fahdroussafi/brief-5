<?php
require_once './autoload.php';
require_once './views/includes/header.php';
require_once './views/includes/footer.php';
// require_once './Controllers/HomeController.php';
// require_once './Controllers/AdminController.php';
// require_once './Controllers/UsersController.php';
// require_once './Controllers/FlightController.php';
// require_once './Controllers/PessengerController.php';
// require_once './Controllers/ReservationController.php';
// require_once './Views/includes/alerts.php';


$homeuser = new HomeController();

$pages = ['homeuser', 'homeadmin', 'landpage', 'add', 'update', 'delete', 'register', 'login', 'logout', 'reserve', 'homeusser', 'addpassenger', 'allres'];


if (isset($_SESSION['login']) && $_SESSION['login'] === true) {
	if (isset($_GET['page'])) {
		if (in_array($_GET['page'], $pages)) {
			$page = $_GET['page'];
			$homeuser->index($page);
		} else {
			include('views/includes/404.php');
		}
	} else if ($_SESSION['role'] == 0) {
		$homeuser->index('homeuser');
	} else if ($_SESSION['role'] == 1) {
		$homeuser->index('homeadmin');
	} else {
		$homeuser->index('landpage');
	}
	require_once './views/includes/footer.php';
} else if (isset($_GET['page']) && $_GET['page'] === 'register') {
	$homeuser->index('register');
} else if (isset($_GET['page']) && $_GET['page'] === 'login') {
	$homeuser->index('login');
} else {
	$homeuser->index('landpage');
}



// if (isset($_SESSION['logged']) && $_SESSION['logged'] === true) {


// 	if (isset($_GET['page'])) {
// 		if (in_array($_GET['page'], $pages)) {
// 			$page = $_GET['page'];
// 			$home->index($page);
// 		} else {
// 			include('Views/includes/404.php');
// 		}
// 	} else {
// 		$home->index('reserve');
// 	}


// 	require_once './Views/includes/footer.php';
// } else if (isset($_GET['page']) && $_GET['page'] === 'register') {
// 	$home->index('register');
// } else if (isset($_GET['page']) && $_GET['page'] === 'login') {
// 	$home->index('login');
// } else if (isset($_GET['page']) && $_GET['page'] === 'loginAdmin') {
// 	$home->index('loginAdmin');
// } else {
// 	$home->index('homeusser');
// }
