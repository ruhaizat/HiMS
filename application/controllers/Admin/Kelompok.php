<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kelompok extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	    if ( ! $this->session->userdata('isLogin') || ($this->session->userdata('kod_kumppengguna') == "1" )) { 
	        redirect('login');
	    }

		//$this->load->database();
		$this->load->model('model_kelompok');
                
	}
	public function index()
	{	
        $data['emp'] = $this->model_kelompok->getAll();

        $this->parser->parse('admin/view_kelompok', $data);  
    }

	public function add()
	{	
		if(!$this->input->post('buttonSubmit'))
		{
			$data['message'] = '';
			$this->load->view('admin/view_tambahkelompok', $data);
		}
		else
		{
			//$this->load->library('form_validation');
			if($this->form_validation->run('addemp'))
			{
				$id_kelompok = $this->input->post('id_kelompok');
                $nama_kelompok = $this->input->post('nama_kelompok');
                $jum_pendeposit = $this->input->post('jum_pendeposit');
   				$trkh_muatnaik = $this->input->post('trkh_muatnaik');	
				$trkh_kemaskini = $this->input->post('trkh_kemaskini');				
				$this->model_pengguna->insert($$id_kelompok,$nama_kelompok,$jum_pendeposit,$trkh_muatnaik,$trkh_kemaskini);
				$this->session->set_flashdata('message','Employee Successfully Created.');
				redirect(base_url('admin/pengguna'));
			}
			else
			{
				$data['message'] = validation_errors();
				$this->load->view('admin/view_tambahkelompok', $data);
			}
		}
	}

	public function edit($cid)
	{	
		if(!$this->input->post('buttonSubmit'))
		{
			$data['message'] = '';
			$userRow = $this->model_kelompok->get($cid);
			$data['userRow'] = $userRow;
			$this->load->view('admin/view_editkelompok', $data);
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
				$this->model_kelompok->update($f_name,$l_name,$u_bday,$u_position,$u_type,$u_pass,$u_mobile,$u_gender,$u_address,$u_id);
				redirect(base_url('admin/kelompok'));
			}
			else
			{
				$data['message'] = validation_errors();  //data ta message name er lebel er kase pathay
				$this->load->view('view_kelompok', $data);
			}
		}
	}

	public function delete($cid)
	{	
        $this->model_kelompok->delete($cid);
        $this->session->set_flashdata('message','Kelompok telah berjaya dihapuskan.');
        redirect(base_url('admin/kelompok'));
	}
}

