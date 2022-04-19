<?php


class HomeController
{

	public function index($page) // $page is the get page
	{
		include('Views/' . $page . '.php'); // include the page
	}
}
