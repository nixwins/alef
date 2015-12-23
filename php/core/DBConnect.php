<?php

namespace core;

use \PDO;

class DBConnect
{
	private static $instance;
	private $conn;
	
	private function __clone(){}
	
	private function __construct($db)
	{
		try{
		$this->conn = new PDO(
			$db['dns']. ":host=" . $db['dbHost'] . 
			";dbname=" . $db['dbName'],
			$db['dbUser'],
			$db['dbPass']
		);
		} catch (PDOException $e) { exit($e->getMessage()); }
	}
	
	public function getInstance()
	{
		$config = include_once 'config/database.php';
		if(self::$instance == null)
		{
			self::$instance = new DBconnect($config);
		}
		return self::$instance;
	}
	public function getConnection()
	{
		return $this->conn;
	}

}