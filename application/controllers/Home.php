<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{ 
		$query = $this->M_dokumen->listLimit_destination2();
		$query2 = $this->M_dokumen->listLimit_destination3();
		$query3 = $this->M_dokumen->listLimit_culture();
		$query3b = $this->M_dokumen->listLimit_artcraft();
		$query3c = $this->M_dokumen->listLimit_adventure();
		$query3d = $this->M_dokumen->listLimit_news();
		$query4 = $this->M_dokumen->listLimit_latepost();
		$dataHalaman = array(  //listLimit_latepost
			'query'=>$query,
			'query2'=>$query2,
			'query3'=>$query3,
			'query3b'=>$query3b,
			'query3c'=>$query3c,
			'query3d'=>$query3d,
			'query4'=>$query4
        ); 
		$this->load->view('v_header',$dataHalaman);
		$this->load->view('v_home');
		$this->load->view('v_footer');
	}
} 
