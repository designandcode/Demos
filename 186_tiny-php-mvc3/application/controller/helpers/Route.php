<?php


function __autoload($class_name) {
    @include_once 'application/model/' . $class_name . '.php';
    @include_once 'application/controller/' . $class_name . '.php';
    @include_once 'application/controller/helpers/' . $class_name . '.php';
		@include_once 'application/layout/helpers/' . $class_name . '.php';
}

	include_once 'application/config.php';


class Route
	{
		
		
		function __construct()
		{
			$this->callee = $callee;
			if ($_GET['route']) {	$this->values['route'] = $_GET['route']; }
			elseif ($_POST['route']) { $this->values['route'] = $_POST['route']; }
			elseif (!$_GET || !$_POST) { $this->values['route'] = 'main'; }
			
			$route = preg_split('/\//', $this->values['route']);
			
			print_r($route); exit;
			
			switch ($route[0])
				{
					case 'book':
					new Book($route);
					break;
					
					case 'books':
					new Books($route);
					break;
					
					case 'someview':
					new SomeView($route);
					break;
					
					
					case 'main':
					new Main($route);
					break;
					
					
					default:
					new Error($route);
				}
				
		}
	
	}



?>