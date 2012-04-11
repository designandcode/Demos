<?php

class Connect
{

	public $host;
	public $port;
	public $database;
	public $username;
	public $password;
	
	function __construct($host, $port, $username, $password)
		{
			$this->host = 'localhost';
			$this->port = 3306;
			$this->database = '';
			$this->username = 'root';
			$this->password = '12345';
		}

	/*	
	public function buildDSN()
		{
			return "mysql:host=$this->host;port=$this->port;dbname=$this->database";
		}
	
	public function getUsername()
		{
			return $this->username;
		}
	
	public function getPassword()
		{
			return $this->password;
		}	
	*/

}













?>