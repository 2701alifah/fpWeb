<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class MyController extends CI_Controller {
 		public function __construct() {  
		parent::__construct();   
		$this->load->model('My_model');  
 
	} 
     
	function index() {
		$data['err_message'] = "";
		// $this->load->view('login', $data);
		$this->load->view('index.php');
	}

	function createAccount() {   
		$data['err_message']="";
		$this->load->view('home',$data);
	}

	function createUser(){
	$data = array( 

	'nama' => $this->input->post('nama'),  
	'email' => $this->input->post('email'),
    'username' => $this->input->post('username'),  
	'password' => $this->input->post('password')		
	);
	
	$this->My_model->addAccount($data);   
	$this->login();
	}

	function createComment() {   
		$data['err_message']="";
		$this->load->view('balasan',$data);
	}

	function createMessage(){
	$data = array( 

	'name' => $this->input->post('name'),  
	'email' => $this->input->post('email'),
    'telephone' => $this->input->post('telephone'),  
	'pesan' => $this->input->post('pesan')		
	);
	
	$this->My_model->addComment($data);   
	$this->createComment();
	}


	function readData() {  
	$data = $this->My_model->getData();  
	$this->load->view('view', array('data' => $data)); 
	} 
	

	function readDataKomentar () {  
	$data = $this->My_model();  
	$this->load->view('view', array('data' => $data)); 
	} 

	function login(){
	$username = $this->input->post('username'); 
	$password = $this->input->post('pass'); 
	$isLogin = $this->My_model->login_authen($username, $password); 
		
	$i = $this->My_model->authen_user($username); 
	
	if ($isLogin == true && $i[0]['authentication'] < 3) {
		$this->session->set_userdata('username',$username);

	redirect('MyController/komentar');

	//}else if($this->se..........ssion->userdata('status') == "user"){
		//isi controller user
	}

	//$newdata = array(
	//'username'=> $i[0]['username'],
	//'nama' => $i[0]['nama'],
	//'status' => $i[0]['status'],
	//);
	//$this->session->set_userdata($newdata);
	//$this->user_model->wrong_password($username, 0);
	//if($i[0]['status']=='admin'){
		//echo "<script>alert('login admin berhasil')</script>";
		//redirect('admin');
	//}else{
		//echo "<script>alert('login users berhasil')</script>";
		//redirect('user');
	//}

	//}
		 
	else{ 
	if ($i[0]['authentication'] < 3) {  
	$update = $this->My_model->wrong_password($username, $i[0]['authentication']+1); 
	$data['err_message'] = "GAGAL LOGIN " . ($i[0]['authentication']+1);   
	$this->load->view('login', $data);  
	}  else{
	$data['err_message'] = "AKUN ANDA TERBLOCK";   
	$this->load->view('login', $data);
					} 
			}
	}



	function loginAdmin(){
	$username = $this->input->post('username'); 
	$password = $this->input->post('pass'); 
	$isLogin = $this->My_model->login_authen($username, $password); 
		
	$i = $this->My_model->authen_user($username); 
	
	if ($isLogin == true && $i[0]['authentication'] < 3) {
	redirect('MyController/admin'); 

	//$newdata = array(
	//'username'=> $i[0]['username'],
	//'nama' => $i[0]['nama'],
	//'status' => $i[0]['status'],
	//);
	//$this->session->set_userdata($newdata);
	//$this->user_model->wrong_password($username, 0);
	//if($i[0]['status']=='admin'){
		//echo "<script>alert('login admin berhasil')</script>";
		//redirect('admin');
	//}else{
		//echo "<script>alert('login user berhasil')</script>";
		//redirect('user');
	//}

	//}
			} 
		else{ 
		if ($i[0]['authentication'] < 3) {  
		$update = $this->My_model->wrong_password($username, $i[0]['authentication']+1); 
		$data['err_message'] = "GAGAL LOGIN " . ($i[0]['authentication']+1);   
		$this->load->view('loginAdmin', $data);  
		}  else{
		$data['err_message'] = "AKUN ANDA TERBLOCK";   
		$this->load->view('loginAdmin', $data);
					} 
			}
	}
	function admin(){
		$this->load->view('form');
	}

	function home() {
		$this->load->view('awal.php');
	}


	function signup(){
		$this->load->view('signup'); 
		//redirect('');

}

	function komentar(){
		$this->load->view('komentar');

	}

	function email(){
		$this->load->library('email');
		$this->email->initialize($config); //sesuaikan dengan kebetuhan
		$this->email->to('alamat_tujuan@namadomain.com');
		$this->email->from('admin@asisten-pbw.com','Asisten PBW 2017');
		$this->email->subject('JUDUL EMAIL (Teks)');
		$this->email->message('Isi email ditulis disini');
		$this->email->send();
	}
	/*public function do_upload()
        {
                $config['upload_path']          = './upload/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 10000;
                $config['max_width']            = 1000;
                $config['max_height']           = 1000;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        //echo $this->upload->display_errors();
                        echo "UPLOAD GAGAL";
                }
                else
                {
                		$this->create();
                        $this->home();
                }
        }*/

       	public function logout(){
		$this->session->sess_destroy();
		redirect('');
	}

}

        
?>