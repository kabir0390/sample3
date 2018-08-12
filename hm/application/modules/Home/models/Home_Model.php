<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_Model extends CI_Model {

	
	public function index()
	{
		
	}
	public function show_doctor_list(){

		$this->db->select("*");
		$this->db->from("db_doctor");
		$query_result=$this->db->get();
		$all_doctor=$query_result->result();

		return $all_doctor;

		
	}
	public function save_visitor_message(){


		$data=array();

		$data['visitor_name']=$this->input->post('visitor_name',true);
		$data['visitor_email']=$this->input->post('visitor_email',true);
		$data['visitor_phone']=$this->input->post('visitor_phone',true);
		$data['visitor_message']=$this->input->post('visitor_message',true);
		$data ['message_date'] = date('Y-m-d H:i:s');
		



		$this->db->insert('db_visitor_message',$data);

			//echo "Nameis ";

	}
}