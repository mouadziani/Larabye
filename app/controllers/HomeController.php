<?php

class HomeController extends Controller
{
	public function index()
	{ 
		return $this->view('home', ['message' => 'Hello Wolrd']);
	}
}