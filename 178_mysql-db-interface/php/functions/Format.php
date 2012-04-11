<?php

/*
function format($data, $format){
	if(count($data) == 2){
		print_r($data); exit;
		if($format == 'table'){
			$table = '';
			$table = '<table><thead><tr>';
			foreach($data['columns'] as $column){
				$table.='<th>'.$column.'</th>';
			}
			$table.='</thead><tbody><tr>';
			foreach($data['rows'] as $row){
				$table.='<td>'.$row.'</td>';
			}
			$table.='</tr></tbody></table>';
			echo $table;
		}
	} elseif(count($data) > 2 && $data['column']){
		if($format == 'table'){
			$table = '';
			$table = '<table><thead><tr>';
			foreach($data['columns'] as $column){
				$table.='<th>'.$column.'</th>';
			}
			$table.='</thead><tbody><tr>';
			foreach($data['rows'] as $row){
				foreach($data['columns'] as $column){
					$table.='<td>'.$row[$column].'</td>';
				}
			}
			$table.='</tr></tbody></table>';
			echo $table;
		}
	}
}
*/
//echo 'foo'; //exit;

class Format
	{
	
		function __construct($callee, $format, $data)
			{
				$this->callee = $callee;
				$this->format = $format;
				$this->data = $data;
				$this->columns = $this->data['columns'];
				switch($this->callee)
					{
						case 'getOne';
						$this->printOneFormatted();
					}
			}
			
			private function printOneFormatted()
				{
					//$format = $this->format;
						if($this->format == 'table'){
							$table = '';
							$table = '<table><thead><tr>';
							foreach($this->columns as $column){
								$table.='<th>'.$column.'</th>';
							}
							$table.='</thead><tbody><tr>';
							foreach($this->data['rows'] as $data){
								$table.='<td>'.$data.'</td>';
							}
							$table.='</tr></tbody></table>';
							echo $table;
					}
						if($this->format == 'ul'){
							$li = '';
							$li = '<ul>';
							foreach($this->data['rows'] as $data){
								$li.='<li>'.$data.'</li>';
							}
							$li.='</ul>';
							echo $li;
					}
						if($this->format == 'dl'){
							$dd = '';
							$dd = '<dl>';
							foreach($this->data['rows'] as $col => $data){
								$dd.='<dt>'.$col.'</dt>';
								$dd.='<dd>'.$data.'</dd>';
							}
							$dd.='</dl>';
							echo $dd;
					}
				}
	
	}





?>