<?php 

	function redirect($route)
	{
		header('location: ' . WEBROOT . $route);
	}

	function route($route)
	{
		return WEBROOT . $route;
	}

	function dump($val)
	{
		echo "<pre>";
		print_r($val);
		echo "</pre>";
	}

	function dd($val)
	{
		die(dump($val));
	}

	function old($inputName = '', $default = '')
	{
		return $_POST[$inputName] ?? $default;
	}

	function serverMethod()
	{
		return $_SERVER['REQUEST_METHOD'];
	}

	function asset($asset)
	{
		return WEBROOT . $asset;
	}