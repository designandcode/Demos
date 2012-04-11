<?php

function __autoload($class_name) {
    include_once 'application/controller/' . $class_name . '.php';
}

    //include_once 'application/controller/helpers/' . $class_name . '.php';
		include_once 'application/layout/helpers/Layout.php';
    include_once 'application/model/Model.php';
		include_once 'application/config.php';


class Controller
	{
		
		
		function __construct()
			{
				if ($_GET['route']) {	$this->values['route'] = $_GET['route']; }
				elseif ($_POST['route']) { $this->values['route'] = $_POST['route']; }
				elseif (!$_GET || !$_POST) { $this->values['route'] = 'main/'; }
				$parms = preg_split('/\//', $this->values['route'], NULL, PREG_SPLIT_NO_EMPTY); //print_r($parms); exit;
				$this->callee = array_shift($parms);  
				// echo $this->callee; exit; 
				// print_r($parms); exit;
				if($parms[0] == 'add'){
					//print_r($_POST); exit;
					// http://localhost:8080/apache_upload/z_demos/186_tiny-php-mvc3/books/add/
					$db = new Model($this->callee);
					$db->createOne($_POST);
					header("Location: http://localhost:8080/apache_upload/z_demos/186_tiny-php-mvc3/" . $this->callee); exit;
					//echo 'Initiate add new record method'; exit;
				}
				if($parms[0] == 'update'){
					echo 'Initiate method to udpate record' . $parms[1]; exit;
				}
				if($parms[0] == 'delete'){
					echo 'Initiate method to delete record' . $parms[1]; exit;
				}
				if($parms[0] == 'sort'){
					// http://localhost:8080/apache_upload/z_demos/186_tiny-php-mvc3/books/sort/{field}/{desc} || {asc} || "" /
					$sqlfilter = "ORDER BY `%s` %s";
				}
				if($parms[0] == 'filter'){
					// http://localhost:8080/apache_upload/z_demos/186_tiny-php-mvc3/books/filter/{field}/{value} /
					$sqlfilter = "WHERE `%s` = '%s'";
				}
				
				// Load the sub-controller
				if(file_exists("application/controller/".$this->callee.".php")/* && $this->callee != 'main'*/){
					$controller = new $this->callee($parms,$sqlfilter);
					$db = new Model($this->callee); //var_dump($db); //exit;
					if($db->row != false){
						$controller->data[$this->callee] = $db->getAll($sqlfilter,$parms[1],$parms[2]);
					}
					$this->load($this->callee, $controller->data, $controller->fragments,$controller->extensions);
				} /*
				elseif($this->callee == 'main'){
					$controller = new Main($parms,$sqlfilter);
					$this->load($this->callee, $controller->data, $controller->fragments,$controller->extensions);
				}*/
				else{
					$controller = new Error($parms);
					$this->load('error', $controller->data, $controller->fragments,$controller->extensions);
				}
					
			}
		
		public function load($callee,$data,$fragments=0,$extensions=0)
			{				
				$shared = $data;
				
				// Load Data
				$data = extract($data);
				
				$layout = new Layout($shared);
				
				// Load Head
				$layout->head($extensions['head']);
				
				// Load Header				
				$layout->header($fragments['header']);
				
				// Load View
				include_once 'application/view/' . $callee . '.php';
				
				// Load Footer
					$layout->footer();
				
				// Confirm load called only once per URL request
				$this->loaded = 1;
				
			}
					
		/*
		public function add()
			{
			
			}
		*/
	
	}
?>