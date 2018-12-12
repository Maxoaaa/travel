<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Culinaries extends CI_Controller {

	public function index()
	{
		/*$usan = $this->session->userdata('nama');
		$kue = $this->M_login->hak_ak($usan); 
		$query_tampil_tahun = $this->M_dokumen->tampil_tahun(); */
		$query = $this->M_dokumen->listAll_kuliner();
		$qpopular_post = $this->M_dokumen->getpopularpost();
		$dataHalaman = array(  
			'query'=>$query,
			'qpopular_post'=>$qpopular_post
        );

		$this->load->view('v_header',$dataHalaman);
		$this->load->view('culinar/v_culinar');
		$this->load->view('v_sidebar');
		$this->load->view('v_footer');
	}
} 
