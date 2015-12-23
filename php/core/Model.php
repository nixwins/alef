<?php
namespace core;

use core\DBConnect;
use \PDO;

class Model
{
	private $conn;
	
	public function __construct()
	{
		$instance = DBConnect::getInstance();
		$this->conn = $instance->getConnection();
	}
	public function getAll()
	{
		$sth = $this->conn->prepare("SELECT * FROM test");
		$sth->execute();
		$sth->setFetchMode(PDO::FETCH_ASSOC);
		return $sth->fetchAll();
	}
	
	public function insert($data)
	{
		$sth = $this->conn->prepare("INSERT INTO test (user_data) VALUES (:data)");
		$sth->bindParam(':data', $data);
		$sth->execute(); 
	}

}