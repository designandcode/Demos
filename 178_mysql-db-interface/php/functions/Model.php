<?php

include_once('db/Connect.php');

class Model
	{
		public $database;
		public $table;

		//function __construct($table, $database='')
		function __construct($database, $table)
			{
				$this->params = new Connect($host, $port, $username, $password);
				$this->database = $database;
				/*
				if($databse == '' && defined('DB_NAME')){
					$this->database = DB_NAME;
				} elseif($database != '' && !defined('DB_NAME')){
					$this->database = $database;
				} elseif($database != '' && defined('DB_NAME')){
					$this->database = $database;
				} else{
					$this->errors['undefined_db'] = "Database Error: No Database selected in config or in Model instantiation";
				}
				*/
				$this->table = $table;
				$this->connectsql = mysql_connect($this->params->host, $this->params->username, $this->params->password);
				$this->selectdb = mysql_select_db($this->database, $this->connectsql);
				$this->columns = $this->getColumns();
				$this->rows = $this->getRows();
				$this->row = $this->getOne();
				$this->first = $this->row;
				$this->random = $this->getRandom();
			}
		
		
		/* Filters out selected columns */
		
		public function filter()
			{
				//$this->row = $this->getOne();
				$rows = count($this->rows);
				$args = func_get_args();
				if($args){
				for($i=0;$i<count($args);$i++){
					unset($this->columns[$args[$i]]);
					unset($this->row[$args[$i]]);
					unset($this->random[$args[$i]]);
					for($j=0;$j<$rows;$j++){
						unset($this->rows[$j][$args[$i]]);
					}	
				}
				$this->first = $this->row;
				//return $this->columns;
				} else{
					return;
				}
				/*
				$this->columns = $this->getColumns();
				$args = func_get_args();
				if($args){
				for($i=0;$i<count($args);$i++){
					//unset($this->columns[$unset]);
					unset($this->columns[$args[$i]]);
				}
				//return $this->columns;
				} else{
					return;
				}
				*/
			}
			
			public function reset()
				{
					$this->rows = $this->getRows();
					$this->row = $this->getOne();
					$this->first = $this->row;
					$this->random = $this->getRandom();
					$this->columns = $this->getColumns();
				}
		
		public function format($format = 'table')
			{
				
				/*
				foreach($this->rows['rows'] as $rows){
					echo $rows;
				}
				*/
				
				if($this->callee == 'getOne'){
					return new Format($this->callee, $format, $this->rows);
					//return $this->row;
				}
				
				
			}
		
		public function getOne($sqlfilter = '')
			{
			
				//$rows['columns'] = $this->columns; //$this->getColumns();
				//$rows['rows'] = array();
				//$rows = array();
				$args = func_get_args();
					
					//if(count($args) > 2){
					if(count($args) > 1){
						array_shift($args);
						//array_shift($args);
						$args = array_map('mysql_real_escape_string', $args);
						array_unshift($args, $sqlfilter);
						$sqlfilter = call_user_func_array('sprintf', $args); 
					} else{
						$sqlfilter = $args[0];
					}
				
				$query = "SELECT * FROM $this->table $sqlfilter LIMIT 1";
				
				$result = mysql_query($query);			
				$one = mysql_fetch_array($result, MYSQL_ASSOC);
				
				//$this->single['columns'] = $this->getColumns();
				//$this->single['rows'] = $this->row;
				$this->callee = 'getOne';
				
				//array_push($rows['rows'], $this->row);
				//$rows['rows'] = $this->row;
				//return $rows;
				//return $rows;
				return $one;
				
			}
		
		public function getColumns()
			{
			
				$query = "SELECT * FROM $this->table LIMIT 1";
				//$columns = array();
				
				$result = mysql_query($query);			
				$this->row = mysql_fetch_array($result, MYSQL_ASSOC);
				$this->callee = 'getColumns';
				//return array_keys($this->row);
				//return array_keys($this->getOne());
				
				foreach(array_keys($this->row) as $column){
					$columns[$column] = $column;
				}
				return $columns;
				
			}
		
		public function getRows()
			{
				$rows = array();
				$query = "SELECT * FROM $this->table";
				$result = mysql_query($query);	
				while ($row = mysql_fetch_array($result, MYSQL_ASSOC)){
						array_push($rows, $row);
				}
				return $rows;
				//$this->rows = $rows;
			}
		/*	
		public function getFirst()
			{
				
				$query = "SELECT * FROM $this->table LIMIT 1";
				
				$result = mysql_query($query);			
				$this->row = mysql_fetch_array($result, MYSQL_ASSOC);
				
				//return $this->row;
			}
		*/	
		public function getRandom()
			{
				$query = "SELECT * FROM $this->table ORDER BY RAND() LIMIT 1";
				
				$result = mysql_query($query);			
				$random = mysql_fetch_array($result, MYSQL_ASSOC);

				return $random;
			}
		
		public function getAll($sqlfilter = ''/*, $type = 'array'*/)
			{
					
					//$rows['columns'] = $this->columns; //$this->getColumns();
					$rows = array();
					
					$args = func_get_args();
					
					//if(count($args) > 2){
					if(count($args) > 1){
						array_shift($args);
						//array_shift($args);
						$args = array_map('mysql_real_escape_string', $args);
						array_unshift($args, $sqlfilter);
						$sqlfilter = call_user_func_array('sprintf', $args); 
					} else{
						$sqlfilter = $args[0];
					}
					
					$query = "SELECT * FROM $this->table $sqlfilter";
					$this->callee = 'getAll';
					
					$result = mysql_query($query);	
					while ($row = mysql_fetch_array($result, MYSQL_ASSOC)){
							array_push($rows, $row);
					}
					//if($type == 'array'){
						return $rows;
					//} elseif($type == 'json'){
					//	$json = json_encode($rows);
					//	return $json;
					//}
				
			}
		/*
		public function getRows($sqlfilter = '', $type = 'array')
			{
					
					$rows = array();
					
					$args = func_get_args();
					
					if(count($args) > 2){
						array_shift($args);
						array_shift($args);
						$args = array_map('mysql_real_escape_string', $args);
						array_unshift($args, $sqlfilter);
						$sqlfilter = call_user_func_array('sprintf', $args); 
					} else{
						$sqlfilter = $args[0];
					}
					
					$query = "SELECT * FROM $this->table $sqlfilter";
					$this->callee = 'getRows';
					
					$result = mysql_query($query);	
					while ($row = mysql_fetch_array($result, MYSQL_ASSOC)){
							array_push($rows, $row);
					}
					if($type == 'array'){
						return $rows;
					} elseif($type == 'json'){
						$rows = json_encode($rows);
						return $rows;
					}
				
			}
		*/		
		/*
		public function getColumn($column, $sqlfilter = '')
			{
				$array = array();
				
				$query = "SELECT $column FROM $this->table $sqlfilter";
				
				$result = mysql_query($query);
				while ($row = mysql_fetch_array($result, MYSQL_ASSOC)){
						array_push($array, $row);
				}
				
				return $array;
				
				// New Implementation **
				
				$args = func_get_args();
				if (count($args) > 2){
					$column = array_shift($args);
					$args[1] = mysql_real_escape_string($args[1]);
					$query = "SELECT $column FROM $this->table " . call_user_func_array('sprintf', $args);
				} else{
					$query = "SELECT $args[0] FROM $this->table  $args[1]";
				}
				
				$array = array();
				
				$query = "SELECT $column FROM $this->table $sqlfilter";
				
				$result = mysql_query($query);
				
				while ($row = mysql_fetch_array($result, MYSQL_ASSOC)){
						array_push($array, array_shift($row));
				}
				
				return $array;
				
			}
		*/
		/*
		public function createOne($values)
			{
			
				$columns = array_keys($values); 
				$values = array_values($values); 
				$columns = implode("`,`", $columns); 
				$values = implode("','", $values); 
				$values = "'" . $values . "'";
				$query = "INSERT INTO $this->table (`$columns`) VALUES ($values)";
							
				$result = mysql_query($query);
			
			}
		*/
		public function createOne($values)
			{
				extract($values); //print_r($values); exit; // Array ( [title] => Area8 [author] => Foo Bar [price] => 9.99 )
				//echo "<br />";
				//print_r(array_keys($values));
				
				$columns = array_keys($values);
				$values = array_values($values);
				$columns = implode("`,`", $columns); 
				$values = implode("','", $values); 
				$values = "'" . $values . "'";
				$query = "INSERT INTO $this->table (`$columns`) VALUES ($values)";
							
				$result = mysql_query($query);
				
				//@header("Location ../../dbcreate.php");
				//$_SESSION['post'] = '';
			}
			
		public function updateOne($record, $values)
			{
				
				$primarykey = key($record);
				$primaryval = $record[$primarykey];
				
				foreach($values as $key => $val){
					$query = "UPDATE $this->table SET '$key' ='$val' WHERE $primarykey=$primaryval";
					$result = mysql_query($query);
				}
								
			}

	public function deleteOne($record)
		{
		
			$primarykey = key($record);
			$primaryval = $record[$primarykey];
			
			$query = "DELETE FROM $this->table WHERE $primarykey='$primaryval'";
			$result = mysql_query($query);
		
		}
		
}

	
?>