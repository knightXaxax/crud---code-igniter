<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InformationController extends CI_Controller
{
	public function index()
	{
		$this->load->model('Student', 'student');
		
		if(is_array($this->student->all())) 
			echo json_encode([
				'data' => base64_encode(base64_encode(json_encode($this->student->all())))
			]);
	}
}
