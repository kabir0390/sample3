<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pharmacist extends CI_Controller {

	public function __construct(){
		parent :: __construct();
		$this->load->model('Pharmacist_Model');


	}

	public function index()
	{
		//$this->load->view('welcome_message');
		echo "Pharmacist";
	}
	public function dashboard(){

		$this->load->view('pharmacist/pharmacist_dashboard');
	}

	public function notice_board(){

		$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	$data['contents']=$this->load->view('pharmacist/notice_board','',true);
	$this->load->view('pharmacist/pharmacist_dashboard',$data);


	}
	public function view_notice(){

		$data=array();

		$data['view_notice_information']=$this->Pharmacist_Model->view_notice_information();
		$data['contents']=$this->load->view('pharmacist/view_notice_information',$data,true);
	    $this->load->view('pharmacist/pharmacist_dashboard',$data);


	}
	public function view_notice_information_data($notice_id){
		$data=array();

	       //  redirect('Doctor/doctor_assign_bed',$data);
		$data['view_notice_information']=$this->Pharmacist_Model->view_notice_board_information($notice_id);
		$data['contents']=$this->load->view('pharmacist/view_notice_board_information',$data,true);
	    $this->load->view('pharmacist/pharmacist_dashboard',$data);



	}

	public function hospital_activities(){


		$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	$data['contents']=$this->load->view('pharmacist/hospital_activities','',true);
	$this->load->view('pharmacist/pharmacist_dashboard',$data);


	}
	public function add_medicine_category(){

			$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	//$data['add_medicine_category']=$this->Pharmacist_Model->add_medicine_category();
	$data['contents']=$this->load->view('pharmacist/add_medicine_category',$data,true);
	$this->load->view('pharmacist/pharmacist_dashboard',$data);


	}
	public function add_medicine_category_information(){

		$this->Pharmacist_Model->add_medicine_category();

			$sdata['message']='Medicine Category Added Successfully';
	         $this->session->set_flashdata($sdata);

	         redirect('Pharmacist/add_medicine_category',$data);


	}

	public function medicine_category_list(){

		$data=array();

		$data['medicine_category_list']=$this->Pharmacist_Model->medicine_category_list();
		$data['contents']=$this->load->view('pharmacist/medicine_category_list',$data,true);
	    $this->load->view('pharmacist/pharmacist_dashboard',$data);


	}
	public function add_medicine(){

			$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	$data['medicine_category']=$this->Pharmacist_Model->medicine_category();
	$data['contents']=$this->load->view('pharmacist/add_medicine',$data,true);
	$this->load->view('pharmacist/pharmacist_dashboard',$data);



	}
	public function add_new_medicine(){

			$this->Pharmacist_Model->add_new_medicine();

			$sdata['message']='Medicine Added Successfully';
	         $this->session->set_flashdata($sdata);

	         redirect('Pharmacist/add_new_medicine',$data);

	}
	public function view_medicine_list(){

		$data=array();

		$data['medicine_list']=$this->Pharmacist_Model->medicine_list();
		$data['contents']=$this->load->view('pharmacist/medicine_list',$data,true);
	    $this->load->view('pharmacist/pharmacist_dashboard',$data);


	}
	public function update_medicine_information($medicine_id){
		$data =array();
		$data['update_medicine']=$this->Pharmacist_Model->update_medicine_information($medicine_id);
		$data['contents']=$this->load->view('pharmacist/update_medicine',$data,true);
	    $this->load->view('pharmacist/pharmacist_dashboard',$data);


	}

	public function delete_medicine($medicine_id){
		$this->Pharmacist_Model->delete_medicine_information($medicine_id);

			$sdata['message']='Medicine Delete Successfully';
	         $this->session->set_flashdata($sdata);

	         redirect('Pharmacist/view_medicine_list',$data);



	}

	public function message(){




$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';

	$data['contents']=$this->load->view('pharmacist/message','',true);
	$this->load->view('pharmacist/pharmacist_dashboard',$data);
	}

	public function new_message(){


		$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	$data['message_send_to']=$this->Pharmacist_Model->message_send_to();
	$data['contents']=$this->load->view('pharmacist/new_meaage',$data,true);
	$this->load->view('pharmacist/pharmacist_dashboard',$data);
	}
	public function new_message_send(){


		 $this->Pharmacist_Model->new_message_send();


			$sdata['message']='Message Send Successfully';
	         $this->session->set_flashdata($sdata);

	         redirect('Pharmacist/new_message',$data);
	}

	public function message_inbox(){



	$data=array();

		$data['message_inbox']=$this->Pharmacist_Model->message_inbox();
		$data['contents']=$this->load->view('pharmacist/message_inbox',$data,true);
	    $this->load->view('pharmacist/pharmacist_dashboard',$data);
	}
	public function message_send_by_me(){

	 $data=array();

		$data['message_send_by_me']=$this->Pharmacist_Model->message_send_by_me();
		$data['contents']=$this->load->view('pharmacist/message_send_by_me',$data,true);
	    $this->load->view('pharmacist/pharmacist_dashboard',$data);


	}
}
