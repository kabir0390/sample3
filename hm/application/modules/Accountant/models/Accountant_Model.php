<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accountant_Model extends CI_Model {

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
	public function view_patient_information(){

		$this->db->select("*");
		$this->db->from("db_patient");
		
		$query_result=$this->db->get();
		$view_patient_information=$query_result->result();

		return $view_patient_information;



	}
	public function view_patient_information_data($patient_id){

		$this->db->select("*");
		$this->db->from("db_patient");
		$this->db->where("patient_id",$patient_id);
		$query_result=$this->db->get();
		$view_patient_information=$query_result->result();

		return $view_patient_information;

	}
	public function add_account_information(){

		$data=array();

		//$department_id=$this->input->post('department_id',true);

		$data['account_name']=$this->input->post('account_name',true);
		$data['account_type']=$this->input->post('account_type',true);
		$data['account_description']=$this->input->post('account_description',true);
		$data['account_status']=$this->input->post('account_status',true);
		
		$this->db->insert('db_account',$data);

	}
	public function view_account_information(){
		$this->db->select("*");
		$this->db->from("db_account");
		
		$query_result=$this->db->get();
		$view_account_information=$query_result->result();

		return $view_account_information;



	}
	public function delete_account_information($account_id){


		$this->db->where('account_id',$account_id);
		$this->db->delete('db_account');

	}

	public function add_new_invoice(){


		$data=array();

		//$department_id=$this->input->post('department_id',true);

		//$data['accountant_address']=$this->input->post('accountant_address',true);
		$data['invoice_id']=$this->input->post('invoice_id',true);
		//$data['invoice_date']=$this->input->post('invoice_date',true);
		$data['ammount_due']=$this->input->post('ammount_due',true);
		$data['total']=$this->input->post('total',true);
		
		$data['ammount_paid']=$this->input->post('ammount_paid',true);
		
		$data['balance_due']=$this->input->post('balance_due',true);

		$data['patient_id']=$this->input->post('patient_id',true);
		$data['patient_full_name']=$this->input->post('patient_full_name',true);
		$data['patient_address']=$this->input->post('patient_address',true);
		


		$data ['invoice_date'] = date('Y-m-d H:i:s');
		
		$this->db->insert('db_invoice',$data);


	}
	public function view_invoice_list(){
	$this->db->select("*");
		$this->db->from("db_invoice");
		
		$query_result=$this->db->get();
		$view_invoice_list=$query_result->result();

		return $view_invoice_list;		



	}

	public function delete_invoice_information($invoice_no){

		$this->db->where('invoice_no',$invoice_no);
		$this->db->delete('db_invoice');


	}
	public function view_invoice_info($invoice_no){

		$this->db->select("*");
		$this->db->from("db_invoice");
		$this->db->where("invoice_no",$invoice_no);
		$query_result=$this->db->get();
		$view_invoice_information=$query_result->result();

		return $view_invoice_information;


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