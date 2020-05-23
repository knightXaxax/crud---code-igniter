<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegistrationController extends CI_Controller
{

	public function index()
	{
		$this->load->view('layouts/layout', [
			'view' => 'pages/registration_page',
		]);
	}

	public function register()
	{
		$this->load->model('Student', 'student');

		$dataset = [
			'fullname' => $this->input->post('fullname'),	
			'age' => $this->input->post('age'),	
			'birthday' => $this->input->post('birthday'),	
			'address' => $this->input->post('address'),	
			'student_number' => $this->input->post('student_number'),	
			'campus' => $this->input->post('campus'),	
			'username' => $this->input->post('username'),	
			'password' => $this->input->post('password'),	
		];
		
		if($this->student->store_info($dataset) == true)
			redirect('/');
	}
}
