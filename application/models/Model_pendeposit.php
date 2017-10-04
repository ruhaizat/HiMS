<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_pendeposit extends CI_Model {

	public function insert($id_pendeposit,$no_aqad,$no_TH,$nama_pendeposit,$no_mykad,$alamat1,$alamat2,$bandar,$poskod,$kod_negeri,$no_tel_rumah,$no_tel_bimbit,$kod_batch,$kod_invoice)
	{
		$data = array(
			   'id_pendeposit' => $id_pendeposit,
               'no_aqad' => $no_aqad,
               'no_TH' => $no_TH,
               'nama_pendeposit' => $nama_pendeposit,
			   'no_mykad' => $no_mykad,
			   'alamat1' => $alamat1,
			   'alamat2' => $alamat2,
			   'bandar' => $bandar,
			   'poskod' => $poskod,
			   'kod_negeri' => $kod_negeri,
			   'no_tel_rumah' => $no_tel_rumah,
			   'no_tel_bimbit' => $no_tel_bimbit,
			   'kod_batch' => $kod_batch,
			   'kod_invoice' => $kod_invoice
            );
		$this->db->insert('tbl_pendeposit', $data); 
	}

	public function getAll()
	{
		// $result = $this->db->get('pendeposit');
		$result = $this->db->get('tbl_pendeposit');
	
		$query = $this->db->query("select * 
		from tbl_pendeposit
		left join tbl_status on tbl_pendeposit.status = tbl_status.kod_sts");

		
		//$this->db->select('*');
        //$this->db->from('tbl_peserta');
        //$this->db->join('tbl_program', 'tbl_peserta.kod_program = tbl_program.kod_kursus','inner');
        //$this->db->where('no_mykad',$icnum);
        //$this->db->join('manufacturers', 'manufacturers.id = vehicles.manufacturer_id','inner');
        //$this->db->join('models', 'models.id = vehicles.model_id', 'inner');
        //$result = $query->result();
		return $query->result_array();
	  }

	public function get($u_id)
	{
		$this->db->where('id', $u_id);
		$result = $this->db->get('tbl_pendeposit');
		return $result->row_array();
	}
	
	public function update($no_aqad,$no_TH,$nama_pendeposit,$no_mykad,$alamat1,$alamat2,$bandar,$poskod,$kod_negeri,$no_tel_rumah,$no_tel_bimbit,$kod_batch,$kod_invoice)
	{
		$data = array(
			   'no_aqad' => $no_aqad,
               'no_TH' => $no_TH,
               'nama_pendeposit' => $nama_pendeposit,
			   'no_mykad' => $no_mykad,
			   'alamat1' => $alamat1,
			   'alamat2' => $alamat2,
			   'bandar' => $bandar,
			   'poskod' => $poskod,
			   'kod_negeri' => $kod_negeri,
			   'no_tel_rumah' => $no_tel_rumah,
			   'no_tel_bimbit' => $no_tel_bimbit,
			   'kod_batch' => $kod_batch,
			   'kod_invoice' => $kod_invoice
        );

		$this->db->where('id_pendeposit', $u_id);
		$this->db->where("(su != 1)");
		$this->db->update('tbl_pendeposit', $data); 
	}


	public function delete($u_id)
	{
		$this->db->where('id_pendeposit', $u_id);
		$this->db->where("(su != 1)");
		$this->db->delete('tbl_pendeposit'); 
	}
}