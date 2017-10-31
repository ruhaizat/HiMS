<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendeposit extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');                    /***** LOADING HELPER TO AVOID PHP ERROR ****/
		$this->load->model('Model_pendeposit','pendeposit'); /* LOADING MODEL * Model_pendeposit as pendeposit */
	}


	/**************************  START FETCH OR VIEW FORM DATA ***************/
	public function index()
	{
		$this->data['view_data']= $this->pendeposit->getAll();
	    $this->load->view('admin/view_pendeposit', $this->data, FALSE);
	    //$this->load->view('admin/view_kemaskinipendeposit', $this->data, FALSE);
	}
	/****************************  END FETCH OR VIEW FORM DATA ***************/


	/****************************  START OPEN ADD FORM FILE ******************/
	public function add_data()
	{
		$this->load->view('admin/view_tambahsenaraipengguna');
	}
	/****************************  END OPEN ADD FORM FILE ********************/

    
    /****************************  START INSERT FORM DATA ********************/
    public function submit_data()
    {
    $data = array('id' => $this->input->post('id'),
                  'kod_invoice' => $this->input->post('kod_invoice'),
			      'id_pendeposit' => $this->input->post('id_pendeposit'),
			       'nama_pendeposit' => $this->input->post('nama_pendeposit'),
			        'no_TH' => $this->input->post('no_TH'),
			         'no_aqad' => $this->input->post('no_aqad'),
			         'status' => $this->input->post('status')
			      );
    
    $insert = $this->pendeposit->insert_data($data);
    $this->session->set_flashdata('message', 'Maklumat anda berjaya disimpan.');
    redirect('Admin/pendeposit');
    }
    /****************************  END INSERT FORM DATA ************************/


    /****************************  START FETCH OR VIEW FORM DATA ***************/
    public function view_imbasan($id)
    {
    $this->data['view_imbasan']= $this->pendeposit->view_imbasan($id);
    $this->load->view('admin/view_imbasan', $this->data, FALSE);
    }
    /****************************  END FETCH OR VIEW FORM DATA ***************/

    
    /****************************  START OPEN EDIT FORM WITH DATA *************/
    public function edit_data($id)
    {
    $this->data['edit_data']= $this->pendeposit->get_by_id_join_invoice($id);
    //$this->data['edit_data']= $this->pendeposit->getInvoice($id);
    $this->load->view('admin/view_kemaskinipendeposit', $this->data, FALSE);
    }
    /****************************  END OPEN EDIT FORM WITH DATA ***************/


    /****************************  START UPDATE DATA *************************/
    public function update_data($id)
    {
    $data = array('id' => $this->input->post('id'),
			      'id_pendeposit' => $this->input->post('id_pendeposit'),
			       'nama_pendeposit' => $this->input->post('nama_pendeposit'),
			        'no_TH' => $this->input->post('no_TH'),
			         'no_aqad' => $this->input->post('no_aqad'),
			          'no_mykad' => $this->input->post('no_mykad'),
			           'alamat1' => $this->input->post('alamat1'),
			            'alamat2' => $this->input->post('alamat2'),
			             'bandar' => $this->input->post('bandar'),
			              'poskod' => $this->input->post('poskod'),
			               'kod_negeri' => $this->input->post('kod_negeri'),
			                'no_tel_rumah' => $this->input->post('no_tel_rumah'),
			                 'no_tel_bimbit' => $this->input->post('no_tel_bimbit'),
			                  'kod_kelompok' => $this->input->post('kod_kelompok'),
			                   'no_inbois' => $this->input->post('kod_invoice'),
			                     'status' => $this->input->post('status'));
    $this->db->where('id', $id);
    $this->db->update('tbl_pendeposit', $data);
    
    $this->session->set_flashdata('message', 'Maklumat anda berjaya dikemaskini.');
    redirect('Admin/pendeposit');
    }
    /****************************  END UPDATE DATA ****************************/


    /****************************  START DELETE DATA **************************/
    public function delete_data($id)
    {  
    $this->db->where('id', $id);
    $this->db->delete('tbl_pendeposit');
    $this->session->set_flashdata('message', 'Maklumat anda berjaya dihapuskan.');
    redirect('Admin/pendeposit');
    }
    /****************************  END DELETE DATA ***************************/

	public function popup($id){
		$data['edit_data']= $this->Model_pendeposit->get_by_id($id);
		$this->load->view('admin/view_popuppendeposit', $data, FALSE);
	}
	
	public function update_popup($id){
		$id_pendeposit = $this->input->post("id_pendeposit");
		$nama_pendeposit = $this->input->post("nama_pendeposit");
		$alamat_pendeposit = $this->input->post("alamat1");
		$poskod = $this->input->post("poskod");
		$bandar = $this->input->post("bandar");
		$negeri = $this->input->post("kod_negeri");
		$no_akaun_th = $this->input->post("no_TH");
		$no_akad = $this->input->post("no_aqad");
		$file1 = "";
		$file2 = "";
		
		$fileUpdate = false;
		
		$config['upload_path']          = 'assets/failPendeposit/';
		$config['allowed_types']        = 'pdf|doc|docx';
		$config['max_size']             = 2048;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('file1'))
		{
				$data = array('upload_data' => $this->upload->data());
				$file1 = $this->upload->data('file_name');
				$fileUpdate = true;
		}
		
		if ($this->upload->do_upload('file2'))
		{
				$data = array('upload_data' => $this->upload->data());
				$file2 = $this->upload->data('file_name');
				$fileUpdate = true;
		}	
		
		if($fileUpdate == true){
			$dataArr = array(
				'id_pendeposit' 	=> $id_pendeposit,
				'nama_pendeposit' 	=> $nama_pendeposit,
				'alamat1' 			=> $alamat_pendeposit,
				'poskod' 			=> $poskod,
				'bandar' 			=> $bandar,
				'kod_negeri' 		=> $negeri,
				'no_TH' 			=> $no_akaun_th,
				'no_aqad' 			=> $no_akad,
				'fail1' 			=> $file1,
				'fail2' 			=> $file2
			);				
		}else{
			$dataArr = array(
				'id_pendeposit' 	=> $id_pendeposit,
				'nama_pendeposit' 	=> $nama_pendeposit,
				'alamat1' 			=> $alamat_pendeposit,
				'poskod' 			=> $poskod,
				'bandar' 			=> $bandar,
				'kod_negeri' 		=> $negeri,
				'no_TH' 			=> $no_akaun_th,
				'no_aqad' 			=> $no_akad
			);					
		}
				
		$this->db->where('id', $id);
		$this->db->update('tbl_pendeposit', $dataArr);
		
		echo "<script>alert('Kemaskini berjaya!');window.close();</script>";
	}
}
