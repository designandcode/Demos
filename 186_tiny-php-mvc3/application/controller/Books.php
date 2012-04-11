<?php

// http://localhost:8080/apache_upload/z_demos/177_tiny-php-mvc2/books/
// http://localhost:8080/apache_upload/z_demos/177_tiny-php-mvc2/books/author/
// http://localhost:8080/apache_upload/z_demos/177_tiny-php-mvc2/books/author/desc/

class Books extends Controller
	{
		
		function __construct($parms,$sqlfilter)
			{
				
				
				//$books = new Model('books');
								
				
				//$this->data['books'] = $books->getAll($sqlfilter,$parms[1],$parms[2]);
				$this->data['metatitle'] = 'The books page';
				
				$this->fragments['header'] = 'header.main';
				
			}
		
	
	}
	
	
	
	
	
?>	