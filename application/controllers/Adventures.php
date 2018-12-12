<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class adventures extends CI_Controller {

	public function index()
	{
		$query = $this->M_dokumen->listAll_kuliner();
		$qpopular_post = $this->M_dokumen->getpopularpost();
		$dataHalaman = array(  
			'query'=>$query,
			'qpopular_post'=>$qpopular_post
        );
		$this->load->view('v_header',$dataHalaman);
		$this->load->view('adventure/v_adventure');
		$this->load->view('v_sidebar');	
		$this->load->view('v_footer');
	}
} 
