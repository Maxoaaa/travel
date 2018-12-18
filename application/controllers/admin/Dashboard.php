<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(site_url("login"));
		} 
	}
	public function index()
	{
		$query = $this->M_dokumen->listAll_post();
		$dataHalaman = array(  
			'query'=>$query			
        ); 
		$this->load->view('admin/v_header',$dataHalaman);
		$this->load->view('admin/v_dashboard'); 
		$this->load->view('admin/v_footer');
	}
	public function deletedok($id){
		$this->M_dokumen->delete_post($id);
		redirect('dashboard');
	}
	public function editdok($id) 
	{ 
		$query = $this->M_dokumen->listEdit($id);
		$get_kategori_post = $this->M_dokumen->get_kategori_post();
		$dataHalaman = array( 
			'query' =>  $query,
			'get_kategori_post' =>  $get_kategori_post
        );

		$this->load->view('admin/v_header',$dataHalaman);
		$this->load->view('admin/v_edit');
		$this->load->view('admin/v_footer');
	}
	public function updatedok(){
        if ($this->input->post('btnUpload') == "Upload") {
 			$judul = $this->input->post('judul', TRUE);
            $kategori = $this->input->post('kategori', TRUE);
            $editor2 = $this->input->post('editor2', TRUE);
			$id = $this->input->post('id', TRUE);
          
              $data = array(
				'judul' => $judul,
                'kategori' => $kategori,          
                'deskripsi'=> $editor2
                //'created_at'=>NOW();
              );              
              $query= $this->M_dokumen->update_post($data,$id);
           
         
          if ($query) {
            redirect("dashboard");
          }
          else{
            redirect("dashboard");
          }
        }
	}
} 
 