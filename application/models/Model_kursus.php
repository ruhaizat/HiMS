<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_kursus extends CI_Model {

	public function insert($featured,$tajuk_kursus,$jenis_kursus,$kursus_id,$status,$jenis_sijil,$nama_peserta,$no_mykad,$tarikh1_kursus,$tarikh2_kursus,$status,$no_siri)
	{
		$data = array(
			'featured' => $featured,
			'tajuk_kursus' => $tajuk_kursus,
			'jenis_kursus' => $jenis_kursus,
			'kursus_id' => $kursus_id,
			'status' => $status,
			'jenis_sijil' => $jenis_sijil,
			'nama_peserta' => $nama_peserta,
			'no_mykad' => $no_mykad,
			'tarikh1_kursus' => $tarikh1_kursus,
			'tarikh2_kursus' => $tarikh2_kursus,
			'status' => $status,
			'no_siri' => $no_siri
			
			
        );

		$this->db->insert('kursus', $data); 
	}

		public function getAll()
	{
		$idP = $this->session->userdata('id_pengguna');
		$wherStr = "";
		// $result = $this->db->get('vehicles');
		if(strlen($idP) == 12){
			$icnum = substr($idP,0,6).'-'.substr($idP,6,2).'-'.substr($idP,8,4);
			$wherStr = "where tbl_peserta.no_mykad = '".$icnum."'";
		}else{
			$icnum = $this->session->userdata('id_pengguna');
			$wherStr = "where tbl_peserta.no_paspot_ekad = '".$icnum."'";
		}
		
		$query = $this->db->query("select * 
		from tbl_peserta 
		left join tbl_program on tbl_peserta.kod_program = tbl_program.kod_kursus 
		left join tbl_jeniskursus on tbl_peserta.jenis_kursus = tbl_jeniskursus.kod_sts 
		left join tbl_kategorisijil on tbl_peserta.kod_jenissijil = tbl_kategorisijil.kod_sijil 
		left join tbl_sts_bayaran on tbl_peserta.kod_stsbyrn = tbl_sts_bayaran.kod_sts_bayaran 
		left join tbl_status on tbl_peserta.kod_hadir = tbl_status.kod_sts ".$wherStr);
		
		//$this->db->select('*');
        //$this->db->from('tbl_peserta');
        //$this->db->join('tbl_program', 'tbl_peserta.kod_program = tbl_program.kod_kursus','inner');
        //$this->db->where('no_mykad',$icnum);
        //$this->db->join('manufacturers', 'manufacturers.id = vehicles.manufacturer_id','inner');
        //$this->db->join('models', 'models.id = vehicles.model_id', 'inner');
        //$result = $query->result();
		return $query->result_array();
	  }

	  public function kursussayaList()
	{
		$this->db->select('*');
                $this->db->from('customer');
                $this->db->join('vehicles', 'customer.vehicle_id = vehicles.vehicle_id','inner');
                $this->db->join('manufacturers', 'manufacturers.id = vehicles.manufacturer_id','inner');
                $this->db->join('models', 'models.id = vehicles.model_id', 'inner');

                $result = $this->db->get();
                //echo $this->db->last_query();
		return $result->result_array();
	}
        
	public function get($v_id)
	{
		$this->db->where('vehicle_id', $v_id);
		$result = $this->db->get('vehicles');
		return $result->row_array();
	}
}