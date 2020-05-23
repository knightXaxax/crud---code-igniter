<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Model
{
	public function __construct()
	{
		$this->load->library('Database', [
			'dsn' => 'mysql:host=localhost;dbname=crud;charset=utf8mb4;',
			'user' => 'root',
			'passwd' => '',
		]);
	}

	public function all()
	{
		return $this->database->raw_query("SELECT * FROM `student_information` ORDER BY `id` DESC;", [])->fetchAll();
	}

	public function store_info($params)
	{
		$query = "INSERT INTO `student_information` VALUES (0, :fullname, :age, DATE(:bday), :add, :stud_num, :campus, :username, :passwd);";
		return $this->database->raw_query($query, [
			':fullname' => $params['fullname'],
			':age' => $params['age'],
			':bday' => $params['birthday'],
			':add' => $params['address'],
			':stud_num' => $params['student_number'],
			':campus' => $params['campus'],
			':username' => $params['username'],
			':passwd' => password_hash($params['fullname'], PASSWORD_DEFAULT),
		]);
	}
}
