<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class My_model extends CI_Model {
    public function __construct() {  
        parent::__construct();   
        $this->load->database();  
 
    } 

    function addAccount($data){
        $this->db->insert('users', $data);
    }

    function addComment($data){
        $this->db->insert('komen', $data);
    }

    function login_authen($username, $password) {
        $this->db->select('*');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->from('users');
        $query = $this->db->get();
        //var_dump($query);die();
        if ($query->num_rows() == 1) {
            return true;
        }
        else{
            return false;
        }
    }

    function signUp_authen($username, $password) { 
            $this->db->select('*'); 
            $this->db->where('username', $username); 
            $this->db->where('password', $password); 
            $this->db->from('users'); 
 
            $query = $this->db->get(); 
 
            if ($query->num_rows() == 1) {  
                return true; 
            } else{  
                return false; 
              } 
        }
        
        function authen_user($username){  
            $this->db->select('authentication');  
            $this->db->where('username', $username);  
            $this->db->from('users');  
            $query = $this->db->get();  
            //return $query->result_array(); 
        } 

        //function getuser($username){
           //$data = $this->db->get_where('users', array('username' => $username));
           //return $data->result_array();

        //}
        
        function wrong_password($username, $value){  
            $this->db->set('authentication', $value);  
            $this->db->where("username", $username);  
            $this->db->update('users'); 
        }

        public function GetArtikel($where="")
        {
            $data = $this->db->query('select * from artikel '.$where);
            return $data->result_array();
            }

        public function insertdata($tableName, $data)
        {
            $res = $this->db->insert($tableName, $data);
            return $res;
        }
        public function UpdateData($tableName, $data, $where)
        {
            $data = array(
            "judul" => $this->input->post('judul'),
            "author" => $this->input->post('author'),
            "foto" => $fileUpload['file_name'],
            "teks_artikel" => $this->input->post('teks_artikel')
            );
            $this->db->where('judul', $judul);
            return $this->db->update('artikel', $data);
        }   
        public function DeleteData($tableName, $where)
        {
            $res = $this->db->delete($tableName, $where);
            return $res;
        }
        
        public function get_barang_id($judul){ //read database
            $this->db->where('judul', $judul);
            $query = $this->db->get('artikel'); 
            return $query->row_array(); //data disimpan dalam row
        } 
        
    } 
?>