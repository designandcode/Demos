<?php



class Controller
	{
		
		
		function __construct($parms)
			{
				$this->loaded = 0;
				$this->parms = $parms;
				$this->index($this->parms);
				if($this->loaded == 0){
					$this->load($this->parms[0], $this->data, $this->fragment,$this->extensions);
				}
			}
		
		public function load($view, $data,$fragment=0,$extension=0)
			{				
				$shared = $data;
				
				// Load Data
				$data = extract($data);
				
				$layout = new Layout($shared);
				
				// Load Head
				//$layout->head($shared, $this->extensions['head']);
				$layout->head($this->extensions['head']);
				
				// Load Header				
				$layout->header($this->fragment['header']);
				
				// Load View
				include_once 'application/view/' . $view . '.php';
				
				// Load Footer
					$layout->footer();
				
				// Confirm load called only once per URL request
				$this->loaded = 1;
				
			}
					
	
	
	
	
	}
	
	
	
	
	
?>	