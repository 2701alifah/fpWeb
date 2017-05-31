<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class My_modelAdmin extends CI_Model {
    public function __construct() {  
        parent::__construct();   
        $this->load->database();  
    
    } 

    function addAccount($data){
        $this->db->insert('admin', $data);
    }

    function login_authen($username, $password) {
        $this->db->select('*');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->from('admin');
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
            $this->db->from('admin'); 
 
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
            $this->db->from('admin');  
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
            $this->db->update('admin'); 
        } 
        
    } 
?>