<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends CI_Controller {

	public function index($id,$category)
	{
		if ($category = "C") {
			$query = $this->M_dokumen->listSelected_kuliner($id);
		}
			$query2 = $this->M_dokumen->author_selected($id);
			$disqus =$this->disqus->get_html();
		$dataHalaman = array(  
			'query'=>$query,
			'query2'=>$query2,
			'Cate'=>"C",
			'disqus'=>$disqus
        );

		$this->load->view('v_header',$dataHalaman);
		$this->load->view('v_single-blog');
		$this->load->view('v_sidebar');
		$this->load->view('v_footer');
	}
} 
