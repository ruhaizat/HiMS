<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_profile extends CI_Model {

   public function insert($nama_pengguna,$no_mykad,$no_tel_bimbit,$emel)
   {
      $data = array(

            'nama_pengguna' => $nama_pengguna,
            'no_mykad' => $no_mykad,
            'no_tel_bimbit' => $no_tel_bimbit,
            'emel' => $emel
            
            );
      $this->db->insert('profile', $data); 
   }

   public function getAll()
   {
      $idP = $this->session->userdata('id_pengguna');
      //$wherStr = "";
      //if(strlen($idP) == 12){
         //$icnum = substr($idP,0,6).'-'.substr($idP,6,2).'-'.substr($idP,8,4);
         $wherStr = "where tbl_pengguna.id_pengguna = '".$idP."'";
      //}else{
      //   $icnum = $this->session->userdata('id_pengguna');
      //   $wherStr = "where tbl_pengguna.no_paspot_ekad = '".$icnum."'";
      //}
      
      $query = $this->db->query("select * 
      from tbl_pengguna
      left join tbl_kumppengguna on tbl_pengguna.kod_kumppengguna = tbl_kumppengguna.kod_kumppengguna ".$wherStr);
      return $query->row();
     }

   public function get($u_id)
   {
      $this->db->where('id', $u_id);
      $result = $this->db->get('tbl_pengguna');
      return $result->row_array();
   }
   
   public function update($nama_pengguna,$no_tel,$emel,$u_id)
   {
      $data = array(
            'nama_pengguna' => $nama_pengguna,
            'no_tel_bimbit' => $no_tel,
            'emel' => $emel
        );

      $this->db->where('id_pengguna', $u_id);
      
      $this->db->update('tbl_pengguna', $data); 
   }


   public function delete($u_id)
   {
      $this->db->where('id', $u_id);
      $this->db->where("(su != 1)");
      $this->db->delete('tbl_peserta'); 
   }
}