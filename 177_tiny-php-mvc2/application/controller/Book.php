<?php

// http://localhost:8080/apache_upload/z_demos/177_tiny-php-mvc2/book/1



class Book extends Controller
	{
		
	
		protected function index($parms)
			{			
				
				$this->fragment['header'] = 'header.main';
				$this->fragment['footer'] = 'footer';
				
				$this->extensions['head']['jQuery'] = '<script>1</script>';
				$this->extensions['head']['slideshow'] = '<script>2</script>';
			
				$id = $parms[1];
				
				$books = new Model('shop', 'books', "WHERE book_id = '$id'");	// "WHERE book_id = '$id'" -- this should be called in $books->getOne() -- also add sanitization like dbretrieve.php:26
				
				$this->data = $books->getOne();
				$this->data['metatitle'] = 'The book page :: Book View';
				
				
			}
	
	
	
	}
	
	
	
	
	
?>	