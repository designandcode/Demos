<?php

// http://localhost:8080/apache_upload/z_demos/177_tiny-php-mvc2/

class Main extends Controller
	{
		
		function __construct($parms)
			{
				
				$this->fragments['header'] = 'header.main';
				$this->fragments['footer'] = 'footer';
				
				$this->extensions['head']['jQuery'] = '<script>1</script>';
				$this->extensions['head']['slideshow'] = '<script>2</script>';
				
				
				$this->data['metatitle'] = 'The book page';
				$this->data['logo'] = 'Slogan';
				
			}
	
	
	
	
	}
	
	
	
	
	
?>	