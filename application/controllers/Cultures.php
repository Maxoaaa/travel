<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cultures extends CI_Controller {

	public function index()
	{
		$query = $this->M_dokumen->listAll_kuliner();
		$qpopular_post = $this->M_dokumen->getpopularpost();
		$dataHalaman = array(  
			'query'=>$query,
			'qpopular_post'=>$qpopular_post
        );
		$this->load->view('v_header',$dataHalaman);
		$this->load->view('culture/v_culture');
		$this->load->view('v_sidebar');
		$this->load->view('v_footer');
	}
} 
