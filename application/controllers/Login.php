<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{	
        $session = $this->session->userdata('isLogin');

        if($session == FALSE) {
            $this->load->view('view_login');
        } else {
            redirect('Admin/dashboard');
        }
	}
        
       
    //just to check if empty, if not then verify function call and verified hoile returns to this function
    public function checklogin() {   // fields name, Boxes name to show, the checks functions
        //$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_verifylogin');
        
        if($this->form_validation->run() == FALSE) {
            $this->load->view('view_login');
        } 
        else {
            redirect('Admin/dashboard');
        }
    }
        
        
    public function verifylogin() {
        $ic= $this->input->post('ic');
        //$password= md5($this->input->post('password'));
        $password= $this->input->post('password');
        
        //Load the Login model for database check
        $this->load->model('Model_login');
        $result= $this->Model_login->login($ic,$password);
        
        if($result){
            foreach ($result as $user){
                $s = array();
                $s['id'] = $user->id;
                $s['id_pengguna'] = $user->id_pengguna;
                $s['nama_pengguna'] = $user->nama_pengguna;
                $s['kod_kumppengguna'] = $user->kod_kumppengguna;
                $s['status'] = $user->status;
                $s['isLogin'] = 'true';

                $this->session->set_userdata($s);
            }

            return true;
        
        } else {
            $this->form_validation->set_message('verifylogin', 'Incorrect Login credentials');
            return false;
        }
    }
}