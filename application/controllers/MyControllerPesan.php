<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class MyControllerAdmin extends CI_Controller {
 		public function __construct() {  
		parent::__construct();   
		$this->load->model('My_modelAdmin');  
 
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
	
	$this->My_modelAdmin->addAccount($data);   
	$this->createAccount();
	}

	function readData() {  
	$data = $this->My_modelAdmin->getData();  
	$this->load->view('view', array('data' => $data)); 
	} 
	

	function loginAdmin(){
	$username = $this->input->post('username'); 
	$password = $this->input->post('pass'); 
	$isLogin = $this->My_modelAdmin->login_authen($username, $password); 
		
	$i = $this->My_modelAdmin->authen_user($username); 
	
	if ($isLogin == true && $i[0]['authentication'] < 3) {
	$this->home(); 

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
		$update = $this->My_modelAdmin->wrong_password($username, $i[0]['authentication']+1); 
		$data['err_message'] = "GAGAL LOGIN " . ($i[0]['authentication']+1);   
		$this->load->view('loginAdmin', $data);  
		}  else{
		$data['err_message'] = "AKUN ANDA TERBLOCK";   
		$this->load->view('loginAdmin', $data);
					} 
			}
	}

	function home() {
		$this->load->view('home.php');
	}

	function signin(){
	$this->load->view('loginAdmin'); 
	}
	function signup(){
		$this->load->view('signup'); 
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
        
}
?>