<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Model extends CI_Model {

	
	public function index()
	{
		
	}
	public function login_check_info($username,$password,$type){

		
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('email',$username);
		$this->db->where('password',$password);
		$this->db->where('role_id',$type);

		if($sql7=$this->db->get())
      {
          return $sql7->row_array();
      }
      else{
        return false;
      }



	}

	public function check_type($type){

		$this->db->select('role_id');
		$this->db->from('users');
		$this->db->where('role_id',$type);

		if($sql8=$this->db->get())
      {
          return $sql8->row_array();
      }
      else{
        return false;
      }
	}
}
