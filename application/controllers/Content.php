<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends CI_Controller {

	public function index($id)
	{
			$cek = $this->M_dokumen->listAll2($id)->num_rows();
			if ($cek >0) {
				$query = $this->M_dokumen->listAll($id);
			}else {
				$query = $this->M_dokumen->listAll(1);
			}
			//print_r($cek);exit();
			$query2 = $this->M_dokumen->author_selected($id);
			//$qpopular_post = $this->M_dokumen->getpopularpost();
			$qpopular_post = $this->M_dokumen->getpopularpost2();
			$disqus =$this->disqus->get_html();
		$dataHalaman = array(  
			'query'=>$query,
			'query2'=>$query2,
			'Cate'=>"C",
			'qpopular_post'=>$qpopular_post,
			'disqus'=>$disqus
        );

		$this->load->view('v_header',$dataHalaman);
		$this->load->view('v_single-blog');
		$this->load->view('v_sidebar');
		$this->load->view('v_footer');
	}
} 
