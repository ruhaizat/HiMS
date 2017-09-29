<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Document extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	    if ( ! $this->session->userdata('isLogin') || ($this->session->userdata('kod_kumppengguna') == "1" )) { 
	        redirect('login');
	    }       
	}
	public function index()
	{	
        $this->load->view('admin/view_cipta_invoice');  
    }
	
	public function cipta_dokumen_baru()
	{	
		$data['upload_ok'] = null;
		$data['upload_error'] = null;
			
        $this->load->view('admin/view_muatnaik_pukal', $data);  
	}
	
	public function jana_invoice(){
		$tarikhArr = explode("/", $this->input->post("tarikh"));
		
		$data["tarikh"] = $tarikhArr[0].$tarikhArr[1].$tarikhArr[2];
		$data["no_kelompok"] = $this->input->post("no_kelompok");
		$data["no_inbois"] = $this->input->post("no_inbois");
		$data["services_fees"] = $this->input->post("services_fees");
		$data["a_services_fees"] = 35 * $data["services_fees"];
		$data["gst"] = $this->input->post("gst");
		$data["a_gst"] = 2.1 * $data["gst"];
		$data["disbursement"] = $this->input->post("disbursement");
		$data["a_disbursement"] = 140 * $data["disbursement"];
		
		
		$data = array(
		   'tarikh' => $tarikhArr[2].'-'.$tarikhArr[1].'-'.$tarikhArr[0],
		   'no_kelompok' => $data["no_kelompok"],
		   'no_inbois' => $data["no_inbois"],
		   'service_fee' => $data["services_fees"],
		   'gst' => $data["gst"],
		   'disbursement' => $data["disbursement"]
		);

		$this->db->insert('tbl_inbois', $data); 
		
		$html = $this->load->view('admin/view_jana_invoice', $data, true);
		
		$this->load->library('M_pdf');
		
		$kmpdf = new mPDF("c", "A4", 0, "", 15, 15, 5, 5, 0, 0);
        
		$kmpdf->WriteHTML($html);
        
		ob_clean();
		
		if (isset($_POST['buttonDownload'])) {
			$kmpdf->Output("test.pdf", "D");
		} elseif(isset($_POST['buttonPrint'])) {
			$kmpdf->Output("test.pdf", "I");
		}
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
	
	function muatnaik_pukal(){
		$config['upload_path']		='./assets/uploads';
		$config['allowed_types']	= 'csv';
		$config['max_size']			= '10240';
			
		$this->load->library('upload', $config);
			
			$total_updates = 0;			
			$total_new = 0;		
		
		if ($this->upload->do_upload('file')){

			$data = $this->upload->data();	
			$row = 0;			
			
			if (($handle = fopen(base_url().'assets/uploads/'.$data['file_name'], 'r')) !== FALSE) {
			    while (($data = fgetcsv($handle, 1000, ',')) !== FALSE) {
			        $num = count($data);
			        if ($row == 0){
				        for ($c=0; $c < $num; $c++) {
							echo $data[$c];
				        	$colnames[$c] = $data[$c];
				        }
			        } else {
				        for ($c=0; $c < $num; $c++) {

				            $rows[$row][$colnames[$c]] = $data[$c];
				        }
				        
			        }
			        $row++;
			    }
			    fclose($handle);
			}
			foreach ($rows as $row){
				$ID = $row['id_pendeposit'];				
				$query = $this->db->query("SELECT * FROM tbl_pendeposit WHERE id_pendeposit = ?", array($ID));
				if ($query->num_rows()){
					//$this->db->update("tbl_pendeposit", $row, "id_pendeposit = '{$ID}'");
					$total_updates++;
				} else {
					$this->db->insert("tbl_pendeposit", $row);
					$total_new++;
				}
			
			}
			
			$data['upload_ok'] = true;
			$data['upload_error'] = false;
			
		} else {
			$data['upload_ok'] = false;
			$data['upload_error'] = true;
			$data['upload_error_message'] = $this->upload->display_errors();
		}
		
		$data['tab'] = 'main';
		
		$data['total_updates'] 	= $total_updates;
		$data['total_new']		= $total_new;
		
        $this->load->view('admin/view_muatnaik_pukal', $data); 
	}
}

