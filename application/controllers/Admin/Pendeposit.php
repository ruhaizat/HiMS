<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pendeposit extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	    if ( ! $this->session->userdata('isLogin') || ($this->session->userdata('kod_kumppengguna') == "1" )) { 
	        redirect('login');
	    }

		//$this->load->database();
		$this->load->model('model_pendeposit');
                
	}
	public function index()
	{	
        $data['emp'] = $this->model_pendeposit->getAll();

        $this->parser->parse('admin/view_pendeposit', $data);  
    }

	public function add()
	{	
		if(!$this->input->post('buttonSubmit'))
		{
			$data['message'] = '';
			$this->load->view('admin/view_tambahpendeposit', $data);
		}
		else
		{
			//$this->load->library('form_validation');
			if($this->form_validation->run('addemp'))
			{
                $no_aqad = $this->input->post('no_aqad');
				$no_TH = $this->input->post('no_TH');
                $nama_pendeposit = $this->input->post('nama_pendeposit');
                $no_mykad = $this->input->post('no_mykad');
                $alamat1 = $this->input->post('alamat1');
                $alamat2 = $this->input->post('alamat2');
                $bandar = $this->input->post('bandar');
                $poskod = $this->input->post('poskod');
                $kod_negeri = $this->input->post('kod_negeri');
                $no_tel_rumah = $this->input->post('no_tel_rumah');
				$no_tel_bimbit = $this->input->post('no_tel_bimbit');
				$kod_batch = $this->input->post('kod_batch');
				$kod_invoice = $this->input->post('kod_invoice');
				$this->model_pendeposit->insert($id_pendeposit,$no_aqad,$no_TH,$nama_pendeposit,$no_mykad,$alamat1,$alamat2,$bandar,$poskod,$kod_negeri,$no_tel_rumah,$no_tel_bimbit,$kod_batch,$kod_invoice);
				$this->session->set_flashdata('message','Employee Successfully Created.');
				redirect(base_url('admin/pendeposit'));
			}
			else
			{
				$data['message'] = validation_errors();
				$this->load->view('admin/view_tambahpendeposit', $data);
			}
		}
	}

	public function edit($cid)
	{	
		if(!$this->input->post('buttonSubmit'))
		{
			$data['message'] = '';
			$userRow = $this->model_pendeposit->get($cid);
			$data['userRow'] = $userRow;
			$this->load->view('admin/view_editpendeposit', $data);
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
				$this->load->view('view_pendeposit', $data);
			}
		}
	}

	public function delete($cid)
	{	
        $this->model_pendeposit->delete($cid);
        $this->session->set_flashdata('message','Employee Successfully deleted.');
        redirect(base_url('admin/pendeposit'));
	}
}

