<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if ( ! $this->session->userdata('isLogin')) { 
            redirect('login');
        }
        
        $this->load->model('Model_profile');
}

    public function index()
    {
        $data['udata']=$this->session->userdata;
        $data['profile'] = $this->Model_profile->getAll();

        //$data['manufacturers'] = $this->model_manufacturer->getAllManufacturers();
        //$data['models'] = $this->model_car_model->getAllModels();
        
        //$this->load->view('view_vehicle', $data); 
        $this->load->view('admin/view_profile', $data);   
    }
	
	public function kemaskini(){
		//if($this->form_validation->run('editemp'))
		//{
			$nama_pengguna = $this->input->post('nama_pengguna');
            $emel = $this->input->post('emel');
            $no_tel = $this->input->post('no_tel');
            $u_id = $this->input->post('u_id');
			$this->Model_profile->update($nama_pengguna,$no_tel,$emel,$u_id);
			redirect(base_url('Admin/Profile'));
		//}
		//else
		//{
		//	$data['message'] = validation_errors();  //data ta message name er lebel er kase pathay
		//	$this->load->view('view_profile', $data);
		//}
	}

    public function add()
    {   
        if(!$this->input->post('buttonSubmit'))
        {
            $data['message'] = '';
            $this->load->view('admin/view_profile', $data);
        }
        else
        {
            //$this->load->library('form_validation');
            if($this->form_validation->run('addemp'))
            {
                $nama_pengguna = $this->input->post('nama_pengguna');
                $no_mykad = $this->input->post('no_mykad');
                $no_tel_bimbit = $this->input->post('no_tel_bimbit');
                $emel = md5($this->input->post('emel'));
                $this->model_profil2->insert($nama_pengguna,$no_mykad,$no_tel_bimbit,$emel);
                $this->session->set_flashdata('message','Profile Successfully Created.');
                redirect(base_url('admin/profile'));
            }
            else
            {
                $data['message'] = validation_errors();
                $this->load->view('admin/view_profile', $data);
            }
        }
    }

    public function edit($u_id)
    {   
        if(!$this->input->post('buttonSubmit'))
        {
            $data['message'] = '';
            $profile = $this->Model_profile->get($u_id);
            $data['profile'] = $profile;
            $this->load->view('admin/view_profile', $data);
        }
        else
        {
            if($this->form_validation->run('editemp'))
            {
                $nama_pengguna = $this->input->post('nama_pengguna');
                $no_mykad = $this->input->post('no_mykad');
                $no_tel_bimbit = $this->input->post('no_tel_bimbit');
                $emel = ($this->input->post('emel'));
                $this->model_profil2->insert($nama_pengguna,$no_mykad,$no_tel_bimbit,$emel,$u_id);
                redirect(base_url('admin/profile'));
            }
            else
            {
                $data['message'] = validation_errors();  //data ta message name er lebel er kase pathay
                $this->load->view('view_profile', $data);
            }
        }
    }

    public function delete($cid)
    {   
        $this->Model_profile->delete($cid);
        $this->session->set_flashdata('message','Peserta Successfully deleted.');
        redirect(base_url('admin/profile'));
    }
}

