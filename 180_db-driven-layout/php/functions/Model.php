<?php

include_once('db/Connect.php');

class Model
	{
	public $database;
	public $table;
	public $sqlfilter;

function __construct($database, $table, $sqlfilter = '')
		{
			$this->params = new Connect($host, $port, $username, $password);
			$this->database = $database;
			$this->table = $table;
			$this->sqlfilter = $sqlfilter;
			$this->connectsql = mysql_connect($this->params->host, $this->params->username, $this->params->password);
			//$link = mysql_connect($this->params->host, $this->params->username, $this->params->password);
			$this->selectdb = mysql_select_db($this->database, $this->connectsql);
			//$this->getResource($this->sqlfilter);
		}
/*
private function getResource($sqlfilter)
		{
			$query = "SELECT * FROM $this->table $sqlfilter";
			
			$this->result = mysql_query($query);				
		}
*/		
public function getOne($sqlfilter = '')
		{
			
			$query = "SELECT * FROM $this->table $sqlfilter LIMIT 1";
			
			$result = mysql_query($query);			
			$this->row = mysql_fetch_array($result);
			return $this->row;
			
		}
		
public function getAll($sqlfilter = '')
		{
			
			$array = array();
			
			$query = "SELECT * FROM $this->table $sqlfilter";
			
			$result = mysql_query($query);	
			while ($row = mysql_fetch_array($result)){
					array_push($array, $row);
			}
			return $array;
			
		}

public function createOne($columns, $values)
		{
		
		$query = "INSERT INTO $this->table ($columns) VALUES ($values)";
		//$query = "INSERT INTO $this->table (title, author, price) VALUES ('$title', '$author', '$price')";
			
			$result = mysql_query($query);	
		
		}

public function updateOne()
		{
		
		
		foreach($_POST as $key => $val){
		$title = $_POST['title'];
		$query = "UPDATE $this->table SET $key='$val' WHERE title='$title'";
		//$query = "UPDATE $this->table SET title='', author='', price='' WHERE title='Area6'";
		}
		//$query = "INSERT INTO $this->table (title, author, price) VALUES ('$title', '$author', '$price')";
			
			$result = mysql_query($query);	
		
		}
		
}

?>