<?php
class Model_kelompok extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

   /**************************  START INSERT QUERY ***************/
    public function insert_data($data){
        $this->db->insert('tbl_kelompok', $data); 
        return TRUE;
    }
    /**************************  END INSERT QUERY ****************/

    
    /*************  START SELECT or VIEW ALL QUERY ***************/
    public function view_data(){
        $query=$this->db->query("SELECT *
								 FROM tbl_kelompok");

		return $query->result_array();
    }
    /***************  END SELECT or VIEW ALL QUERY ***************/
    
    public function getAll()
	{
		// $result = $this->db->get('kelompok');
		$result = $this->db->get('tbl_kelompok');
	
		$query = $this->db->query("select * 
		from tbl_kelompok
		left join tbl_status on tbl_kelompok.sts_kelompok = tbl_status.nama_sts");
		
		//$this->db->select('*');
        //$this->db->from('tbl_peserta');
        //$this->db->join('tbl_program', 'tbl_peserta.kod_program = tbl_program.kod_kursus','inner');
        //$this->db->where('no_mykad',$icnum);
        //$this->db->join('manufacturers', 'manufacturers.id = vehicles.manufacturer_id','inner');
        //$this->db->join('models', 'models.id = vehicles.model_id', 'inner');
        //$result = $query->result();
		return $query->result_array();
	  }
    
    /*************  START EDIT PARTICULER DATA QUERY *************/
    public function edit_data($id){
        $query=$this->db->query("SELECT *
								 FROM tbl_kelompok ks
								 WHERE ks.kod_kelompok = $id");
		return $query->result_array();
    }
    /*************  END EDIT PARTICULER DATA QUERY ***************/

}

