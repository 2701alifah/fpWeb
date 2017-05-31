<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Control extends CI_Controller
{
	public function index(){
		$data = $this->model->GetArtikel();
		$this->load->view('tabel_artikel', array('data' => $data));
	}

	public function add_data()
	{
		$this->load->view('form');
	}

	/*public function create()
	{
		$data = array(
		'judul' => $this->input->post('judul'),
		'author' => $this->input->post('author'),
		'foto' => $this->input->post('foto'),
		'teks_artikel' => $this->input->post('teks_artikel')
		);
		$this->model->insertdata($data);
		$this->index();
	}*/

	public function do_delete($judul){
		$where = array('judul' => $judul);
		$res = $this->model->DeleteData('artikel', $where);
		if($res >= 1){
			echo "Delete sukses";
		}
		else{
			echo "delete gagal";
		}
	}

	public function do_insert()
	{
		$this->load->library('upload');
		$judul = $_POST['judul'];
		$author = $_POST['author'];
		$teks_artikel = $_POST['teks_artikel'];
		
		$fileUpload = array();
		$isUpload = FALSE;
		$imgUpload = array(
				'upload_path' => './uploads/',
                'allowed_types' => 'jpeg|gif|jpg|png',
                'encrypt_name' => TRUE 
			);
		$this->upload->initialize($imgUpload);
		if ($this->upload->do_upload('foto')){
			$fileUpload = $this->upload->data();
			$isUpload = TRUE;
		}
		if($isUpload){
		$data_insert = array(
			"judul" => $judul,
			"author" => $author,
			"foto" => $fileUpload['file_name'],
			"teks_artikel" => $teks_artikel
			);
			
			$res = $this->model->insertdata('artikel',$data_insert);
			if ($res>=1) {
			$this->load->view('tabel_artikel');
		}
		}	
	}	

	public function edit_data($judul)
	{
		$drt = $this->model->GetArtikel("where judul = '$judul'");
		$data = array(
			"judul" => $drt[0]['judul'],
			"author" => $drt[0]['author'],
			"foto" => $drt[0]['foto'],
			"teks_artikel" => $drt[0]['teks_artikel']
			);
		$this->load->view('form_update', $data);
	}

	public function do_update()
	{
		$this->load->helper('form');
	    $this->load->library('form_validation');
	    $this->load->library('upload');
	   
	    $is_submit = $this->input->post('is_submit');
	    
	    if(isset($is_submit) && $is_submit == 1){
	    $fileUpload = array();
	    $isUpload = FALSE;
	    $config = array(
	    'upload_path' => './uploads/',
	    'allowed_types' => 'jpg|jpeg|png',
	    'max_size' => 512
	    );
	    
	    $this->upload->initialize($config);
	    if($this->upload->do_upload('foto')){
	    $fileUpload = $this->upload->data();
    	$isUpload = TRUE;
    	}
		if($isUpload){
		$data = array(
			"judul" => $this->input->post('judul'),
			"author" => $this->input->post('author'),
			"foto" => $fileUpload['foto'],
			"teks_artikel" => $this->input->post('teks_artikel')
			);
		
			$this->model->UpdateData($judul, $data);
			//redirect('tabel_artikel');
			$this->load->view('tabel_artikel');
		}
		else{
			 $data['artikel'] = $this->barang_model->get_barang_id($kode_barang);
    		 $this->load->view('views/form_update', $data);
		}	
	}	
}
}
?>