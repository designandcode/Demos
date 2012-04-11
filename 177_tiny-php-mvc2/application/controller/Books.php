<?php

// http://localhost:8080/apache_upload/z_demos/177_tiny-php-mvc2/books/author/
// http://localhost:8080/apache_upload/z_demos/177_tiny-php-mvc2/books/author/reverse/

class Books extends Controller
	{
		
	
		
	
		protected function index($parms)
			{			
				
				$sort = $this->parms[1];
				($parms[2] == 'reverse') ? ($reverse = 'DESC') : ($reverse = "");
				
				$books = new Model('shop', 'books', "ORDER BY $sort $reverse");
				
				$this->data['books'] = $books->getAll();
				$this->data['metatitle'] = 'The books page';
				
				//$this->load($view, $data);
					
			}
	
	
	
	}
	
	
	
	
	
?>	