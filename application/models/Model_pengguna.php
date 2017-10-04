<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_pengguna extends CI_Model {

	public function insert($id_pengguna,$nama_pengguna,$no_mykad,$emel,$no_tel_bimbit,$kod_organisasi,$kod_kumppengguna,$kod_stspengguna,$tarikh_daftar)
	{
		$data = array(
			   'id_pengguna' => $id_pengguna,
               'nama_pengguna' => $nama_pengguna,
			   'no_mykad' => $no_mykad,
			   'emel' => $emel,
			   'no_tel_bimbit' => $no_tel_bimbit,
			   'kod_organisasi' => $kod_organisasi,
			   'kod_kumppengguna' => $kod_kumppengguna,
			   'kod_stspengguna' => $kod_stspengguna,
			   'tarikh_daftar' => $tarikh_daftar
            );
		$this->db->insert('tbl_pengguna', $data); 
	}
public function test($search_term='default'){



   $this->db->select('*');
   $this->db->from('voterinfo');
   $this->db->like('firstName', $search_term['firstName']);
   $this->db->or_like('lastName', $search_term['lastName']);
   $this->db->or_like('street', $search_term['street']);
   $this->db->or_like('dob', $search_term['dob']);
   $query = $this->db->get();


   return $query->result_array();

}
	public function getAll()
	{
		// $result = $this->db->get('pengguna');
		$result = $this->db->get('tbl_pengguna');
	
		$query = $this->db->query("select * 
		from tbl_pengguna
		left join tbl_sts_pengguna on tbl_pengguna.kod_sts_pengguna = tbl_sts_pengguna.kod_sts_pengguna");
		
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
		$result = $this->db->get('tbl_pengguna');
		return $result->row_array();
	}
	
	public function update($id_pengguna,$nama_pengguna,$no_mykad,$emel,$no_tel_bimbit,$kod_organisasi,$kod_kumppengguna,$kod_stspengguna,$tarikh_daftar)
	{
		$data = array(
			   'id_pengguna' => $id_pengguna,
               'nama_pengguna' => $nama_pengguna,
			   'no_mykad' => $no_mykad,
			   'emel' => $emel,
			   'no_tel_bimbit' => $no_tel_bimbit,
			   'kod_organisasi' => $kod_organisasi,
			   'kod_kumppengguna' => $kod_kumppengguna,
			   'kod_stspengguna' => $kod_stspengguna,
			   'tarikh_daftar' => $tarikh_daftar
        );

		$this->db->where('id_pengguna', $u_id);
		$this->db->where("(su != 1)");
		$this->db->update('tbl_pengguna', $data); 
	}


	public function delete($u_id)
	{
		$this->db->where('id_pengguna', $u_id);
		$this->db->where("(su != 1)");
		$this->db->delete('tbl_pengguna'); 
	}
}