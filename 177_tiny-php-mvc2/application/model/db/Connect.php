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


}













?>