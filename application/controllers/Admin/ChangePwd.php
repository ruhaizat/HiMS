<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ChangePwd extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        if ( ! $this->session->userdata('isLogin')) { 
            redirect('Login');
        }
	}

	public function index()
	{
    	$data['user'] = $this->session->userdata;

    	$this->parser->parse('admin/view_changepwd', $data);
	}

	public function logout()
	{
	       $this->session->sess_destroy();
	       redirect('Login');
	}

	
	public function ajax()
	{
		$obj = json_decode($this->input->post('datastr'));
		$mode = $obj->mode;
		
		switch($mode){
			case "CheckCurrentPassword":
				$UserID = $obj->UserID;
				$CurrentPwd = $obj->Password;
				$query = $this->db->query("SELECT * FROM tbl_pengguna WHERE id = '$UserID'");
				$userData = $query->row();
					
				if($userData->kata_laluan != $CurrentPwd) {
					echo "Current password wrong.";
				}else{
					echo "Passed";
				}
			break;
			case "UpdatePassword":
				$UserID = $obj->UserID;
				$NewPwd = $obj->Password;
				
				$dataarray = array(
					"kata_laluan" => $NewPwd
				);

				$this->db->set($dataarray);
				$this->db->where("id", $UserID);
				$this->db->update("tbl_pengguna");
				echo "Password successfully changed.";
			break;
		}
	}
}
