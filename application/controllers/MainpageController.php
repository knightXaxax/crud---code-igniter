<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class MainpageController extends CI_Controller 
{
	public function index() 
	{
		$this->load->view('layouts/layout', [
			'view' => 'pages/homepage',
		]);
	}
}
