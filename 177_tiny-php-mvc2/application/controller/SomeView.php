<?php



class SomeView extends Controller
	{
		
	
			
		protected function index($callee, $parms)
			{			
				//$values = $this->callee;
				//$view = $values['view'];
				$view = $callee;
				
				$books = new Model('shop', 'books', "WHERE book_id = '1'");
				
				$data = $books->getOne();
				$data['metatitle'] = 'The book page';
				
				$this->load($view, $data);	
				
			}
	
	
	
	}
	
	
	
	
	
?>	