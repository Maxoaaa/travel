<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/v_login');
		if($this->session->userdata('status') == "login"){
			redirect(site_url("dashboard"));
		}
	}
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username
			//'password' => md5($password),
			);
		//echo "cek";
		//exit();
		$cek = $this->M_login->cek_login("t_login",$username)->num_rows();
		if($cek > 0){
			$db=$this->M_login->cek_login("t_login",$username)->row();
			if(hash_verified($password ,$db->password)) 
			{
			   $data_session = array(
				'nama' => $username,
				'status' => "login"
				);
				$this->session->set_userdata($data_session);	
				redirect(site_url("dashboard"),'refresh');				
			}
			else{
				$this->session->set_flashdata('notification','Maaf Password Salah.');
				redirect('','refresh');
			}
			/*$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(site_url("dashboard"));*/
 
		}else{
			$this->session->set_flashdata('notification', 'Username atau Password tidak ditemukan');	
			  redirect(site_url());
		}
	}
	function logout(){
		$this->session->sess_destroy();
		redirect(site_url('login'));
	}
} 
