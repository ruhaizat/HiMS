<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_login extends CI_Model {

	public function login($ic,$password)
	{				
		$this->load->library('bcrypt');
		$this->db->where('id_pengguna', $ic);
		$query = $this->db->get('tbl_pengguna');
		if($query->num_rows()==1) {
			$queryB = $this->db->query("SELECT kata_laluan FROM tbl_pengguna WHERE id_pengguna = $ic");
			if($this->bcrypt->check_password($password, $queryB->row()->kata_laluan) == true) {
				return $query->result();  
			}else{
				return false;
			}
		}else{
			return false;
		}	
	}
}
		
