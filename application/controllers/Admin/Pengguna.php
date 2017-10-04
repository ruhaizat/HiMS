<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengguna extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	    if ( ! $this->session->userdata('isLogin') || ($this->session->userdata('kod_kumppengguna') == "1" )) { 
	        redirect('login');
	    }

		//$this->load->database();
		$this->load->model('model_pengguna');
                
	}
	public function index()
	{	
        $data['emp'] = $this->model_pengguna->getAll();

        $this->parser->parse('admin/view_pengguna', $data);  
    }

	public function add()
	{	
		if(!$this->input->post('buttonSubmit'))
		{
			$data['message'] = '';
			$this->load->view('admin/view_tambahpengguna', $data);
		}
		else
		{
			//$this->load->library('form_validation');
			if($this->form_validation->run('addemp'))
			{
				$id_pengguna = $this->input->post('id_pengguna');
                $nama_pengguna = $this->input->post('nama_pengguna');
                $no_mykad = $this->input->post('no_mykad');
                $emel = $this->input->post('emel');
				$no_tel_bimbit = $this->input->post('no_tel_bimbit');
				$kod_organisasi = $this->input->post('kod_organisasi');
				$kod_kumppengguna = $this->input->post('kod_kumppengguna');
				$kod_sts_pengguna = $this->input->post('kod_sts_pengguna');
				$tarikh_daftar = $this->input->post('tarikh_daftar');				
				$this->model_pengguna->insert($id_pengguna,$nama_pengguna,$no_mykad,$emel,$no_tel_bimbit,$kod_organisasi,$kod_kumppengguna,$kod_sts_pengguna,$tarikh_daftar);
				$this->session->set_flashdata('message','Employee Successfully Created.');
				redirect(base_url('admin/pengguna'));
			}
			else
			{
				$data['message'] = validation_errors();
				$this->load->view('admin/view_tambahpengguna', $data);
			}
		}
	}

	public function edit($cid)
	{	
		if(!$this->input->post('buttonSubmit'))
		{
			$data['message'] = '';
			$userRow = $this->model_pengguna->get($cid);
			$data['userRow'] = $userRow;
			$this->load->view('admin/view_editpengguna', $data);
		}
		else
		{
			if($this->form_validation->run('editemp'))
			{
				$f_name = $this->input->post('f_name');
                $l_name = $this->input->post('l_name');
                $u_bday = $this->input->post('u_bday');
                $u_position = $this->input->post('u_position');
                $u_type = $this->input->post('u_type');
                $u_pass = md5($this->input->post('u_pass'));
                $u_mobile = $this->input->post('u_mobile');
                $u_gender = $this->input->post('u_gender');
                $u_address = $this->input->post('u_address');
				$u_id = $this->input->post('id_pendeposit');
				$this->model_employee->update($f_name,$l_name,$u_bday,$u_position,$u_type,$u_pass,$u_mobile,$u_gender,$u_address,$u_id);
				redirect(base_url('admin/pendeposit'));
			}
			else
			{
				$data['message'] = validation_errors();  //data ta message name er lebel er kase pathay
				$this->load->view('view_pengguna', $data);
			}
		}
	}

	public function delete($cid)
	{	
        $this->model_pengguna->delete($cid);
        $this->session->set_flashdata('message','Pengguna telah berjaya dihapuskan.');
        redirect(base_url('admin/pengguna'));
	}
}

