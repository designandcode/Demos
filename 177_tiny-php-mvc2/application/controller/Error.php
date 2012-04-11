<?php

// http://localhost:8080/apache_upload/z_demos/177_tiny-php-mvc2/foobar/

class Error extends Controller
	{
		
	
	
		
		protected function index($parms)
			{							
				
				$this->data['metatitle'] = 'The book page';
				
				$this->load('error', $this->data);	
				
			}
	
	
	
	}
	
	
	
	
	
?>	