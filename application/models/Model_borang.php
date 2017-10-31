<?php
class Model_borang extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

   /**************************  START INSERT QUERY ***************/
    public function insert_data($data){
        $this->db->insert('tbl_borang', $data); 
        return TRUE;
    }
    /**************************  END INSERT QUERY ****************/

    
    /*************  START SELECT or VIEW ALL QUERY ***************/
    public function view_data(){
        $query=$this->db->query("SELECT *
								 FROM tbl_borang");

		return $query->result_array();
    }
    /***************  END SELECT or VIEW ALL QUERY ***************/

    public function getAll()
	{
		$result = $this->db->get('tbl_borang');
	
		$query = $this->db->query("select * 
		from tbl_borang
		left join tbl_jenis_borang on tbl_borang.id_borang = tbl_jenis_borang.kod_jenisborang");
	
		return $query->result_array();
	  }
    
    /*************  START EDIT PARTICULER DATA QUERY *************/
    public function edit_data($id){
        $query=$this->db->query("SELECT *
								 FROM tbl_borang ks
								 WHERE ks.id = $id");
		return $query->result_array();
    }
    /*************  END EDIT PARTICULER DATA QUERY ***************/

}

