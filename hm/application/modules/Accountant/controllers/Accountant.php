<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accountant extends CI_Controller {

	
	public function __construct(){

		parent :: __construct();
		$this->load->model('Accountant_Model');
		//$this->load->model('Accountant_Model');
		//$this->load->model("Admin_Model");
	}

	
	public function index()
	{
		
	}

	public function dashboard(){


		$this->load->view('accountant/accountant_dashboard');
	}

	public function notice_board(){
		$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	$data['contents']=$this->load->view('accountant/notice_board','',true);
	$this->load->view('accountant/accountant_dashboard',$data);


	}
	public function view_notice(){
		//$this->load->model('Accountant_Model');
		$this->load->model('Accountant_Model');
		$data=array();

		$data['view_notice_information']=$this->Accountant_Model->view_notice_information();
		$data['contents']=$this->load->view('accountant/view_notice_information',$data,true);
	    $this->load->view('accountant/accountant_dashboard',$data);
	


	}
	
		public function view_notice_information($notice_id){
			$data=array();

	       //  redirect('Doctor/doctor_assign_bed',$data);
		$data['view_notice_information']=$this->Accountant_Model->view_notice_board_information($notice_id);
		$data['contents']=$this->load->view('accountant/view_notice_board_information',$data,true);
	    $this->load->view('accountant/accountant_dashboard',$data);



	}
	public function show_patient(){

		$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	$data['contents']=$this->load->view('accountant/show_patient','',true);
	$this->load->view('accountant/accountant_dashboard',$data);

	}
	public function view_patient(){
		$data=array();

		$data['view_patient_information']=$this->Accountant_Model->view_patient_information();
		$data['contents']=$this->load->view('accountant/view_patient_information',$data,true);
	    $this->load->view('accountant/accountant_dashboard',$data);
	


	}
	public function view_patient_information($patient_id){
		$data=array();

	       //  redirect('Doctor/doctor_assign_bed',$data);
		$data['view_patient_information']=$this->Accountant_Model->view_patient_information_data($patient_id);
		$data['contents']=$this->load->view('accountant/view_patient_information_data',$data,true);
	    $this->load->view('accountant/accountant_dashboard',$data);



	}
	public function account_manager(){
		$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	$data['contents']=$this->load->view('accountant/account_manager','',true);
	$this->load->view('accountant/accountant_dashboard',$data);



	}

	

	public function add_account(){

	$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	//$data['doctor_schedule']=$this->Doctor_Model->display_schedule_doctor();
	$data['contents']=$this->load->view('accountant/add_account_information','',true);
	$this->load->view('accountant/accountant_dashboard',$data);
}

public function add_account_name(){

	$this->Accountant_Model->add_account_information();

			$sdata['message']='Account Added Successfully';
	         $this->session->set_flashdata($sdata);

	         redirect('Accountant/add_account',$data);


}
public function view_account(){
        $data=array();

		$data['view_account_information']=$this->Accountant_Model->view_account_information();
		$data['contents']=$this->load->view('accountant/view_account_information',$data,true);
	    $this->load->view('accountant/accountant_dashboard',$data);


}
public function delete_account_information($account_id){


	$this->Accountant_Model->delete_account_information($account_id);

			$sdata['message']='Account Delete Successfully';
	         $this->session->set_flashdata($sdata);

	         redirect('Accountant/view_account',$data);


}
public function add_invoice(){

	$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	//$data['doctor_schedule']=$this->Doctor_Model->display_schedule_doctor();
	$data['contents']=$this->load->view('accountant/add_invoice','',true);
	$this->load->view('accountant/accountant_dashboard',$data);


}
public function add_new_invoice(){

	 
	$this->Accountant_Model->add_new_invoice();

			$sdata['message']='Invoice Added Successfully';
	         $this->session->set_flashdata($sdata);

	         redirect('Accountant/add_invoice',$data);





}

public function view_invoice_list(){

	 $data=array();

		$data['view_invoice_list']=$this->Accountant_Model->view_invoice_list();
		$data['contents']=$this->load->view('accountant/view_invoice_list',$data,true);
	    $this->load->view('accountant/accountant_dashboard',$data);


	
}

public function delete_invoice_information($invoice_no){
	$this->Accountant_Model->delete_invoice_information($invoice_no);

			$sdata['message']='Invoice Delete Successfully';
	         $this->session->set_flashdata($sdata);

	         redirect('Accountant/view_invoice_list',$data);



}

public function view_invoice_information($invoice_no){
	$data=array();

	       //  redirect('Doctor/doctor_assign_bed',$data);
		$data['view_invoice_information']=$this->Accountant_Model->view_invoice_info($invoice_no);
		$data['contents']=$this->load->view('accountant/view_invoice_info',$data,true);
	    $this->load->view('accountant/accountant_dashboard',$data);



}
public function message(){

$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';

	$data['contents']=$this->load->view('accountant/message','',true);
	$this->load->view('accountant/accountant_dashboard',$data);


}
public function new_message(){

	$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	$data['message_send_to']=$this->Accountant_Model->message_send_to();
	$data['contents']=$this->load->view('accountant/new_meaage',$data,true);
	$this->load->view('accountant/accountant_dashboard',$data);
}

public function new_message_send(){

	  $this->Accountant_Model->new_message_send();


			$sdata['message']='Message Send Successfully';
	         $this->session->set_flashdata($sdata);

	         redirect('Accountant/new_message',$data);


}
public function message_inbox(){


	$data=array();

		$data['message_inbox']=$this->Accountant_Model->message_inbox();
		$data['contents']=$this->load->view('accountant/message_inbox',$data,true);
	    $this->load->view('accountant/accountant_dashboard',$data);
}
public function message_send_by_me(){


	 $data=array();

		$data['message_send_by_me']=$this->Accountant_Model->message_send_by_me();
		$data['contents']=$this->load->view('accountant/message_send_by_me',$data,true);
	    $this->load->view('accountant/accountant_dashboard',$data);

}


}