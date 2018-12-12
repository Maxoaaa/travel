<?php

defined('BASEPATH') OR exit('Anda tidak boleh mengakses file ini secara langsung'); 
class M_login extends CI_Model{	

    function cek_login($table,$usn){		
		$this->db->where("email", $usn);		
		$this->db->or_where("username",$usn);
		$query = $this->db->get("t_login");
    	return $query;
		//return $this->db->get_where("t_login",$where);
	}	
	

}

?>