<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FloraFauna extends CI_Controller {

	public function index()
	{
		$query = $this->M_dokumen->listAll_kuliner();
		$qpopular_post = $this->M_dokumen->getpopularpost2();
		$dataHalaman = array(  
			'query'=>$query,
			'qpopular_post'=>$qpopular_post
        );
		$this->load->view('v_header',$dataHalaman);
		$this->load->view('florafauna/v_florafauna');
		$this->load->view('v_sidebar');
		$this->load->view('v_footer');
	}
} 
