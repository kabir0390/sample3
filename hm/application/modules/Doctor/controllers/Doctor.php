<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor extends CI_Controller {

	public function __construct(){

		parent :: __construct();
		$this->load->model("Doctor_Model");
		//$this->load->model("Admin_Model");
	}
	public function index()
	{
		//$this->load->view('welcome_message');
	}
	public function dashboard(){

		$this->load->view('doctor/doctor_dashboard');
	}

	public function dashboard_content(){
		
	$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	$data['contents']=$this->load->view('doctor/dashboard_doctor','',true);
	$this->load->view('doctor/doctor_dashboard',$data);




	}

	public function all_doctor(){

	$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	$data['contents']=$this->load->view('doctor/doctor','',true);
	$this->load->view('doctor/doctor_dashboard',$data);





	}
	public function all_doctor_list(){
		$data=array();

		$data['all_doctor']=$this->Doctor_Model->show_doctor_list();
		$data['contents']=$this->load->view('doctor/show_doctor',$data,true);
	    $this->load->view('doctor/doctor_dashboard',$data);

	}
	public function patient(){
	$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	$data['contents']=$this->load->view('doctor/patient','',true);
	$this->load->view('doctor/doctor_dashboard',$data);



	}

	public function add_patient(){
		$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	$data['all_department_name']=$this->Doctor_Model->display_department();
	$data['contents']=$this->load->view('doctor/add_patient',$data,true);
	$this->load->view('doctor/doctor_dashboard',$data);

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
	redirect('Doctor/add_patient',$data);
		}
		else{
			$this->Doctor_Model->save_patient_info();

			$sdata['message']='Patient Added Successfully';
	$this->session->set_flashdata($sdata);

	redirect('Doctor/add_patient',$data);
		}



		
	}

	public function all_patient_list(){

		$data=array();

		$data['all_patient']=$this->Doctor_Model->show_patient_list();
		$data['contents']=$this->load->view('doctor/show_patient',$data,true);
	    $this->load->view('doctor/doctor_dashboard',$data);


	}
	public function add_document(){

		$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	//$data['all_department_name']=$this->Doctor_Model->display_department();
	$data['contents']=$this->load->view('doctor/add_document','',true);
	$this->load->view('doctor/doctor_dashboard',$data);


	}

	public function Schedule(){
		$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	$data['contents']=$this->load->view('doctor/schedule','',true);
	$this->load->view('doctor/doctor_dashboard',$data);


	}
	public function add_schedule(){
		$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	//$data['doctor_schedule']=$this->Doctor_Model->display_schedule_doctor();
	$data['contents']=$this->load->view('doctor/add_schedule','',true);
	$this->load->view('doctor/doctor_dashboard',$data);



	}
	public function add_schedule_info(){
		$this->Doctor_Model->add_schedule_data();

			$sdata['message']='Schedule Added Successfully';
	         $this->session->set_flashdata($sdata);

	         redirect('Doctor/add_schedule',$data);


	}

	public function doctor_schedule_list(){


		$data=array();

		$data['doctor_schedule']=$this->Doctor_Model->show_doctor_schedule_list();
		$data['contents']=$this->load->view('doctor/show_doctor_schedule',$data,true);
	    $this->load->view('doctor/doctor_dashboard',$data);


	}

	public function delete_schedule_info($schedule_id){

		$this->Doctor_Model->delete_schedule($schedule_id);

		$sdata['message']='Department Delete Successfully';
	         $this->session->set_flashdata($sdata);

	         redirect('Doctor/doctor_schedule_list',$data);


	}

	public function appointment(){
		$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	$data['contents']=$this->load->view('doctor/doctor_appointment','',true);
	$this->load->view('doctor/doctor_dashboard',$data);


	}

	public function doctor_add_appointment(){
		$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	$data['all_doctor']=$this->Doctor_Model->all_doctor_info();
	$data['all_department']=$this->Doctor_Model->display_department_info();
	//$data['all_doctor_id']=$this->Admin_Model->all_doctor_id();
	$data['contents']=$this->load->view('doctor/add_appointment',$data,true);
	$this->load->view('doctor/doctor_dashboard',$data);



	}
	public function add_appointment_data(){
		$this->Doctor_Model->add_doctor_appointment();

			$sdata['message']='Appointment Added Successfully';
	         $this->session->set_flashdata($sdata);

	         redirect('Doctor/doctor_add_appointment',$data);




	}

	public function doctor_appointment_list(){
			$data=array();

		$data['all_appointment']=$this->Doctor_Model->show_appointment_list();
		$data['contents']=$this->load->view('doctor/show_all_appointment',$data,true);
	    $this->load->view('doctor/doctor_dashboard',$data);





	}

	public function doctor_assign_to_me(){
		$data=array();

		$data['all_doctor_assign_to_me']=$this->Doctor_Model->doctor_assign_to_me_info();
		$data['contents']=$this->load->view('doctor/show_doctor_assign_to_me',$data,true);
	    $this->load->view('doctor/doctor_dashboard',$data);



	}

	public function doctor_assign_by_me(){
			$data=array();

		$data['all_doctor_assign_by_me']=$this->Doctor_Model->doctor_assign_by_me_info();
		$data['contents']=$this->load->view('doctor/show_doctor_assign_by_me',$data,true);
	    $this->load->view('doctor/doctor_dashboard',$data);



	}

	public function prescription(){
		$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	$data['contents']=$this->load->view('doctor/doctor_prescription','',true);
	$this->load->view('doctor/doctor_dashboard',$data);



	}

	public function add_patient_case_study(){
		$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	//$data['all_doctor']=$this->Doctor_Model->all_doctor_info();
	//$data['all_department']=$this->Doctor_Model->display_department_info();
	//$data['all_doctor_id']=$this->Admin_Model->all_doctor_id();
	$data['contents']=$this->load->view('doctor/add_patient_case_study',$data,true);
	$this->load->view('doctor/doctor_dashboard',$data);

}

	public function add_case_study(){

		$this->Doctor_Model->add_patient_case_study_info();

			$sdata['message']='Patient Case Study Added Successfully';
	         $this->session->set_flashdata($sdata);

	         redirect('Doctor/add_patient_case_study',$data);

	}

	public function patient_case_study_list(){
		$data=array();

		$data['patient_case_study_list']=$this->Doctor_Model->patient_case_study_list_info();
		$data['contents']=$this->load->view('doctor/show_patient_case_study_list',$data,true);
	    $this->load->view('doctor/doctor_dashboard',$data);




	}

	public function hospital_activities(){
		$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	$data['contents']=$this->load->view('doctor/doctor_hospital_activities','',true);
	$this->load->view('doctor/doctor_dashboard',$data);







	}

	public function add_birth_report(){
		$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	//$data['all_doctor']=$this->Doctor_Model->show_doctor_list();
	$data['contents']=$this->load->view('doctor/add_birth_report',$data,true);
	$this->load->view('doctor/doctor_dashboard',$data);



	}
	public function save_birth_report(){

		$this->Doctor_Model->save_birth_report();

			$sdata['message']='Birth Report Added Successfully';
	         $this->session->set_flashdata($sdata);

	         redirect('Doctor/add_birth_report',$data);





	}

	public function birth_report_list(){
		$data=array();

		$data['birth_report_list']=$this->Doctor_Model->birth_report_list_info();
		$data['contents']=$this->load->view('doctor/show_birth_report_list',$data,true);
	    $this->load->view('doctor/doctor_dashboard',$data);




	}

	public function add_death_report(){

		$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	//$data['all_doctor']=$this->Doctor_Model->show_doctor_list();
	$data['contents']=$this->load->view('doctor/add_death_report',$data,true);
	$this->load->view('doctor/doctor_dashboard',$data);	

	}

	public function save_death_report(){
		$this->Doctor_Model->save_death_report();

			$sdata['message']='Death Report Added Successfully';
	         $this->session->set_flashdata($sdata);

	         redirect('Doctor/add_death_report',$data);



	}

	public function death_report_list(){


		$data=array();

		$data['death_report_list']=$this->Doctor_Model->death_report_list_info();
		$data['contents']=$this->load->view('doctor/show_death_report_list',$data,true);
	    $this->load->view('doctor/doctor_dashboard',$data);



		}

		public function add_operation_report(){

			$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	//$data['all_doctor']=$this->Doctor_Model->show_doctor_list();
	$data['contents']=$this->load->view('doctor/add_operation_report',$data,true);
	$this->load->view('doctor/doctor_dashboard',$data);	



		}

		public function save_operation_report(){
			$this->Doctor_Model->save_operation_report();

			$sdata['message']='Operation Report Added Successfully';
	         $this->session->set_flashdata($sdata);

	         redirect('Doctor/add_operation_report',$data);





		}
		public function operation_report_list(){

		$data=array();

		$data['operation_report_list']=$this->Doctor_Model->operation_report_list_info();
		$data['contents']=$this->load->view('doctor/show_operation_report_list',$data,true);
	    $this->load->view('doctor/doctor_dashboard',$data);
	


		}

		public function bed_management(){

			$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	$data['contents']=$this->load->view('doctor/doctor_bed_management','',true);
	$this->load->view('doctor/doctor_dashboard',$data);


		}

		public function doctor_assign_bed(){

		$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	$data['all_bed_type']=$this->Doctor_Model->show_bed_type();
	$data['contents']=$this->load->view('doctor/bed_assign',$data,true);
	$this->load->view('doctor/doctor_dashboard',$data);


		}

		public function save_bed_assign(){

			$this->Doctor_Model->save_bed_assign_info();

			$sdata['message']='Bed Assign Added Successfully';
	         $this->session->set_flashdata($sdata);

	         redirect('Doctor/doctor_assign_bed',$data);



		}

		public function bed_assign_list(){

			$data=array();

		$data['bed_assign_list']=$this->Doctor_Model->bed_assign_list_info();
		$data['contents']=$this->load->view('doctor/show_bed_assign_list',$data,true);
	    $this->load->view('doctor/doctor_dashboard',$data);
	


		}

		public function view_doctor_information($doctor_id){

			$data=array();

		$data['view_doctor_information']=$this->Doctor_Model->view_doctor_information($doctor_id);
		$data['contents']=$this->load->view('doctor/view_doctor_information',$data,true);
	    $this->load->view('doctor/doctor_dashboard',$data);


		}

		public function view_patient_information($patient_id){

			$data=array();

	       //  redirect('Doctor/doctor_assign_bed',$data);
		$data['view_patient_information']=$this->Doctor_Model->view_patient_information($patient_id);
		$data['contents']=$this->load->view('doctor/view_patient_information',$data,true);
	    $this->load->view('doctor/doctor_dashboard',$data);





		}

		public function view_appointment_information($appointment_id,$appointment_doctor){

			$data=array();

	       //  redirect('Doctor/doctor_assign_bed',$data);
			$data['view_appointment_doctor_information']=$this->Doctor_Model->view_appointment_doctor_information($appointment_doctor);
		$data['view_appointment_information']=$this->Doctor_Model->view_appointment_information($appointment_id);
		$data['contents']=$this->load->view('doctor/view_appointment_information',$data,true);
	    $this->load->view('doctor/doctor_dashboard',$data);



		}

		public function view_appointment_information_assign_to_me($appointment_id){

			$data=array();

	       //  redirect('Doctor/doctor_assign_bed',$data);
		$data['view_appointment_information_assign_to_me']=$this->Doctor_Model->view_appointment_information_assign_to_me($appointment_id);
		$data['contents']=$this->load->view('doctor/view_appointment_information_assign_to_me',$data,true);
	    $this->load->view('doctor/doctor_dashboard',$data);



		}
		public function delete_appointment_information_assign_to_me($appointment_id){


			$this->Doctor_Model->delete_appointment_information_assign_to_me($appointment_id);

		$sdata['message']='Appointment Delete Successfully';
	         $this->session->set_flashdata($sdata);

	         redirect('Doctor/doctor_assign_to_me',$data);

		}

		public function view_appointment_information_assign_by_me($appointment_id){
			$data=array();

	       //  redirect('Doctor/doctor_assign_bed',$data);
		$data['view_appointment_information_assign_by_me']=$this->Doctor_Model->view_appointment_information_assign_by_me($appointment_id);
		$data['contents']=$this->load->view('doctor/view_appointment_information_assign_by_me',$data,true);
	    $this->load->view('doctor/doctor_dashboard',$data);



		}

		public function delete_appointment_information_assign_by_me($appointment_id){
				$this->Doctor_Model->delete_appointment_information_assign_by_me($appointment_id);

		$sdata['message']='Appointment Delete Successfully';
	         $this->session->set_flashdata($sdata);

	         redirect('Doctor/doctor_assign_by_me',$data);



		}
		public function view_birth_report_list($birth_report_id){
			$data=array();

	       //  redirect('Doctor/doctor_assign_bed',$data);
		$data['view_birth_report_list']=$this->Doctor_Model->view_birth_report_list($birth_report_id);
		$data['contents']=$this->load->view('doctor/view_birth_report_list',$data,true);
	    $this->load->view('doctor/doctor_dashboard',$data);





		}

		public function view_death_report_list($death_report_id){
			$data=array();

	       //  redirect('Doctor/doctor_assign_bed',$data);
		$data['view_death_report_list']=$this->Doctor_Model->view_death_report_list($death_report_id);
		$data['contents']=$this->load->view('doctor/view_death_report_list',$data,true);
	    $this->load->view('doctor/doctor_dashboard',$data);



		}

		public function notice_board(){
			$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	$data['contents']=$this->load->view('doctor/notice_board','',true);
	$this->load->view('doctor/doctor_dashboard',$data);


		}

		public function view_notice(){
			$data=array();

		$data['view_notice_information']=$this->Doctor_Model->view_notice_information();
		$data['contents']=$this->load->view('doctor/view_notice_information',$data,true);
	    $this->load->view('doctor/doctor_dashboard',$data);
	


		}
		public function view_notice_information($notice_id){
			$data=array();

	       //  redirect('Doctor/doctor_assign_bed',$data);
		$data['view_notice_information']=$this->Doctor_Model->view_notice_board_information($notice_id);
		$data['contents']=$this->load->view('doctor/view_notice_board_information',$data,true);
	    $this->load->view('doctor/doctor_dashboard',$data);


		}
		public function add_prescription(){

			$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
			//$data['invoiceno']=;
			$data['invoiceno']=$this->Doctor_Model->invoiceno();

	$data['contents']=$this->load->view('doctor/add_prescription',$data,true);
	$this->load->view('doctor/doctor_dashboard',$data);



		}

		public function add_new_prescription(){
			$this->Doctor_Model->add_new_prescription();

			$sdata['message']='Prescription Added Successfully';
	         $this->session->set_flashdata($sdata);

	         redirect('Doctor/add_prescription',$data);





		}
		public function prescription_list(){
			
			$data=array();

		$data['prescription_list']=$this->Doctor_Model->prescription_list();
		$data['contents']=$this->load->view('doctor/show_prescription_list',$data,true);
	    $this->load->view('doctor/doctor_dashboard',$data);
	

			
		}

		public function view_prescription_patient_info($pres_id){
			
			$data=array();

	       //  redirect('Doctor/doctor_assign_bed',$data);
		$data['view_prescription_patient_info']=$this->Doctor_Model->view_prescription_info($pres_id);
		$data['contents']=$this->load->view('doctor/view_prescription_patient_info',$data,true);
	    $this->load->view('doctor/doctor_dashboard',$data);

		}

		public function add_prescription1(){

			$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
			//$data['invoiceno']=;
			//$data['invoiceno']=$this->Doctor_Model->invoiceno1();

	$data['contents']=$this->load->view('doctor/add_prescription1',$data,true);
	$this->load->view('doctor/doctor_dashboard',$data);

		}
		public function add_new_prescription1(){
			$this->Doctor_Model->add_new_prescription1();

			$sdata['message']='Prescription Added Successfully';
	         $this->session->set_flashdata($sdata);

	         redirect('Doctor/add_prescription1',$data);


		}

}
