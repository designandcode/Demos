<?php

include_once('db/Connect.php');

class Model
	{
	public $database;
	public $table;
	public $format;
	public $sqlfilter;

function __construct($database, $table, $sqlfilter = '', $format = 'object')
		{
			$this->params = new Connect($host, $port, $username, $password);
			$this->database = $database;
			$this->table = $table;
			$this->format = $format;
			$this->sqlfilter = $sqlfilter;
			$this->connectsql = mysql_connect($this->params->host, $this->params->username, $this->params->password);
			$this->selectdb = mysql_select_db($this->database, $this->connectsql);
			$this->getResource($this->sqlfilter);
		}

private function getResource($sqlfilter)
		{
			
			$query = "SELECT * FROM $this->table $sqlfilter";
			
			$this->result = mysql_query($query);
			
		}
public function getOne()
		{
						
			$this->row = mysql_fetch_array($this->result);
			return $this->row;
			
		}
		
public function getAll()
		{
			
			$array = array();
			
			while ($row = mysql_fetch_array($this->result)){
					array_push($array, $row);
			}
			return $array;
			
		}

}

?>