<?php
require_once './autoload.php';
require_once './views/includes/header.php';
require_once './views/includes/footer.php';



$homeuser = new HomeController(); // $homeuser is an object of HomeController class

$pages = ['homeuser', 'homeadmin', 'landpage', 'add', 'update', 'delete', 'register', 'login', 'logout', 'addpassenger', 'showvols', 'showvols', 'allres', 'deleterev','viewpassenger'];


if (isset($_SESSION['login']) && $_SESSION['login'] === true) { // if the session login is true
	if (isset($_GET['page'])) { // if the get page is set
		if (in_array($_GET['page'], $pages)) { // if the get page is in the array pages
			$page = $_GET['page']; // $page is the get page
			$homeuser->index($page); // $homeuser->index($page) is the index method of HomeController class
		} else {
			include('views/includes/404.php');
		}
	} else if ($_SESSION['role'] == 0) { // if the session role is 0
		$homeuser->index('homeuser'); // $homeuser->index('homeuser') is the index method of HomeController class
	} else if ($_SESSION['role'] == 1) { 
	} else { 
		$homeuser->index('landpage'); 
	}
	require_once './views/includes/footer.php';
} else if (isset($_GET['page']) && $_GET['page'] === 'register') { // if the get page is register
	$homeuser->index('register'); // $homeuser->index('register') is the index method of HomeController class
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
