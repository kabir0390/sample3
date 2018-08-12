<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pharmacist_Model extends CI_Model {


public function view_notice_information(){


	$this->db->select("*");
		$this->db->from("db_notice_board");
		
		$query_result=$this->db->get();
		$view_notice_information=$query_result->result();

		return $view_notice_information;



}
public function view_notice_board_information($notice_id){


		$this->db->select("*");
		$this->db->from("db_notice_board");
		$this->db->where("notice_id",$notice_id);
		$query_result=$this->db->get();
		$view_notice_information=$query_result->result();

		return $view_notice_information;

}

public function add_medicine_category(){




		$data=array();

		$data['medicine_category_name']=$this->input->post('medicine_category_name',true);
		$data['medicine_category_description']=$this->input->post('medicine_category_description',true);
		$data['medicine_status']=$this->input->post('medicine_status',true);
		$data ['medicine_category_date'] = date('Y-m-d H:i:s');
		

	
		$this->db->insert('db_medicine_category',$data);

}

public function medicine_category(){

		$this->db->select("medicine_category_name");
		$this->db->from("db_medicine_category");
		
		$query_result=$this->db->get();
		$medicine_category=$query_result->result();

		return $medicine_category;



}
public function medicine_category_list(){

		$this->db->select("*");
		$this->db->from("db_medicine_category");
		
		$query_result=$this->db->get();
		$medicine_category_list=$query_result->result();

		return $medicine_category_list;


}
public function add_new_medicine(){

		$data=array();

		$data['pharmacist_medicine']=$this->input->post('pharmacist_medicine',true);
		$data['pharmacist_medicine_category']=$this->input->post('pharmacist_medicine_category',true);
		$data['pharmacist_medicine_description']=$this->input->post('pharmacist_medicine_description',true);
		$data['pharmacist_medicine_price']=$this->input->post('pharmacist_medicine_price',true);
		$data['pharmacist_manufactured_by']=$this->input->post('pharmacist_manufactured_by',true);
		$data['medicine_status']=$this->input->post('medicine_status',true);
       
	
		$this->db->insert('db_medicine',$data);


}
public function medicine_list(){

		$this->db->select("*");
		$this->db->from("db_medicine");
		
		$query_result=$this->db->get();
		$medicine_list=$query_result->result();

		return $medicine_list;



}
public function update_medicine_information($medicine_id){


		$this->db->select("*");
		$this->db->from("db_medicine");
		$this->db->where("medicine_id",$medicine_id);
		$query_result=$this->db->get();
		$update_medicine=$query_result->result();

		return $update_medicine;

}
public function delete_medicine_information($medicine_id){


		$this->db->where('medicine_id',$medicine_id);
		$this->db->delete('db_medicine');

}
public function message_send_to(){




		$this->db->select("*");
		$this->db->from("users");
		$query_result=$this->db->get();
		$message_send_to=$query_result->result();

		return $message_send_to;
}

public function new_message_send(){

		$data=array();

		//$appointment_id=$this->input->post('appointment_id',true);

		$data['message_send_to']=$this->input->post('message_send_to',true);
		$data['message_subject']=$this->input->post('message_subject',true);
		$data['message_text']=$this->input->post('message_description',true);
		
		$data['added_by_name']=$this->input->post('added_by_name',true);
		
		$data['added_by_email']=$this->input->post('added_by_email',true);
		
		$data ['message_date'] = date('Y-m-d H:i:s');
		$this->db->insert('db_message',$data);



}
public function message_inbox(){



		$keyword= $this->session->userdata('email');
		$this->db->select("*");
		$this->db->from("db_message");
$this->db->like('message_send_to', $keyword);	
		$query_result=$this->db->get();
		$message_inbox=$query_result->result();
		return $message_inbox;


}
public function message_send_by_me(){

		
		$keyword= $this->session->userdata('email');
		$this->db->select("*");
		$this->db->from("db_message");
$this->db->like('added_by_email', $keyword);	
		$query_result=$this->db->get();
		$message_send_by_me=$query_result->result();
		return $message_send_by_me;
}

}