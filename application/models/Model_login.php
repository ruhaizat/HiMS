<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_login extends CI_Model {

	public function login($ic,$password)
	{
        $this->db->where('id_pengguna', $ic);
		$this->db->where('kata_laluan', $password);
		$query = $this->db->get('tbl_pengguna');
        if($query->num_rows()==1) {
            return $query->result();               
        } else {
            return false;
        }
	}
}
		
