<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ArtCrafts extends CI_Controller {

	public function index()
	{
		$query = $this->M_dokumen->listAll_artcraft();
		$qpopular_post = $this->M_dokumen->getpopularpost2();
		$dataHalaman = array(  
			'query'=>$query, 
			'qpopular_post'=>$qpopular_post
        );
		$this->load->view('v_header',$dataHalaman);
		$this->load->view('artcraft/v_artcraft');
		$this->load->view('v_sidebar');
		$this->load->view('v_footer');
	}
} 
