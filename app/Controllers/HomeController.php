<?php


class HomeController
{

	public function index($page)
	{
		include('Views/' . $page . '.php');
	}
}
