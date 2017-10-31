<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');                    /***** LOADING HELPER TO AVOID PHP ERROR ****/
		$this->load->model('Model_pengguna','pengguna'); /* LOADING MODEL * Model_pendeposit as pendeposit */
	}


	/**************************  START FETCH OR VIEW FORM DATA ***************/
	public function index()
	{
		$this->data['view_data']= $this->pengguna->view_data();
	    $this->load->view('admin/view_pengguna', $this->data, FALSE);
	}
	/****************************  END FETCH OR VIEW FORM DATA ***************/


	/****************************  START OPEN ADD FORM FILE ******************/
	public function add_data()
	{
		$this->load->view('admin/view_tambahpengguna');
	}
	/****************************  END OPEN ADD FORM FILE ********************/

    
    /****************************  START INSERT FORM DATA ********************/
    public function submit_data()
    {
    $data = array('id' => $this->input->post('id'),
			      'id_pengguna' => $this->input->post('id_pengguna'),
			       'nama_pengguna' => $this->input->post('nama_pengguna'),
			        'emel' => $this->input->post('emel'),
			         'no_tel_bimbit' => $this->input->post('no_tel_bimbit'),
			          'kod_organisasi' => $this->input->post('kod_organisasi'),
			           'kod_sts_pengguna' => $this->input->post('kod_sts_pengguna')
			         
			      );
    
    $insert = $this->pengguna->insert_data($data);
    $this->session->set_flashdata('message', 'Makluamt anda berjaya disimpan.');
    redirect('Admin/pengguna');
    }
    /****************************  END INSERT FORM DATA ************************/


    /****************************  START FETCH OR VIEW FORM DATA ***************/
    public function view_data()
    {
    $this->data['view_data']= $this->welcome->view_data();
    $this->load->view('admin/view_pengguna', $this->data, FALSE);
    }
    /****************************  END FETCH OR VIEW FORM DATA ***************/

    
    /****************************  START OPEN EDIT FORM WITH DATA *************/
    public function edit_data($id)
    {
    $this->data['edit_data']= $this->pengguna->edit_data($id);
    $this->load->view('admin/view_kemaskinisenaraipengguna', $this->data, FALSE);
    }
    /****************************  END OPEN EDIT FORM WITH DATA ***************/


    /****************************  START UPDATE DATA *************************/
    public function update_data($id)
    {
    $data = array('id' => $this->input->post('id'),
			      'id_pengguna' => $this->input->post('id_pengguna'),
			       'nama_pengguna' => $this->input->post('nama_pengguna'),
			        'emel' => $this->input->post('emel'),
			         'no_tel_bimbit' => $this->input->post('no_tel_bimbit'),
			          'kod_organisasi' => $this->input->post('kod_organisasi'),
			           'kod_sts_pengguna' => $this->input->post('kod_sts_pengguna')
			         
			      );
    $this->db->where('id', $id);
    $this->db->update('tbl_pengguna', $data);
    $this->session->set_flashdata('message', 'Maklumat anda berjaya dikemaskini.');
    redirect('Admin/pengguna');
    }
    /****************************  END UPDATE DATA ****************************/


    /****************************  START DELETE DATA **************************/
    public function delete_data($id)
    {  
    $this->db->where('id', $id);
    $this->db->delete('tbl_kelompok');
    $this->session->set_flashdata('message', 'Maklumat anda berjaya dihapuskan.');
    redirect('Admin/kelompok');
    }
    /****************************  END DELETE DATA ***************************/

}
