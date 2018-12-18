<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah extends CI_Controller {
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(site_url("login"));
		} 
	}
	public function index()
	{
		$query = $this->M_dokumen->get_kategori_post();
		$dataHalaman = array(  
			'query'=>$query
        );
		$this->load->view('admin/v_header',$dataHalaman);
		$this->load->view('admin/v_tambah'); 
		$this->load->view('admin/v_footer');
	}
	 public function savedok()
    {     
      if($this->input->post('btnUpload') == "Upload"){
              $config['upload_path'] = './assett/img/culinaries/';
              $config['allowed_types'] = 'gif|jpg|png|*';
              $this->load->library('upload', $config);                
                        if ( ! $this->upload->do_upload('filepdf'))
                        {
                                $error = array('error' => $this->upload->display_errors());

                                //$this->load->view('upload_form', $error);
                        }
                        else
                        {
                                $data = array('upload_data' => $this->upload->data());                              
                        }
            $judul = $this->input->post('judul', TRUE);
            $kategori = $this->input->post('kategori', TRUE);
            $editor2 = $this->input->post('editor2', TRUE);     
            $upload = $this->upload->data('file_name');    
              $data = array(
                'judul' => $judul,
                'kategori' => $kategori,          
                'deskripsi'=> $editor2,
                'tag'=> 'tag',
                'author'=> 'Aqil Halim',
                'url_image'=> $upload
                //'created_at'=>NOW();
              );       
              $query= $this->M_dokumen->simpanDok($data);
                //panggil fungsi simpanUser pada User_model
            //$query= $this->M_dokumen->simpanDok($data);
           if ($query) {
              redirect(site_url('dashboard'));
            //print_r($stan);
           }
           else{
              redirect(site_url('dashboard'));
           }
      }
            
    }
} 
