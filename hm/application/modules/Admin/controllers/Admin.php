<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct(){

		parent:: __construct();
		$this->load->model('Admin_Model');
	}

	public function index()
	{
		//$this->load->view('welcome_message');
	}

	public function dashboard(){
	 $data=array();
	

		$data['all_notice']=$this->Admin_Model->show_notice_board();
		//$data['contents']=$this->load->view('admin/show_notice_board',$data,true);
	   // $this->load->view('admin/admin_dashboard',$data);
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	   $data['contents']=$this->load->view('admin/dashboard',$data,true);

		$this->load->view('admin/admin_dashboard',$data);
	}
	public function dashboard_content(){
		
	$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	$data['all_notice']=$this->Admin_Model->show_notice_board();
	$data['contents']=$this->load->view('admin/dashboard',$data,true);
	$this->load->view('admin/admin_dashboard',$data);




	}
	public function department(){

	$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	$data['contents']=$this->load->view('admin/department','',true);
	$this->load->view('admin/admin_dashboard',$data);



	}
	public function add_department(){
		$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	$data['contents']=$this->load->view('admin/add_department','',true);
	$this->load->view('admin/admin_dashboard',$data);

	}
	public function save_department(){

	$this->Admin_Model->save_department_info();

	$sdata=array();
	$sdata['message']='Department Added Successfully';
	$this->session->set_flashdata($sdata);

	redirect('Admin/add_department',$data);


	}
	public function show_department(){
		$data=array();

		$data['all_department']=$this->Admin_Model->show_department();
		$data['contents']=$this->load->view('admin/show_department',$data,true);
	    $this->load->view('admin/admin_dashboard',$data);


		
	}
	public function doctor(){
		$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';

	$data['contents']=$this->load->view('admin/doctor','',true);
	$this->load->view('admin/admin_dashboard',$data);


	}
	public function add_doctor(){

		$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	$data['all_department_name']=$this->Admin_Model->display_department();
	$data['contents']=$this->load->view('admin/add_doctor',$data,true);
	$this->load->view('admin/admin_dashboard',$data);


	}

	public function save_doctor(){

		$this->load->library('form_validation');
		$this->form_validation->set_rules('doctor_password','Password','trim|required|min_length[5]|max_length[12]');
		$this->form_validation->set_rules('doctor_phone','Number','trim|required|max_length[11]|min_length[11]');

		$this->form_validation->set_rules('doctor_mobile','Number','trim|required|max_length[11]|min_length[11]');
		$this->form_validation->set_rules('doctor_email','Email','trim|required|valid_email|is_unique[db_doctor.doctor_email]');
		if($this->form_validation->run()==FALSE){
			
			redirect('Admin/add_doctor');
		}
		else{
			//echo"Right";
	$this->Admin_Model->save_doctor_info();
     $sdata=array();
	$sdata['message']='Doctor Added Successfully';
	$this->session->set_flashdata($sdata);

	redirect('Admin/add_doctor',$data);


	
		}

	}

	public function show_doctor(){


		
		$data=array();

		$data['all_doctor']=$this->Admin_Model->show_doctor_info();
		$data['contents']=$this->load->view('admin/show_doctor',$data,true);
	    $this->load->view('admin/admin_dashboard',$data);

	}

	public function patient(){

			$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';

	$data['contents']=$this->load->view('admin/patient','',true);
	$this->load->view('admin/admin_dashboard',$data);






	}
	public function add_patient(){
		$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	$data['all_department_name']=$this->Admin_Model->display_department();
	$data['contents']=$this->load->view('admin/add_patient',$data,true);
	$this->load->view('admin/admin_dashboard',$data);


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
	redirect('Admin/add_patient',$data);
		}
		else{
			$this->Admin_Model->save_patient_info();

			$sdata['message']='Patient Added Successfully';
	$this->session->set_flashdata($sdata);

	redirect('Admin/add_patient',$data);
		}



	}
	public function update_data($department_id){
		$data =array();
		$data['update_department']=$this->Admin_Model->update_department($department_id);
	 $data['contents']=$this->load->view('admin/edit_department',$data,true);
	 $this->load->view('admin/admin_dashboard',$data);



	}
	public function update_department_info(){


		$this->Admin_Model->update_department_data();


			$sdata['message']='Department Updated Successfully';
	         $this->session->set_flashdata($sdata);

	         redirect('Admin/show_department',$data);

	}
	public function delete_data($department_id){

		$this->Admin_Model->delete_data_info($department_id);
		$sdata['message']='Department Delete Successfully';
	         $this->session->set_flashdata($sdata);

	         redirect('Admin/show_department',$data);

	}

	public function delete_appointment_doctor($appointment_id){

		$this->Admin_Model->delete_appointment_doctor($appointment_id);
		$sdata['message']='Department Delete Successfully';
	         $this->session->set_flashdata($sdata);

	         redirect('Admin/show_appointment_doctor',$data);

	}
	public function update_doctor($doctor_id){

		$data =array();
		$data['all_department_name']=$this->Admin_Model->display_department();
		$data['update_doctor']=$this->Admin_Model->update_doctor($doctor_id);
	 $data['contents']=$this->load->view('admin/edit_doctor',$data,true);
	 $this->load->view('admin/admin_dashboard',$data);


	}
	public function update_doctor_data(){

		$this->Admin_Model->update_doctor_info();


			$sdata['message']='Doctor Updated Successfully';
	         $this->session->set_flashdata($sdata);

	         redirect('Admin/show_doctor',$data);



	}
	public function delete_doctor($doctor_id){

		$this->Admin_Model->delete_doctor_info($doctor_id);
		$sdata['message']='Doctor Delete Successfully';
	         $this->session->set_flashdata($sdata);

	         redirect('Admin/show_doctor',$data);

	}
	public function show_patient(){

		$data=array();

		$data['all_patient']=$this->Admin_Model->show_patient_info();
		$data['contents']=$this->load->view('admin/show_patient',$data,true);
	    $this->load->view('admin/admin_dashboard',$data);

	}

	public function update_patient($patient_id){
		$data =array();
		//$data['all_department_name']=$this->Admin_Model->display_department();
		$data['update_patient']=$this->Admin_Model->update_patient($patient_id);
	 $data['contents']=$this->load->view('admin/edit_patient',$data,true);
	 $this->load->view('admin/admin_dashboard',$data);




	}
	public function update_patient_data(){
		$this->Admin_Model->update_patient_info();


			$sdata['message']='Patient Updated Successfully';
	         $this->session->set_flashdata($sdata);

	         redirect('Admin/show_patient',$data);




	}
	public function Schedule(){
		$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
		//$data['all_doctor']=$this->Admin_Model->all_doctor_list();
	$data['contents']=$this->load->view('admin/schedule','',true);
	$this->load->view('admin/admin_dashboard',$data);


	}
	public function add_schedule(){

		$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	$data['all_doctor']=$this->Admin_Model->all_doctor_info();
	//$data['all_doctor_id']=$this->Admin_Model->all_doctor_id();
	$data['contents']=$this->load->view('admin/add_schedule',$data,true);
	$this->load->view('admin/admin_dashboard',$data);


	}
	public function add_schedule_info(){

		$this->Admin_Model->add_schedule_data();

			$sdata['message']='Schedule Added Successfully';
	         $this->session->set_flashdata($sdata);

	         redirect('Admin/add_schedule',$data);
	}
	public function show_schedule(){
		$data= array();
		$data['all_schedule']=$this->Admin_Model->show_schedule_info();
		$data['contents']=$this->load->view('admin/show_schedule',$data,true);
	    $this->load->view('admin/admin_dashboard',$data);

	}
	public function delete_schedule($schedule_id){

		$this->Admin_Model->delete_schedule($schedule_id);

		$sdata['message']='Department Delete Successfully';
	         $this->session->set_flashdata($sdata);

	         redirect('Admin/show_schedule',$data);

	}
	public function update_schedule($schedule_id){
		$data =array();
		//$data['all_department_name']=$this->Admin_Model->display_department();
		$data['update_schedule']=$this->Admin_Model->update_schedule($schedule_id);
	 $data['contents']=$this->load->view('admin/edit_schedule',$data,true);
	 $this->load->view('admin/admin_dashboard',$data);



	}
	public function update_schedule_info(){
		//$data=array();
		$this->Admin_Model->update_schedule_info();

		
			$sdata['message']='Schedule Updated Successfully';
	         $this->session->set_flashdata($sdata);

	        redirect('Admin/show_schedule',$data);

//print_r($schedule_id);
//print_r($data);

	}
	public function appointment(){

		$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
		//$data['all_doctor']=$this->Admin_Model->all_doctor_list();
	$data['contents']=$this->load->view('admin/appointment','',true);
	$this->load->view('admin/admin_dashboard',$data);


	}
	public function add_appointment(){
		$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	$data['all_doctor']=$this->Admin_Model->all_doctor_info();
	$data['all_department']=$this->Admin_Model->display_department();
	//$data['all_doctor_id']=$this->Admin_Model->all_doctor_id();
	$data['contents']=$this->load->view('admin/add_appointment',$data,true);
	$this->load->view('admin/admin_dashboard',$data);


	}
	public function add_appointment_data(){
		$this->Admin_Model->add_appointment_info();
		
			$sdata['message']='Appointment Added Successfully';
	         $this->session->set_flashdata($sdata);

	        redirect('Admin/add_appointment',$data);

	}
	public function show_appointment_by_all(){
		$data=array();
		$data['appoinment_by_all']=$this->Admin_Model->show_appointment_by_all_info();

		
		$data['contents']=$this->load->view('admin/show_appointment_by_all',$data,true);
	    $this->load->view('admin/admin_dashboard',$data);


	}
	public function update_appointment($appointment_id){

		$data =array();
		$data['all_department_name']=$this->Admin_Model->display_department();
		$data['update_appointment']=$this->Admin_Model->update_appointment_data($appointment_id);
		$data['all_doctor']=$this->Admin_Model->all_doctor_info();
	 $data['contents']=$this->load->view('admin/edit_appointment',$data,true);
	 $this->load->view('admin/admin_dashboard',$data);





	}
	public function update_appointment_data_info(){

		$this->Admin_Model->update_appointment_data_info_by_id();

		
			$sdata['message']='Appointment Updated Successfully';
	         $this->session->set_flashdata($sdata);

	        redirect('Admin/show_appointment_by_all',$data);



	}
	public function view_department($department_id){
		$data=array();
	
	//$data['all_doctor']=$this->Admin_Model->all_doctor_info();
	$data['department_info']=$this->Admin_Model->display_department_info($department_id);
	//$data['all_doctor_id']=$this->Admin_Model->all_doctor_id();
	$data['contents']=$this->load->view('admin/view_department',$data,true);
	$this->load->view('admin/admin_dashboard',$data);


	}

	public function show_appointment_doctor(){
			$data=array();
		$data['appoinment_by_doctor']=$this->Admin_Model->show_appointment_by_doctor();

		
		$data['contents']=$this->load->view('admin/show_appointment_by_doctor',$data,true);
	    $this->load->view('admin/admin_dashboard',$data);


	}
	public function show_appointment_admin(){
		$data=array();
		$data['appoinment_by_doctor']=$this->Admin_Model->show_appointment_by_doctor();

		
		$data['contents']=$this->load->view('admin/show_appointment_by_doctor',$data,true);
	    $this->load->view('admin/admin_dashboard',$data);


	}
	public function human_resource(){


		$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
		//$data['all_doctor']=$this->Admin_Model->all_doctor_list();
	$data['contents']=$this->load->view('admin/human_resource','',true);
	$this->load->view('admin/admin_dashboard',$data);

	}
	
	public function add_employee(){

		$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	//$data['all_department_name']=$this->Admin_Model->display_department();
	$data['contents']=$this->load->view('admin/add_employee','',true);
	$this->load->view('admin/admin_dashboard',$data);


	}

	public function add_employee_information(){

		$this->load->library('form_validation');
		$this->form_validation->set_rules('employee_password','Password','trim|required|min_length[5]|max_length[12]');
		$this->form_validation->set_rules('employee_phone','Number','trim|required|max_length[11]|min_length[11]');

		
		$this->form_validation->set_rules('employee_email','Email','trim|required|valid_email|is_unique[db_doctor.doctor_email]');
		if($this->form_validation->run()==FALSE){
			
			redirect('Admin/add_employee');
		}
		else{
			//echo"Right";
	$this->Admin_Model->save_employee_info();
     $sdata=array();
	$sdata['message']='Employee Added Successfully';
	$this->session->set_flashdata($sdata);

	redirect('Admin/add_employee',$data);


	}
}

public function show_employee_doctor(){
	$data=array();

		$data['all_employee_doctor']=$this->Admin_Model->show_employee_doctor_info();
		$data['contents']=$this->load->view('admin/show_employee_doctor',$data,true);
	    $this->load->view('admin/admin_dashboard',$data);



}

public function show_employee_accountant(){

	$data=array();

		$data['all_employee_accountant']=$this->Admin_Model->show_employee_accountant_info();
		$data['contents']=$this->load->view('admin/show_employee_accountant',$data,true);
	    $this->load->view('admin/admin_dashboard',$data);




}

public function delete_employee_accountant($employee_id){

	$this->Admin_Model->delete_employee_accountant_info($employee_id);
		$sdata['message']='Employee Delete Successfully';
	         $this->session->set_flashdata($sdata);

	         redirect('Admin/show_employee_accountant',$data);


}
public function update_employee_accountant($employee_id){

	$data =array();
		$data['update_employee_accountant']=$this->Admin_Model->update_employee_accountant_info($employee_id);
	 $data['contents']=$this->load->view('admin/edit_employee_account',$data,true);
	 $this->load->view('admin/admin_dashboard',$data);

}

public function update_employee_accountant_data(){
	
		$this->Admin_Model->update_employee_accountant_information();


			$sdata['message']='Employee Updated Successfully';
	         $this->session->set_flashdata($sdata);

	         redirect('Admin/show_employee_accountant',$data);	


}

public function show_employee_nurse(){

	$data=array();

		$data['all_employee_nurse']=$this->Admin_Model->show_employee_nurse_info();
		$data['contents']=$this->load->view('admin/show_employee_nurse',$data,true);
	    $this->load->view('admin/admin_dashboard',$data);



}

public function delete_employee_nurse($employee_id){

	$this->Admin_Model->delete_employee_nurse($employee_id);
		$sdata['message']='Nurse Delete Successfully';
	         $this->session->set_flashdata($sdata);

	         redirect('Admin/show_employee_nurse',$data);




}
public function bed_management(){


		$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
		//$data['all_doctor']=$this->Admin_Model->all_doctor_list();
	$data['contents']=$this->load->view('admin/bed_management','',true);
	$this->load->view('admin/admin_dashboard',$data);




}

public function add_bed(){

		$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	//$data['all_department_name']=$this->Admin_Model->display_department();
	$data['contents']=$this->load->view('admin/add_bed_information','',true);
	$this->load->view('admin/admin_dashboard',$data);



}

public function save_bed_info(){


		$this->Admin_Model->save_bed_information();

			$sdata['message']='Bed  Added Successfully';
	         $this->session->set_flashdata($sdata);

	         redirect('Admin/add_bed',$data);



}
public function show_all_bed(){
	    $data=array();

		$data['all_bed']=$this->Admin_Model->show_all_bed_information();
		$data['contents']=$this->load->view('admin/show_bed',$data,true);
	    $this->load->view('admin/admin_dashboard',$data);


}

public function bed_assign_info(){


		$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	$data['all_bed_type']=$this->Admin_Model->show_bed_type();
	$data['contents']=$this->load->view('admin/bed_assign',$data,true);
	$this->load->view('admin/admin_dashboard',$data);





}

public function save_bed_assign(){

		$this->Admin_Model->save_bed_assign_information();

			$sdata['message']='Bed Assign Successfully';
	         $this->session->set_flashdata($sdata);

	         redirect('Admin/bed_assign_info',$data);






}

public function hospital_activities(){

		$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
		//$data['all_doctor']=$this->Admin_Model->all_doctor_list();
	$data['contents']=$this->load->view('admin/hospital_activities','',true);
	$this->load->view('admin/admin_dashboard',$data);



}
public function add_birth_report(){


		$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	$data['all_doctor']=$this->Admin_Model->all_doctor_info();
	$data['contents']=$this->load->view('admin/add_birth_report',$data,true);
	$this->load->view('admin/admin_dashboard',$data);



}

public function save_birth_report(){
	$this->Admin_Model->save_birth_report_information();

			$sdata['message']='Birth Report Added Successfully';
	         $this->session->set_flashdata($sdata);

	         redirect('Admin/add_birth_report',$data);





}

public function show_all_birth_report(){

	    $data=array();

		$data['all_birth_report']=$this->Admin_Model->all_birth_report();
		$data['contents']=$this->load->view('admin/show_all_birth_report',$data,true);
	    $this->load->view('admin/admin_dashboard',$data);



}

public function delete_birth_report($birth_report_id){
	$this->Admin_Model->delete_birth_report($birth_report_id);
		$sdata['message']='Birth Report Delete Successfully';
	         $this->session->set_flashdata($sdata);

	         redirect('Admin/show_all_birth_report',$data);




}

public function add_death_report(){

		$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	$data['all_doctor']=$this->Admin_Model->all_doctor_info();
	$data['contents']=$this->load->view('admin/add_death_report',$data,true);
	$this->load->view('admin/admin_dashboard',$data);



}

public function save_death_report(){

	$this->Admin_Model->save_death_report_information();

			$sdata['message']='Death Report Added Successfully';
	         $this->session->set_flashdata($sdata);

	         redirect('Admin/add_death_report',$data);




}

public function show_all_death_report(){

	 $data=array();

		$data['all_death_report']=$this->Admin_Model->all_death_report();
		$data['contents']=$this->load->view('admin/show_all_death_report',$data,true);
	    $this->load->view('admin/admin_dashboard',$data);



}

public function view_doctor_information($doctor_id){

	$data=array();

		$data['view_doctor_information']=$this->Admin_Model->view_doctor_information($doctor_id);
		$data['contents']=$this->load->view('admin/view_doctor_information',$data,true);
	    $this->load->view('admin/admin_dashboard',$data);

}

public function view_patient_information($patient_id){

$data=array();

	       //  redirect('Doctor/doctor_assign_bed',$data);
		$data['view_patient_information']=$this->Admin_Model->view_patient_information($patient_id);
		$data['contents']=$this->load->view('admin/view_patient_information',$data,true);
	    $this->load->view('admin/admin_dashboard',$data);



}

public function view_schedule_information($schedule_id){
	    $data=array();

	       //  redirect('Doctor/doctor_assign_bed',$data);
		$data['view_schedule_information']=$this->Admin_Model->view_schedule_information($schedule_id);
		$data['contents']=$this->load->view('admin/view_schedule_information',$data,true);
	    $this->load->view('admin/admin_dashboard',$data);



}

public function view_appointment_information($appointment_id){
	  $data=array();

	       //  redirect('Doctor/doctor_assign_bed',$data);
		$data['view_appointment_information']=$this->Admin_Model->view_appointment_information($appointment_id);
		$data['contents']=$this->load->view('admin/view_appointment_information',$data,true);
	    $this->load->view('admin/admin_dashboard',$data);


}

public function view_employee_information($employee_id){
	  $data=array();

	       //  redirect('Doctor/doctor_assign_bed',$data);
		$data['view_employee_information']=$this->Admin_Model->view_employee_information($employee_id);
		$data['contents']=$this->load->view('admin/view_employee_information',$data,true);
	    $this->load->view('admin/admin_dashboard',$data);


}

public function show_bed_assign_information(){

	    $data=array();

		$data['show_bed_assign_information']=$this->Admin_Model->show_bed_assign_information();
		$data['contents']=$this->load->view('admin/show_bed_assign_information',$data,true);
	    $this->load->view('admin/admin_dashboard',$data);


}
public function view_bed_assign_information($bed_assign_id){
	    $data=array();

	       //  redirect('Doctor/doctor_assign_bed',$data);
		$data['view_bed_assign_information']=$this->Admin_Model->view_bed_assign_information($bed_assign_id);
		$data['contents']=$this->load->view('admin/view_bed_assign_information',$data,true);
	    $this->load->view('admin/admin_dashboard',$data);

}

public function view_appointment_doctor_information($appointment_id){
	$data=array();

	       //  redirect('Doctor/doctor_assign_bed',$data);
		$data['view_appointment_doctor_information']=$this->Admin_Model->view_appointment_doctor_information($appointment_id);
		$data['contents']=$this->load->view('admin/view_appointment_doctor_information',$data,true);
	    $this->load->view('admin/admin_dashboard',$data);



}

public function view_birth_report($birth_report_id){

		$data=array();

	       //  redirect('Doctor/doctor_assign_bed',$data);
		$data['view_birth_report']=$this->Admin_Model->view_birth_report($birth_report_id);
		$data['contents']=$this->load->view('admin/view_birth_report',$data,true);
	    $this->load->view('admin/admin_dashboard',$data);



}
public function view_death_report($death_report_id){
	    $data=array();

	       //  redirect('Doctor/doctor_assign_bed',$data);
		$data['view_death_report']=$this->Admin_Model->view_death_report($death_report_id);
		$data['contents']=$this->load->view('admin/view_death_report',$data,true);
	    $this->load->view('admin/admin_dashboard',$data);


}

public function notice_board(){

   $data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';

	$data['contents']=$this->load->view('admin/notice_board','',true);
	$this->load->view('admin/admin_dashboard',$data);



}

public function add_notice(){

	$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	$data['contents']=$this->load->view('admin/add_notice_board','',true);
	$this->load->view('admin/admin_dashboard',$data);

}
public function add_new_notice(){
	$this->Admin_Model->add_new_notice();

			$sdata['message']='Notice Added Successfully';
	         $this->session->set_flashdata($sdata);

	         redirect('Admin/add_notice',$data);



}
public function show_notice(){
	    $data=array();

		$data['all_notice']=$this->Admin_Model->show_notice_board();
		$data['contents']=$this->load->view('admin/show_notice_board',$data,true);
	    $this->load->view('admin/admin_dashboard',$data);



}

public function view_notice($notice_id){
	    $data=array();

	       //  redirect('Doctor/doctor_assign_bed',$data);
		$data['view_notice_information']=$this->Admin_Model->view_notice_information($notice_id);
		$data['contents']=$this->load->view('admin/view_notice_information',$data,true);
	    $this->load->view('admin/admin_dashboard',$data);


}
public function delete_notice($notice_id){
	$this->Admin_Model->delete_notice_info($notice_id);
		$sdata['message']='Notice Delete Successfully';
	         $this->session->set_flashdata($sdata);

	         redirect('Admin/show_notice',$data);



}

public function update_notice($notice_id){

	$data =array();
		$data['update_notice']=$this->Admin_Model->update_notice($notice_id);
	 $data['contents']=$this->load->view('admin/edit_notice',$data,true);
	 $this->load->view('admin/admin_dashboard',$data);

}

public function update_notice_info(){

		     $this->Admin_Model->update_notice_info();


			$sdata['message']='Notice Updated Successfully';
	         $this->session->set_flashdata($sdata);

	         redirect('Admin/show_notice',$data);


}

public function message(){

   $data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';

	$data['contents']=$this->load->view('admin/message','',true);
	$this->load->view('admin/admin_dashboard',$data);




}
public function new_message(){
	$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	$data['message_send_to']=$this->Admin_Model->message_send_to();
	$data['contents']=$this->load->view('admin/new_meaage',$data,true);
	$this->load->view('admin/admin_dashboard',$data);



}
public function new_message_send(){
	        $this->Admin_Model->new_message_send();


			$sdata['message']='Message Send Successfully';
	         $this->session->set_flashdata($sdata);

	         redirect('Admin/new_message',$data);



}
public function message_send_by_me(){
	 $data=array();

		$data['message_send_by_me']=$this->Admin_Model->message_send_by_me();
		$data['contents']=$this->load->view('admin/message_send_by_me',$data,true);
	    $this->load->view('admin/admin_dashboard',$data);



}
public function message_inbox(){
	$data=array();

		$data['message_inbox']=$this->Admin_Model->message_inbox();
		$data['contents']=$this->load->view('admin/message_inbox',$data,true);
	    $this->load->view('admin/admin_dashboard',$data);

	
}
public function delete_patient($patient_id){
	$this->Admin_Model->delete_patient($patient_id);
		$sdata['message']='Patient Delete Successfully';
	         $this->session->set_flashdata($sdata);

	         redirect('Admin/show_patient',$data);


}
public function prescription(){

   $data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';

	$data['contents']=$this->load->view('admin/prescription','',true);
	$this->load->view('admin/admin_dashboard',$data);




}
public function prescription_list(){
	$data=array();

		$data['prescription_list']=$this->Admin_Model->prescription_list();
		$data['contents']=$this->load->view('admin/prescription_list',$data,true);
	    $this->load->view('admin/admin_dashboard',$data);


}
public function view_prescription_patient_info($pres_id){

			$data=array();

	       //  redirect('Doctor/doctor_assign_bed',$data);
		$data['view_prescription_patient_info']=$this->Admin_Model->view_prescription_info($pres_id);
	$data['contents']=$this->load->view('admin/view_prescription_patient_info',$data,true);
	    $this->load->view('admin/admin_dashboard',$data);

}

public function account_manager(){

   $data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';

	$data['contents']=$this->load->view('admin/account_manager','',true);
	$this->load->view('admin/admin_dashboard',$data);


}
public function invoice_list(){
	$data=array();

		$data['invoice_list']=$this->Admin_Model->invoice_list();
		$data['contents']=$this->load->view('admin/invoice_list',$data,true);
	    $this->load->view('admin/admin_dashboard',$data);



}
public function view_invoice_information($invoice_no){

$data=array();

	       //  redirect('Doctor/doctor_assign_bed',$data);
		$data['view_invoice_information']=$this->Admin_Model->view_invoice_info($invoice_no);
		$data['contents']=$this->load->view('admin/view_invoice_information',$data,true);
	    $this->load->view('admin/admin_dashboard',$data);



}

public function bloodbank(){

	 $data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';

	$data['contents']=$this->load->view('admin/bloodbank','',true);
	$this->load->view('admin/admin_dashboard',$data);



}
public function add_bloodtype(){
	$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	$data['bloodtpes']=$this->Admin_Model->bloodtpes();
	$data['contents']=$this->load->view('admin/add_blood_type',$data,true);
	$this->load->view('admin/admin_dashboard',$data);


}
public function add_blood_types(){


	$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	//$data['message_send_to']=$this->Admin_Model->message_send_to();
	$data['contents']=$this->load->view('admin/add_blood_types',$data,true);
	$this->load->view('admin/admin_dashboard',$data);

}
public function save_blood_type(){
	$this->Admin_Model->save_blood_type();
		$sdata['message']='Blood Type Added Successfully';
	         $this->session->set_flashdata($sdata);

	         redirect('Admin/add_bloodtype',$data);


}
public function edit_blood_type($blood_type_id){

	$data =array();
		$data['edit_blood_type']=$this->Admin_Model->edit_blood_type($blood_type_id);
	 $data['contents']=$this->load->view('admin/edit_blood_type',$data,true);
	 $this->load->view('admin/admin_dashboard',$data);

}
public function edit_blood_types(){

$this->Admin_Model->edit_blood_types();


			$sdata['message']='Blood Updated Successfully';
	         $this->session->set_flashdata($sdata);

	         redirect('Admin/add_bloodtype',$data);


}
public function delete_bloodtype($blood_type_id){
	$this->Admin_Model->delete_bloodtype($blood_type_id);
		$sdata['message']='Blood Type Delete Successfully';
	         $this->session->set_flashdata($sdata);

	         redirect('Admin/add_bloodtype',$data);


}
public function add_blood_quantity(){

	$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	$data['add_blood_quantity']=$this->Admin_Model->add_blood_quantity();
	$data['contents']=$this->load->view('admin/add_blood_quantity',$data,true);
	$this->load->view('admin/admin_dashboard',$data);



}
public function save_blood_quantity(){
	$this->Admin_Model->save_blood_quantity();
		$sdata['message']='Blood Quantity Added Successfully';
	         $this->session->set_flashdata($sdata);

	         redirect('Admin/add_blood_quantity',$data);



}
public function blood_transection_inpatinet(){
	$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	$data['blood_transection_inpatinet']=$this->Admin_Model->add_blood_quantity();
	$data['contents']=$this->load->view('admin/blood_transection_inpatinet',$data,true);
	$this->load->view('admin/admin_dashboard',$data);



}
public function save_blood_transection(){
	$this->Admin_Model->save_blood_transection();
		$sdata['message']='Blood Transection Successfully';
	         $this->session->set_flashdata($sdata);

	         redirect('Admin/blood_transection_inpatinet',$data);




}
public function blood_transection_inpatinet_list(){
	$data=array();

		$data['blood_transection_inpatinet_list']=$this->Admin_Model->blood_transection_inpatinet_list();
		$data['contents']=$this->load->view('admin/blood_transection_inpatinet_list',$data,true);
	    $this->load->view('admin/admin_dashboard',$data);



}
public function view_transection_blood_inpatient($blood_transection_id){

$data=array();

	       //  redirect('Doctor/doctor_assign_bed',$data);
		$data['view_transection_blood_inpatient']=$this->Admin_Model->view_transection_blood_inpatient($blood_transection_id);
		$data['contents']=$this->load->view('admin/view_transection_blood_inpatient',$data,true);
	    $this->load->view('admin/admin_dashboard',$data);


}
public function available_blood(){

	$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	$data['available_blood_transection_inpatinet']=$this->Admin_Model->available_blood_transection_inpatinet();
	$data['available_blood_quantity']=$this->Admin_Model->available_blood_quantity();
	$data['contents']=$this->load->view('admin/available_blood',$data,true);
	$this->load->view('admin/admin_dashboard',$data);


}
public function add_employee_category(){

	$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	//$data['message_send_to']=$this->Admin_Model->message_send_to();
	$data['contents']=$this->load->view('admin/add_employee_type',$data,true);
	$this->load->view('admin/admin_dashboard',$data);


}
public function  add_employee_types(){
	$this->Admin_Model->add_employee_types();
		$sdata['message']='Employee Category added Successfully';
	         $this->session->set_flashdata($sdata);

	         redirect('Admin/add_employee_category',$data);



}
public function add_shift(){

$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	//$data['message_send_to']=$this->Admin_Model->message_send_to();
	$data['contents']=$this->load->view('admin/add_shift',$data,true);
	$this->load->view('admin/admin_dashboard',$data);

}
public function add_shift_info(){
	$this->Admin_Model->add_shift_info();
		$sdata['message']='Shift added Successfully';
	         $this->session->set_flashdata($sdata);

	         redirect('Admin/add_shift',$data);


}
public function shift_list(){
	$data=array();

		$data['shift_list']=$this->Admin_Model->shift_list();
		$data['contents']=$this->load->view('admin/shift_list',$data,true);
	    $this->load->view('admin/admin_dashboard',$data);



}

public function delete_shift($shift_id){
	$this->Admin_Model->delete_shift($shift_id);
		$sdata['message']='Shift Delete Successfully';
	         $this->session->set_flashdata($sdata);

	         redirect('Admin/shift_list',$data);



}
public function delete_appointment($appointment_id){
	$this->Admin_Model->delete_appointment($appointment_id);
		$sdata['message']='Appointment Delete Successfully';
	         $this->session->set_flashdata($sdata);

	         redirect('Admin/show_appointment_by_all',$data);




}

}