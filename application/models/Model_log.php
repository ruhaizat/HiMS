<?php
class Model_log extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
	
	public function LogActivity($LoggedUser, $Module, $Description){
		$data = array(
			"LoggedUser"	=>	$LoggedUser,
			"Module"		=>	$Module,
			"LoggedOn"		=>	date("Y-m-d H:i:s"),
			"Description"	=>	$Description,
			"IPAddress"		=>	$this->input->ip_address()
		);
        $this->db->insert('tbl_log', $data); 
	}
}