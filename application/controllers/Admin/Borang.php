<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Borang extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');                    /***** LOADING HELPER TO AVOID PHP ERROR ****/
		$this->load->model('Model_borang','borang'); /* LOADING MODEL * Model_borang as borang */
	}


	/**************************  START FETCH OR VIEW FORM DATA ***************/
	public function index()
	{
		$query = $this->db->query("select * from tbl_kelompok");
		
		$data["senarai_borang"] = $query->result();
		
        $this->load->view('admin/view_borang', $data);
	}
	/****************************  END FETCH OR VIEW FORM DATA ***************/


	/****************************  START OPEN ADD FORM FILE ******************/
	public function add_data()
	{
		$this->load->view('admin/view_borang');
		$this->data['view_data']= $this->borang->getAll();
	}
	/****************************  END OPEN ADD FORM FILE ********************/

    
    /****************************  START INSERT FORM DATA ********************/
    public function submit_data()
    {
    $data = array('id' => $this->input->post('id'),
			      'id_borang' => $this->input->post('id_borang'),
			       'id_pendeposit' => $this->input->post('id_pendeposit'),
			        'kod_kelompok' => $this->input->post('kod_kelompok'),
			         'kod_jenisborang' => $this->input->post('kod_jenisborang'),
                      'id_pengguna' => $this->input->post('id_pengguna'),
                       'tarikh_jana' => $this->input->post('tarikh_jana')
			      );
    
    $insert = $this->borang->insert_data($data);
    $this->session->set_flashdata('message', 'Makluamt anda berjaya disimpan.');
    redirect('Admin/borang');
    }
    /****************************  END INSERT FORM DATA ************************/


    /****************************  START FETCH OR VIEW FORM DATA ***************/
    public function view_data()
    {
    $this->data['view_data']= $this->borang->view_data();
    $this->load->view('admin/view_borang', $this->data, FALSE);
    }
    /****************************  END FETCH OR VIEW FORM DATA ***************/

    
    /****************************  START OPEN EDIT FORM WITH DATA *************/
    public function edit_data($id)
    {
    $this->data['edit_data']= $this->borang->edit_data($id);
    $this->load->view('admin/view_kemaskiniborang', $this->data, FALSE);
    }
    /****************************  END OPEN EDIT FORM WITH DATA ***************/


    /****************************  START UPDATE DATA *************************/
    public function update_data($id)
    {
    $data = array('id' => $this->input->post('id'),
                  'id_borang' => $this->input->post('id_borang'),
                   'id_pendeposit' => $this->input->post('id_pendeposit'),
                    'kod_kelompok' => $this->input->post('kod_kelompok'),
                     'kod_jenisborang' => $this->input->post('kod_jenisborang'),
                      'id_pengguna' => $this->input->post('id_pengguna'),
                       'tarikh_jana' => $this->input->post('tarikh_jana'),
			         
			      );
    $this->db->where('id', $id);
    $this->db->update('tbl_borang', $data);
    $this->session->set_flashdata('message', 'Maklumat anda berjaya dikemaskini.');
    redirect('Admin/borang');
    }
    /****************************  END UPDATE DATA ****************************/


    /****************************  START DELETE DATA **************************/
    public function delete_data($id)
    {  
    $this->db->where('id', $id);
    $this->db->delete('tbl_borang');
    $this->session->set_flashdata('message', 'Maklumat anda berjaya dihapuskan.');
    redirect('Admin/borang');
    }
    /****************************  END DELETE DATA ***************************/

	public function cipta_borang(){
		$queryKelompok = $this->db->query("SELECT * FROM tbl_kelompok;");
		$queryBorang = $this->db->query("SELECT * FROM tbl_jenis_borang;");
		$this->data['KelompokList']= $queryKelompok->result();
		$this->data['BorangList']= $queryBorang->result();
		$this->load->view('admin/view_ciptaborang', $this->data, FALSE);
	}

	public function jana_borang(){
		$kod_kelompok = $this->input->post("no_kelompok");
		$tarikh_jana = explode("/", $this->input->post("tarikh_jana"));
		$tarikh_jana = $tarikh_jana[2]."-".$tarikh_jana[1]."-".$tarikh_jana[0];
		$jenis_borang = $this->input->post("jenis_borang");
		
		$queryKelompok = $this->db->query("SELECT * FROM tbl_kelompok WHERE kod_kelompok = $kod_kelompok");
		$dataKelompok = $queryKelompok->row();
		
		$queryPendepositByKelompok = $this->db->query("SELECT * FROM tbl_pendeposit WHERE kod_kelompok = $kod_kelompok");
		$dataPendeposit = $queryPendepositByKelompok->result();
		
		foreach($dataPendeposit as $eachPendeposit){
			$dataArr = array(
				"id_pendeposit"		=>	$eachPendeposit->id,
				"kod_kelompok"		=>	$kod_kelompok,
				"kod_jenisborang"	=>	$jenis_borang,
				"trkh_jana"			=>	$tarikh_jana
			);
			
			$this->db->insert("tbl_borang", $dataArr);
		}
		
		$data["tarikh"] = "23/10/2017";
		$data["nama_pendeposit"] = "testing nama";
		$data["nama_organisasi"] = "testing organisasi";
		$data["alamat1"] = "testing alamat 1";
		$data["alamat2"] = "testing alamat 2";
		
		$html = $this->load->view('admin/view_jana_borangpraecipe', $data, true);
		
		$this->load->library('M_pdf');
		
		$kmpdf = new mPDF("c", "A4", 0, "", 15, 15, 5, 5, 0, 0);
        
		$kmpdf->WriteHTML($html);
        
		ob_clean();
		
		$kmpdf->Output("test.pdf", "D");
	}
	
	public function ajax(){
		$obj = json_decode($this->input->post("datastr"));
		$mode = $obj->mode;
		
		switch($mode){
			case "JanaBorang":
				$KodKelompok = $obj->KodKelompok;
				$NamaKelompok = $obj->NamaKelompok;
				$JenisBorang = $obj->JenisBorang;
				
				if($JenisBorang == "praecipe"){
					$query = $this->db->query("select * from tbl_kelompok as k 
						left join tbl_pendeposit as p on k.kod_kelompok = p.kod_kelompok 
						where k.kod_kelompok = $KodKelompok");
						
					$SenaraiPendeposit = $query->result();
					
					$this->load->library('M_pdf');
					
					$kmpdf = new mPDF("c", "A4", 0, "", 15, 15, 5, 5, 0, 0);
						
					foreach($SenaraiPendeposit as $EachPendeposit){
						$data["tarikh"] = "23/10/2017";
						$data["nama_pendeposit"] = $EachPendeposit->nama_pendeposit;
						$data["nama_organisasi"] = $EachPendeposit->nama_organisasi;
						$data["alamat1"] = "testing alamat 1";
						$data["alamat2"] = "testing alamat 2";
						$html = $this->load->view('admin/view_jana_borangpraecipe', $data, true);
						
						$kmpdf->addPage();
						$kmpdf->WriteHTML($html);
						
						//ob_clean();
						//$kmpdf->Output("test.pdf", "D");	
					}
					
					ob_clean();
					$pdfFilePath = "assets/tempBorang/BORANG_PRAECIPE_".str_replace("/","_",$NamaKelompok).".pdf";
					$kmpdf->Output($pdfFilePath, 'F');
					echo "BORANG_PRAECIPE_".str_replace("/","_",$NamaKelompok).".pdf";	
				}
				elseif($JenisBorang == "kuasa"){
					$query = $this->db->query("select p.nama_pendeposit as nama_pendeposit, 
						p.alamat1 as p_alamat1, 
						p.alamat2 as p_alamat2, 
						p.poskod as p_poskod, 
						p.bandar as p_bandar, 
						np.nama_negeri as np_nama_negeri, 
						f.nama_firmaguaman as nama_firmaguaman, 
						f.alamat1 as f_alamat1, 
						f.alamat2 as f_alamat2, 
						f.poskod as f_poskod, 
						f.bandar as f_bandar, 
						nf.nama_negeri as nf_nama_negeri 
						from tbl_kelompok as k 
						left join tbl_pendeposit as p on k.kod_kelompok = p.kod_kelompok 
						left join tbl_firmaguaman as f on p.kod_firmaguaman = f.kod_firmaguaman 
						left join tbl_negeri as np on p.kod_negeri = np.kod_negeri 
						left join tbl_negeri as nf on f.kod_negeri = nf.kod_negeri 
						where k.kod_kelompok = $KodKelompok");
						
					$SenaraiPendeposit = $query->result();
					
					$this->load->library('M_pdf');
					
					$kmpdf = new mPDF("c", "A4", 0, "", 15, 15, 5, 5, 0, 0);
						
					foreach($SenaraiPendeposit as $EachPendeposit){
						$data["tarikh"] = "23/10/2017";
						$data["nama_pendeposit"] = $EachPendeposit->nama_pendeposit;
						$data["nama_organisasi"] = $EachPendeposit->nama_firmaguaman;
						$data["p_alamat1"] = $EachPendeposit->p_alamat1;
						$data["p_alamat2"] = $EachPendeposit->p_alamat2;
						$data["p_poskod"] = $EachPendeposit->p_poskod;
						$data["p_bandar"] = $EachPendeposit->p_bandar;
						$data["np_nama_negeri"] = $EachPendeposit->np_nama_negeri;
						$data["f_alamat1"] = $EachPendeposit->f_alamat1;
						$data["f_alamat2"] = $EachPendeposit->f_alamat2;
						$data["f_poskod"] = $EachPendeposit->f_poskod;
						$data["f_bandar"] = $EachPendeposit->f_bandar;
						$data["nf_nama_negeri"] = $EachPendeposit->nf_nama_negeri;
						$html = $this->load->view('admin/view_jana_borangkuasa', $data, true);
						
						$kmpdf->addPage();
						$kmpdf->WriteHTML($html);
						
						//ob_clean();
						//$kmpdf->Output("test.pdf", "D");	
					}
					
					ob_clean();
					$pdfFilePath = "assets/tempBorang/BORANG_KUASA_WAKIL_".str_replace("/","_",$NamaKelompok).".pdf";
					$kmpdf->Output($pdfFilePath, 'F');
					echo "BORANG_KUASA_WAKIL_".str_replace("/","_",$NamaKelompok).".pdf";	
				}
				elseif($JenisBorang == "pendeposit"){
					$query = $this->db->query("select p.nama_pendeposit as nama_pendeposit, 
						p.id as id_pendeposit, 
						p.alamat1 as p_alamat1, 
						p.alamat2 as p_alamat2, 
						p.poskod as p_poskod, 
						p.bandar as p_bandar, 
						np.nama_negeri as np_nama_negeri, 
						f.nama_firmaguaman as nama_firmaguaman, 
						f.nama_ringkas_firmaguaman as nama_ringkas_firmaguaman, 
						substring(i.no_inbois, 3, length(i.no_inbois) - 2) as i_no_inbois 
						from tbl_kelompok as k 
						left join tbl_pendeposit as p on k.kod_kelompok = p.kod_kelompok 
						left join tbl_firmaguaman as f on p.kod_firmaguaman = f.kod_firmaguaman 
						left join tbl_negeri as np on p.kod_negeri = np.kod_negeri 
						left join tbl_inbois as i on i.no_kelompok = k.kod_kelompok 
						where k.kod_kelompok = $KodKelompok");
						
					$SenaraiPendeposit = $query->result();
					
					$this->load->library('M_pdf');
					
					$kmpdf = new mPDF("c", "A4", 0, "", 15, 15, 5, 5, 0, 0);
						
					foreach($SenaraiPendeposit as $EachPendeposit){
					$data["tarikh"] = "23/10/2017";
					$data["id_pendeposit"] = $EachPendeposit->id_pendeposit;
					$data["nama_pendeposit"] = $EachPendeposit->nama_pendeposit;
					$data["nama_organisasi"] = $EachPendeposit->nama_firmaguaman;
					$data["nama_ringkas_organisasi"] = $EachPendeposit->nama_ringkas_firmaguaman;
					$data["p_alamat1"] = $EachPendeposit->p_alamat1;
					$data["p_alamat2"] = $EachPendeposit->p_alamat2;
					$data["p_poskod"] = $EachPendeposit->p_poskod;
					$data["p_bandar"] = $EachPendeposit->p_bandar;
					$data["np_nama_negeri"] = $EachPendeposit->np_nama_negeri;
					$data["i_no_inbois"] = $EachPendeposit->i_no_inbois;
					$html = $this->load->view('admin/view_jana_surathibah', $data, true);
					
						$kmpdf->addPage();
					$kmpdf->WriteHTML($html);
					
					//ob_clean();
					//$kmpdf->Output("test.pdf", "D");	
					}
					
					ob_clean();
					$pdfFilePath = "assets/tempBorang/SURAT_KEPADA_PENDEPOSIT_".str_replace("/","_",$NamaKelompok).".pdf";
					$kmpdf->Output($pdfFilePath, 'F');
					echo "SURAT_KEPADA_PENDEPOSIT_".str_replace("/","_",$NamaKelompok).".pdf";	
				}
			break;
			case "DeleteBorang":
				$NamaBorang = $obj->NamaBorang;
				$this->load->helper("file");
				unlink("assets/tempBorang/".$NamaBorang);
			break;
		}
	}
}
