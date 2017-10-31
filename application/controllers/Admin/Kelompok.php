<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelompok extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');                    /***** LOADING HELPER TO AVOID PHP ERROR ****/
		$this->load->model('Model_kelompok','kelompok'); /* LOADING MODEL * Model_pendeposit as pendeposit */
	}


	/**************************  START FETCH OR VIEW FORM DATA ***************/
	public function index()
	{
		$this->data['view_data']= $this->kelompok->view_data();
	    $this->load->view('admin/view_kelompok', $this->data, FALSE);
	}
	/****************************  END FETCH OR VIEW FORM DATA ***************/


	/****************************  START OPEN ADD FORM FILE ******************/
	public function add_data()
	{
		$this->load->view('admin/view_tambahkelompok');
	}
	/****************************  END OPEN ADD FORM FILE ********************/

    
    /****************************  START INSERT FORM DATA ********************/
    public function submit_data()
    {
    $data = array('kod_kelompok' => $this->input->post('kod_kelompok'),
			      'nama_kelompok' => $this->input->post('nama_kelompok'),
			       'rujukan_TH' => $this->input->post('rujukan_TH'),			      
			        'jum_pendeposit' => $this->input->post('nama_pendeposit'),
			          'trkh_terima' => $this->input->post('trkh_terima'),
			           'trkh_muatnaik' => $this->input->post('trkh_muatnaik'),
			            'sts_kelompok' => $this->input->post('sts_kelompok')
			         
			      );
    
    $insert = $this->kelompok->insert_data($data);
    $this->session->set_flashdata('message', 'Makluamt anda berjaya disimpan.');
    redirect('Admin/kelompok');
    }
    /****************************  END INSERT FORM DATA ************************/


    /****************************  START FETCH OR VIEW FORM DATA ***************/
    public function view_data()
    {
    $this->data['view_data']= $this->welcome->view_data();
    $this->load->view('admin/view_kelompok', $this->data, FALSE);
    }
    /****************************  END FETCH OR VIEW FORM DATA ***************/

    
    /****************************  START OPEN EDIT FORM WITH DATA *************/
    public function edit_data($id)
    {
    $this->data['edit_data']= $this->kelompok->edit_data($id);
    $this->data['senarai_pendeposit']= $this->Model_pendeposit->get_by_kelompok($id);
    $this->load->view('admin/view_kemaskinikelompok', $this->data, FALSE);
    }
    /****************************  END OPEN EDIT FORM WITH DATA ***************/


    /****************************  START UPDATE DATA *************************/
    public function update_data($id)
    {
    $data = array('kod_kelompok' => $this->input->post('kod_kelompok'),
			      'nama_kelompok' => $this->input->post('nama_kelompok'),
			       'rujukan_TH' => $this->input->post('rujukan_TH'),
			        'jum_pendeposit' => $this->input->post('nama_pendeposit'),
			         'trkh_terima' => $this->input->post('trkh_terima'),
			          'trkh_muatnaik' => $this->input->post('trkh_muatnaik'),
			           'sts_kelompok' => $this->input->post('sts_kelompok')
			         
			      );
    $this->db->where('kod_kelompok', $id);
    $this->db->update('tbl_kelompok', $data);
    $this->session->set_flashdata('message', 'Maklumat anda berjaya dikemaskini.');
    redirect('Admin/kelompok');
    }
    /****************************  END UPDATE DATA ****************************/


    /****************************  START DELETE DATA **************************/
    public function delete_data($id)
    {  
    $this->db->where('kod_kelompok', $id);
    $this->db->delete('tbl_kelompok');
    $this->session->set_flashdata('message', 'Maklumat anda berjaya dihapuskan.');
    redirect('Admin/kelompok');
    }
    /****************************  END DELETE DATA ***************************/

}
