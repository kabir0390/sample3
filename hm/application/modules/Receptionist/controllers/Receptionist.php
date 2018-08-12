<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Receptionist extends CI_Controller {

	public function __construct(){

		parent :: __construct();
		//$this->load->model("Doctor_Model");
		$this->load->model("Receptionist_Model");
	}
	public function index()
	{
		//$this->load->view('welcome_message');
	}
	public function dashboard(){

		$this->load->view('receptionist/receptionist_dashboard');

		//echo"OK";
	}

	public function doctor_list(){


		$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';

	$data['contents']=$this->load->view('receptionist/doctor','',true);
	$this->load->view('receptionist/receptionist_dashboard',$data);
	}
	public function all_doctor_list(){
		$data=array();

		$data['all_doctor']=$this->Receptionist_Model->show_doctor_list();
		$data['contents']=$this->load->view('receptionist/show_doctor',$data,true);
	    $this->load->view('receptionist/receptionist_dashboard',$data);


	}
	public function view_doctor_information($doctor_id){
			$data=array();

		$data['view_doctor_information']=$this->Receptionist_Model->view_doctor_information($doctor_id);
		$data['contents']=$this->load->view('receptionist/view_doctor_information',$data,true);
	    $this->load->view('receptionist/receptionist_dashboard',$data);


	}
	public function patient(){


		$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';

	$data['contents']=$this->load->view('receptionist/patient','',true);
	$this->load->view('receptionist/receptionist_dashboard',$data);
	}

	public function add_patient(){

		$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	$data['all_department_name']=$this->Receptionist_Model->display_department();
	$data['contents']=$this->load->view('receptionist/add_patient',$data,true);
	$this->load->view('receptionist/receptionist_dashboard',$data);

	}

	public function save_patient(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('patient_email','Email','trim|required|valid_email');

		$this->form_validation->set_rules('patient_password','Password','trim|required|min_length[5]|max_length[12]');
		$this->form_validation->set_rules('patient_phone','Number','trim|required|max_length[11]|min_length[11]');

		$this->form_validation->set_rules('patient_mobile','Number','trim|required|max_length[11]|min_length[11]');

		if($this->form_validation->run()==FALSE){

			$sdata['errors']='Please enter valid Data';
	$this->session->set_flashdata($sdata);
	redirect('Receptionist/add_patient',$data);
		}
		else{
			$this->Receptionist_Model->save_patient_info();

			$sdata['message']='Patient Added Successfully';
	$this->session->set_flashdata($sdata);

	redirect('Receptionist/add_patient',$data);
		}





	}
	public function patient_list(){


		$data=array();

		$data['all_patient']=$this->Receptionist_Model->show_patient_list();
		$data['contents']=$this->load->view('receptionist/show_patient',$data,true);
	    $this->load->view('receptionist/receptionist_dashboard',$data);

	}
	public function view_patient_information($patient_id){
		$data=array();

		$data['view_patient_information']=$this->Receptionist_Model->view_patient_information($patient_id);
		$data['contents']=$this->load->view('receptionist/view_patient_information',$data,true);
	    $this->load->view('receptionist/receptionist_dashboard',$data);



	}

	public function schedule(){
		$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';

	$data['contents']=$this->load->view('receptionist/schedule','',true);
	$this->load->view('receptionist/receptionist_dashboard',$data);


	}
	public function all_schedule(){

		$data=array();

		$data['all_schedule']=$this->Receptionist_Model->all_schedule();
		$data['contents']=$this->load->view('receptionist/show_schedule',$data,true);
	    $this->load->view('receptionist/receptionist_dashboard',$data);



	}
	public function appointment(){
		$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';

	$data['contents']=$this->load->view('receptionist/appointment','',true);
	$this->load->view('receptionist/receptionist_dashboard',$data);



	}
	public function add_appointment(){

		$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	$data['all_doctor']=$this->Receptionist_Model->all_doctor_info();
	$data['all_department']=$this->Receptionist_Model->display_department();
	//$data['all_doctor_id']=$this->Admin_Model->all_doctor_id();
	$data['contents']=$this->load->view('receptionist/add_appointment',$data,true);
	$this->load->view('receptionist/receptionist_dashboard',$data);


	}
	public function add_appointment_data(){


		$this->Receptionist_Model->add_appointment_info();
		
			$sdata['message']='Appointment Added Successfully';
	         $this->session->set_flashdata($sdata);

	        redirect('Receptionist/add_appointment',$data);

	}
	public function appointment_list(){



		$data=array();

		$data['all_appointment']=$this->Receptionist_Model->show_appointment_list();
		$data['contents']=$this->load->view('receptionist/show_appointment',$data,true);
	    $this->load->view('receptionist/receptionist_dashboard',$data);


	}
	public function appointment_by_me(){

		$data=array();

		$data['appointment_assign_by_me']=$this->Receptionist_Model->appointment_assign_by_me();
		$data['contents']=$this->load->view('receptionist/appointment_by_me',$data,true);
	    $this->load->view('receptionist/receptionist_dashboard',$data);


	}
	public function notice(){

		$data=array();

		$data['view_notice_information']=$this->Receptionist_Model->view_notice_information();
			$data['contents']=$this->load->view('receptionist/view_notice_information',$data,true);
	    $this->load->view('receptionist/receptionist_dashboard',$data);
	}
	public function message(){

$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';

	$data['contents']=$this->load->view('receptionist/message',$data,true);
	    $this->load->view('receptionist/receptionist_dashboard',$data);
	}
	public function new_message(){



		$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	$data['message_send_to']=$this->Receptionist_Model->message_send_to();
	$data['contents']=$this->load->view('receptionist/new_message',$data,true);
	    $this->load->view('receptionist/receptionist_dashboard',$data);
	}
	public function new_message_send(){


		 $this->Receptionist_Model->new_message_send();


			$sdata['message']='Message Send Successfully';
	         $this->session->set_flashdata($sdata);

	         redirect('Receptionist/new_message',$data);
	}
public function message_inbox(){

	$data=array();
$data['message_inbox']=$this->Receptionist_Model->message_inbox();
	$data['contents']=$this->load->view('receptionist/message_inbox',$data,true);
	    $this->load->view('receptionist/receptionist_dashboard',$data);


}

public function message_send_by_me(){


	 $data=array();

		$data['message_send_by_me']=$this->Receptionist_Model->message_send_by_me();
		$data['contents']=$this->load->view('receptionist/message_send_by_me',$data,true);
	    $this->load->view('receptionist/receptionist_dashboard',$data);
}


	
	}




