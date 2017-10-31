<?php
class Model_pendeposit extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

   /**************************  START INSERT QUERY ***************/
    public function insert_data($data){
        $this->db->insert('tbl_pendeposit', $data); 
        return TRUE;
    }
    /**************************  END INSERT QUERY ****************/

    /*************  START SELECT or VIEW ALL QUERY ***************/
    public function view_imbasan($id){
        $query=$this->db->query("SELECT *
								 FROM tbl_pendeposit");

		return $query->result_array();
    }
    /***************  END SELECT or VIEW ALL QUERY ***************/

    
    /*************  START SELECT or VIEW ALL QUERY ***************/
    public function view_data(){
        $query=$this->db->query("SELECT *
								 FROM tbl_pendeposit");

		return $query->result_array();
    }
    /***************  END SELECT or VIEW ALL QUERY ***************/

    public function getAll()
	{
		// $result = $this->db->get('pendeposit');
		$result = $this->db->get('tbl_pendeposit');
	
		$query = $this->db->query("select *,tbl_pendeposit.id as pendepositid 
		from tbl_pendeposit
		left join tbl_inbois on tbl_pendeposit.kod_invoice = tbl_inbois.kod_inbois
		left join tbl_kelompok on tbl_pendeposit.kod_kelompok = tbl_kelompok.kod_kelompok
		left join tbl_status on tbl_pendeposit.status = tbl_status.kod_sts ");
		
		//$this->db->select('*');
        //$this->db->from('tbl_peserta');
        //$this->db->join('tbl_program', 'tbl_peserta.kod_program = tbl_program.kod_kursus','inner');
        //$this->db->where('no_mykad',$icnum);
        //$this->db->join('manufacturers', 'manufacturers.id = vehicles.manufacturer_id','inner');
        //$this->db->join('models', 'models.id = vehicles.model_id', 'inner');
        //$result = $query->result();
		return $query->result_array();
	  }
	  
	  
	 
	   
    
    public function getInvoice()
	{
	    $query=$this->db->query("SELECT *
								 FROM tbl_pendeposit");
	
		$query = $this->db->query("select * 
		from tbl_pendeposit
		left join tbl_inbois on tbl_pendeposit.kod_invoice = tbl_inbois.kod_inbois");

		return $query->result_array();
	}
	  
	  
    public function get($u_id)
    {
        $this->db->where('id', $u_id);
        $result = $this->db->get('tbl_pendeposit');
        return $result->row_array();
    }
	  
	  
    public function get_by_kelompok($kod_kelompok)
    {
        $this->db->where('kod_kelompok', $kod_kelompok);
		$this->db->join('tbl_status', 'tbl_pendeposit.status = tbl_status.kod_sts','inner');
        $result = $this->db->get('tbl_pendeposit');
        return $result->result_array();
    }
    
    
    /*************  START EDIT PARTICULER DATA QUERY *************/
    public function edit_data($id){
        $query=$this->db->query("SELECT *
								 FROM tbl_pendeposit ks
								 WHERE ks.id = $id");
		return $query->result_array();
    }
    /*************  END EDIT PARTICULER DATA QUERY ***************/

    public function get_by_id($id)
    {
		$query = $this->db->query('SELECT * FROM tbl_pendeposit WHERE id = '.$id);
        return $query->row();
    }
    public function get_by_id_join_invoice($id)
	{
	    //$query=$this->db->query("SELECT *
		//						 FROM tbl_pendeposit");
	
		$query = $this->db->query("select * 
		from tbl_pendeposit
		left join tbl_inbois on tbl_pendeposit.kod_invoice = tbl_inbois.kod_inbois where tbl_pendeposit.id = $id");

		return $query->result_array();
	}
}

