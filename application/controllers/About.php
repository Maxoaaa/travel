<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$this->load->view('v_header');
		$this->load->view('about/v_about');
		$this->load->view('v_footer');
	}
} 
