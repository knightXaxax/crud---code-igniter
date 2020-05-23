<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Database {
	
	private $connection = null;
	public $error_msg = null;

	public function __construct($params)
	{
		$this->params = $params;
		try {
			$this->connection = new PDO($params['dsn'], $params['user'], $params['passwd']);
			$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			$this->error_msg = $e->getMessage();
		}
	}

	public function raw_query($query, $placeholders) 
	{
		try {
			$this->connection->beginTransaction();
			$stmt = $this->connection->prepare($query);
			$stmt->execute($placeholders);
			$this->connection->commit();
			return $stmt;
		} catch (PDOException $e) {
			$this->connection->rollback();
			$this->error_msg = $e->getMessage();
		}
	}
}
