<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Model extends CI_Model {

	
	public function index()
	{
		
	}
	public function save_department_info(){

		$data=array();

		$data['department_name']=$this->input->post('department_name',true);
		$data['department_description']=$this->input->post('department_description',true);
		$data['department_status']=$this->input->post('department_status',true);
		$data['date_of_open']=$this->input->post('date_of_open',true);

		$this->db->insert('db_department',$data);



	}
	public function show_department(){

		$this->db->select("*");
		$this->db->from("db_department");
		$query_result=$this->db->get();
		$all_department=$query_result->result();

		return $all_department;



	}
	public function display_department(){
		
       $this->db->select('department_name');
		$this->db->from('db_department');
		$query_result=$this->db->get();
		$all_department_name=$query_result->result();

		return $all_department_name;







	}
	public function save_doctor_info(){

		$data =array();

		$data['doctor_first_name']=$this->input->post('doctor_first_name',true);
		$data['doctor_last_name']=$this->input->post('doctor_last_name',true);
		$data['doctor_email']=$this->input->post('doctor_email',true);

		$data['doctor_password']=md5($this->input->post('doctor_password',true));

		$data['doctor_designation']=$this->input->post('doctor_designation',true);

		$data['doctor_department']=$this->input->post('doctor_department',true);

		$data['doctor_address']=$this->input->post('doctor_address',true);

		$data['doctor_phone']=$this->input->post('doctor_phone',true);

		$data['doctor_mobile']=$this->input->post('doctor_mobile',true);

		$data['doctor_birth_date']=$this->input->post('doctor_birth_date',true);
		$data['sex']=$this->input->post('sex',true);
		$data['doctor_blood']=$this->input->post('doctor_blood',true);
		$data['doctor_status']=$this->input->post('doctor_status',true);

		$this->db->insert('db_doctor',$data);

		$login_data=array();
		$login_data['name']=$this->input->post('doctor_first_name',true);
		$login_data['email']=$this->input->post('doctor_email',true);

		$login_data['password']=md5($this->input->post('doctor_password',true));
        $login_data['status']=$this->input->post('doctor_status',true);
        $login_data['date']=$this->input->post('doctor_birth_date',true);
         $login_data['role_id']=$this->input->post('role_id',true);
        $this->db->insert('users',$login_data);





	}

	public function save_employee_info(){

		$data =array();

		$data['employee_role']=$this->input->post('employee_role',true);

		$data['employee_first_name']=$this->input->post('employee_first_name',true);
		$data['employee_last_name']=$this->input->post('employee_last_name',true);
		$data['employee_email']=$this->input->post('employee_email',true);

		$data['employee_password']=md5($this->input->post('employee_password',true));

		
		$data['employee_address']=$this->input->post('employee_address',true);

		$data['employee_phone']=$this->input->post('employee_phone',true);

		
		$data['employee_join_date']=$this->input->post('employee_join_date',true);
		$data['employee_sex']=$this->input->post('employee_sex',true);
		$data['employee_blood']=$this->input->post('employee_blood',true);
		$data['employee_status']=$this->input->post('employee_status',true);

		$this->db->insert('db_employee',$data);

		$login_data=array();
		$login_data['name']=$this->input->post('employee_first_name',true);
		$login_data['email']=$this->input->post('employee_email',true);

		$login_data['password']=md5($this->input->post('employee_password',true));
        $login_data['status']=$this->input->post('employee_status',true);
        $login_data['date']=$this->input->post('employee_join_date',true);
         $login_data['role_id']=$this->input->post('employee_role',true);
        $this->db->insert('users',$login_data);






	}

	public function show_doctor_info(){

		$this->db->select("*");
		$this->db->from("db_doctor");
		$query_result=$this->db->get();
		$all_doctor=$query_result->result();

		return $all_doctor;




	}
	public function save_patient_info(){

		$data =array();

		$data['patient_new_id']=$this->input->post('patient_new_id',true);
		$data['patient_first_name']=$this->input->post('patient_first_name',true);
		$data['patient_last_name']=$this->input->post('patient_last_name',true);
		$data['patient_email']=$this->input->post('patient_email',true);

		$data['patient_password']=md5($this->input->post('patient_password',true));

		$data['patient_address']=$this->input->post('patient_address',true);

		$data['patient_phone']=$this->input->post('patient_phone',true);

		$data['patient_mobile']=$this->input->post('patient_mobile',true);

		//$data['doctor_phone']=$this->input->post('doctor_phone',true);

		//$data['doctor_mobile']=$this->input->post('doctor_mobile',true);

		$data['patient_birth_date']=$this->input->post('patient_birth_date',true);
		$data['patient_sex']=$this->input->post('patient_sex',true);
		$data['patient_blood']=$this->input->post('patient_blood',true);
		$data['patient_status']=$this->input->post('patient_status',true);
		$data['added_by_name']=$this->input->post('added_by_name',true);

		$data['added_by_type']=$this->input->post('added_by_type',true);


		$this->db->insert('db_patient',$data);

		$login_data=array();
		$login_data['name']=$this->input->post('patient_first_name',true);
		$login_data['email']=$this->input->post('patient_email',true);

		$login_data['password']=md5($this->input->post('patient_password',true));
        $login_data['status']=$this->input->post('patient_status',true);
        $login_data['date']=$this->input->post('patient_birth_date',true);
         $login_data['role_id']=$this->input->post('role_id',true);
        $this->db->insert('users',$login_data);





	}
	public function update_department($department_id){

		$this->db->select("*");
		$this->db->from("db_department");
		$this->db->where("department_id",$department_id);

		$query_result=$this->db->get();
		$update_department=$query_result->row();

		return $update_department;

	}
	public function update_department_data(){

		$data=array();

		$department_id=$this->input->post('department_id',true);

		$data['department_name']=$this->input->post('department_name',true);
		$data['department_description']=$this->input->post('department_description',true);
		$data['department_status']=$this->input->post('department_status',true);
		$data['date_of_open']=$this->input->post('date_of_open',true);
		$this->db->where('department_id',$department_id);
		$this->db->update('db_department',$data);

	}
	public function delete_data_info($department_id){

		$this->db->where('department_id',$department_id);
		$this->db->delete('db_department');


	}

	public function delete_appointment_doctor($appointment_id){
		$this->db->where('appointment_id',$appointment_id);
		$this->db->delete('db_appointment');


	}
	public function update_doctor($doctor_id){


		$this->db->select("*");
		$this->db->from("db_doctor");
		$this->db->where("doctor_id",$doctor_id);

		$query_result=$this->db->get();
		$update_doctor=$query_result->row();

		return $update_doctor;



	}
	public function update_doctor_info(){
			$data=array();

		$doctor_id=$this->input->post('doctor_id',true);

		$data['doctor_first_name']=$this->input->post('doctor_first_name',true);
		$data['doctor_last_name']=$this->input->post('doctor_last_name',true);
		$data['doctor_email']=$this->input->post('doctor_email',true);
	    $data['doctor_password']=$this->input->post('doctor_password',true);

		$data['doctor_designation']=$this->input->post('doctor_designation',true);
		$data['doctor_department']=$this->input->post('doctor_department',true);
		$data['doctor_address']=$this->input->post('doctor_address',true);
		$data['doctor_phone']=$this->input->post('doctor_phone',true);
		$data['doctor_mobile']=$this->input->post('doctor_mobile',true);
		$data['doctor_birth_date']=$this->input->post('doctor_birth_date',true);
		$data['sex']=$this->input->post('sex',true);
		$data['doctor_blood']=$this->input->post('doctor_blood',true);
		
		$data['doctor_blood']=$this->input->post('doctor_blood',true);
		$data['doctor_status']=$this->input->post('doctor_status',true);
		
		$this->db->where('doctor_id',$doctor_id);
		$this->db->update('db_doctor',$data);


		//$login_data=array();
		//$login_data['name']=$this->input->post('doctor_first_name',true);
		//$login_data['email']=$this->input->post('doctor_email',true);

		//$login_data['password']=md5($this->input->post('doctor_password',true));
        //$login_data['status']=$this->input->post('doctor_status',true);
        //$login_data['date']=$this->input->post('doctor_birth_date',true);
         //$login_data['role_id']=$this->input->post('role_id',true);
        //$this->db->insert('users',$login_data);



	}
	public function delete_doctor_info($doctor_id){

		$this->db->where('doctor_id',$doctor_id);
		$this->db->delete('db_doctor');


	}

	public function show_patient_info(){


		$this->db->select("*");
		$this->db->from("db_patient");
		$query_result=$this->db->get();
		$all_patient=$query_result->result();

		return $all_patient;



	}
	public function update_patient($patient_id){

		$this->db->select("*");
		$this->db->from("db_patient");
		$this->db->where("patient_id",$patient_id);

		$query_result=$this->db->get();
		$update_patient=$query_result->row();

		return $update_patient;




	}
	public function update_patient_info(){

		$data=array();

		$patient_id=$this->input->post('patient_id',true);

		$data['patient_first_name']=$this->input->post('patient_first_name',true);
		$data['patient_last_name']=$this->input->post('patient_last_name',true);
		$data['patient_email']=$this->input->post('patient_email',true);
	    $data['patient_password']=$this->input->post('patient_password',true);

		$data['patient_address']=$this->input->post('patient_address',true);
		$data['patient_phone']=$this->input->post('patient_phone',true);
		$data['patient_mobile']=$this->input->post('patient_mobile',true);
		$data['patient_birth_date']=$this->input->post('patient_birth_date',true);
		$data['patient_sex']=$this->input->post('patient_sex',true);
		$data['patient_blood']=$this->input->post('patient_blood',true);
		$data['patient_status']=$this->input->post('patient_status',true);
		
		$this->db->where('patient_id',$patient_id);
		$this->db->update('db_patient',$data);

		
	}
	public function all_doctor_info(){
		$this->db->select("doctor_first_name");
		$this->db->from("db_doctor");

		$query_result=$this->db->get();
		$all_doctor=$query_result->result();

		return $all_doctor;

	}
	public function all_doctor_id(){
		$this->db->select("doctor_id");
		$this->db->from("db_doctor");
		$this->db->where("doctor_first_name",$schedule_doctor);

		$query_result=$this->db->get();
		$all_doctor_id=$query_result->row();

		return $all_doctor_id;

	}
	public function add_schedule_data(){

		$data=array();

		$data['schedule_doctor']=$this->input->post('schedule_doctor',true);
		$data['schedule_day']=$this->input->post('schedule_day',true);
		$data['start_time']=$this->input->post('start_time',true);
		$data['end_time']=$this->input->post('end_time',true);
		$data['schedule_time']=$this->input->post('schedule_time',true);
		$data['schedule_serial']=$this->input->post('schedule_serial',true);
        $data['status']=$this->input->post('status',true);
        $data['added_by_name']=$this->input->post('added_by_name',true);

         $data['added_by_type']=$this->input->post('added_by_type',true);

	
		$this->db->insert('db_schedule',$data);



	}
	public function show_schedule_info(){
		$this->db->select("*");
		$this->db->from("db_schedule");

		$query_result=$this->db->get();
		$all_schedule=$query_result->result();

		return $all_schedule;



	}
	public function delete_schedule($schedule_id){


		$this->db->where('schedule_id',$schedule_id);
		$this->db->delete('db_schedule');


	}
	public function update_schedule($schedule_id){
		$this->db->select("*");
		$this->db->from("db_schedule");
		$this->db->where("schedule_id",$schedule_id);

		$query_result=$this->db->get();
		$update_schedule=$query_result->row();

		return $update_schedule;


	}
	public function update_schedule_info(){

		$data=array();

		$schedule_id=$this->input->post('schedule_id',true);

		$data['schedule_doctor']=$this->input->post('schedule_doctor',true);
		$data['schedule_day']=$this->input->post('schedule_day',true);
		$data['start_time']=$this->input->post('start_time',true);
	    $data['end_time']=$this->input->post('end_time',true);

		$data['schedule_time']=$this->input->post('schedule_time',true);
		$data['schedule_serial']=$this->input->post('schedule_serial',true);
		$data['status']=$this->input->post('status',true);
		//$data['added_by_name']=$this->input->post('added_by_name',true);
		//$data['added_by_type']=$this->input->post('added_by_type',true);
		
		
		$this->db->where('schedule_id',$schedule_id);
		$this->db->update('db_schedule',$data);


	}
	public function add_appointment_info(){

		$data=array();

		$data['appointment_pateint_id']=$this->input->post('appointment_pateint_id',true);
		$data['appointment_pateint_name']=$this->input->post('appointment_pateint_name',true);
		$data['appointment_department']=$this->input->post('appointment_department',true);
		$data['appointment_doctor']=$this->input->post('appointment_doctor',true);
		$data['appointment_date']=$this->input->post('appointment_date',true);
		$data['appointment_time']=$this->input->post('appointment_time',true);
        $data['appointment_serial']=$this->input->post('appointment_serial',true);
        $data['appointment_problem']=$this->input->post('appointment_problem',true);

         $data['status']=$this->input->post('status',true);
         $data['added_by_name']=$this->input->post('added_by_name',true);
         $data['added_by_type']=$this->input->post('added_by_type',true);

	
		$this->db->insert('db_appointment',$data);

	}
	public function show_appointment_by_all_info(){
		$this->db->select("*");
		$this->db->from("db_appointment");

		$query_result=$this->db->get();
		$appoinment_by_all=$query_result->result();
		return $appoinment_by_all;



	}

	public function show_appointment_by_doctor(){
		$keyword=1;
		$this->db->select("*");
		$this->db->from("db_appointment");
$this->db->like('added_by_type', $keyword);	
		$query_result=$this->db->get();
		$appoinment_by_doctor=$query_result->result();
		return $appoinment_by_doctor;



	}



	public function update_appointment_data($appointment_id){
		$this->db->select("*");
		$this->db->from("db_appointment");
		$this->db->where("appointment_id",$appointment_id);

		$query_result=$this->db->get();
		$update_appointment=$query_result->row();

		return $update_appointment;




	}
	public function update_appointment_data_info_by_id(){


		$data=array();

		$appointment_id=$this->input->post('appointment_id',true);

		$data['appointment_pateint_id']=$this->input->post('appointment_pateint_id',true);
		$data['appointment_pateint_name']=$this->input->post('appointment_pateint_name',true);
		$data['appointment_department']=$this->input->post('appointment_department',true);
		$data['appointment_doctor']=$this->input->post('appointment_doctor',true);
		$data['appointment_date']=$this->input->post('appointment_date',true);
		$data['appointment_time']=$this->input->post('appointment_time',true);
		$data['appointment_serial']=$this->input->post('appointment_serial',true);
		$data['appointment_problem']=$this->input->post('appointment_problem',true);
		$data['status']=$this->input->post('status',true);
		

		$this->db->where('appointment_id',$appointment_id);
		$this->db->update('db_appointment',$data);


	}
	public function display_department_info($department_id){
		$this->db->select("*");
		$this->db->from("db_department");
		$this->db->where("department_id",$department_id);
		$query_result=$this->db->get();
		$department_info=$query_result->row();
		return $department_info;



	}

	public function show_employee_doctor_info(){

	    $keyword=3;
		$this->db->select("*");
		$this->db->from("db_employee");
$this->db->like('employee_role', $keyword);	
		$query_result=$this->db->get();
		$all_employee_doctor=$query_result->result();
		return $all_employee_doctor;


	}

	public function show_employee_accountant_info(){
		 $keyword=3;
		$this->db->select("*");
		$this->db->from("db_employee");
$this->db->like('employee_role', $keyword);	
		$query_result=$this->db->get();
		$all_employee_accountant=$query_result->result();
		return $all_employee_accountant;


	}

	public function delete_employee_accountant_info($employee_id){

		$this->db->where('employee_id',$employee_id);
		$this->db->delete('db_employee');



	}
	public function update_employee_accountant_info($employee_id){

	$this->db->select("*");
		$this->db->from("db_employee");
		$this->db->where("employee_id",$employee_id);

		$query_result=$this->db->get();
		$update_employee_accountant=$query_result->row();

		return $update_employee_accountant;		


	}
	public function update_employee_accountant_information(){

		$data=array();

		$data['employee_id']=$this->input->post('employee_id',true);

		$data['employee_first_name']=$this->input->post('employee_first_name',true);
		$data['employee_last_name']=$this->input->post('employee_last_name',true);
		$data['employee_email']=$this->input->post('employee_email',true);
		$data['employee_address']=$this->input->post('employee_address',true);
		$data['employee_phone']=$this->input->post('employee_phone',true);

	//	$data['employee_status']=$this->input->post('employee_status',true);
		//$data['employee_sex']=$this->input->post('employee_sex',true);
//$data['employee_status']=$this->input->post('employee_status',true);



		$this->db->where('employee_id', $data['employee_id']);
		$this->db->update('db_employee',$data);
	//	$this->db->delete('db_employee');
		//$this->db->insert('db_employee',$data);




	}

	public function show_employee_nurse_info(){


		 $keyword=5;
		$this->db->select("*");
		$this->db->from("db_employee");
$this->db->like('employee_role', $keyword);	
		$query_result=$this->db->get();
		$all_employee_nurse=$query_result->result();
		return $all_employee_nurse;


	}

	public function delete_employee_nurse($employee_id){


		$this->db->where('employee_id',$employee_id);
		$this->db->delete('db_employee');



	}

	public function save_bed_information(){

		$data=array();

		//$appointment_id=$this->input->post('appointment_id',true);

		$data['bed_type']=$this->input->post('bed_type',true);
		$data['bed_description']=$this->input->post('bed_description',true);
		$data['bed_capacity']=$this->input->post('bed_capacity',true);
		$data['bed_charge']=$this->input->post('bed_charge',true);
		$data['bed_status']=$this->input->post('bed_status',true);
		
		

		$this->db->insert('db_bed',$data);


	}

	public function show_all_bed_information(){
        $this->db->select("*");
		$this->db->from("db_bed");
		$query_result=$this->db->get();
		$all_bed=$query_result->result();

		return $all_bed;



	}

	public function show_bed_type(){

		$this->db->select("bed_type");
		$this->db->from("db_bed");

		$query_result=$this->db->get();
		$all_bed_type=$query_result->result();

		return $all_bed_type;



	}


	public function save_bed_assign_information(){
		$data=array();

		//$appointment_id=$this->input->post('appointment_id',true);

		$data['patient_id']=$this->input->post('patient_id',true);
		$data['bed_type']=$this->input->post('bed_type',true);
		$data['assign_date']=$this->input->post('assign_date',true);
		$data['discharge_date']=$this->input->post('discharge_date',true);
		$data['bed_assign_description']=$this->input->post('bed_assign_description',true);
		$data['bed_assign_status']=$this->input->post('bed_assign_status',true);
		$data['added_by_name']=$this->input->post('added_by_name',true);
		$data['added_by_type']=$this->input->post('added_by_type',true);
		
		

		$this->db->insert('db_bed_assign',$data);




	}

	public function save_birth_report_information(){
		$data=array();

		//$appointment_id=$this->input->post('appointment_id',true);

		$data['birth_paient_id']=$this->input->post('birth_paient_id',true);
		$data['birth_title']=$this->input->post('birth_title',true);
		$data['birth_date']=$this->input->post('birth_date',true);
		$data['birth_time']=$this->input->post('birth_time',true);
		
		$data['birth_description']=$this->input->post('birth_description',true);
		
		$data['birth_report_doctor']=$this->input->post('birth_report_doctor',true);
		$data['birth_report_status']=$this->input->post('birth_report_status',true);
		
		

		$this->db->insert('db_birth_report',$data);




	}

	public function all_birth_report(){
		$this->db->select("*");
		$this->db->from("db_birth_report");
		$query_result=$this->db->get();
		$all_birth_report=$query_result->result();

		return $all_birth_report;




	}

	public function delete_birth_report($birth_report_id){

		$this->db->where('birth_report_id',$birth_report_id);
		$this->db->delete('db_birth_report');



	}

	public function save_death_report_information(){

		$data=array();

		//$appointment_id=$this->input->post('appointment_id',true);

		$data['death_paient_id']=$this->input->post('death_paient_id',true);
		$data['death_title']=$this->input->post('death_title',true);
		$data['death_date']=$this->input->post('death_date',true);
		$data['death_time']=$this->input->post('death_time',true);
		
		$data['death_description']=$this->input->post('death_description',true);
		
		$data['death_report_doctor']=$this->input->post('death_report_doctor',true);
		$data['death_report_status']=$this->input->post('death_report_status',true);
		
		

		$this->db->insert('db_death_report',$data);



	}

	public function all_death_report(){
		$this->db->select("*");
		$this->db->from("db_death_report");
		$query_result=$this->db->get();
		$all_death_report=$query_result->result();

		return $all_death_report;



	}

	public function view_doctor_information($doctor_id){

		$this->db->select("*");
		$this->db->from("db_doctor");
		$this->db->where("doctor_id",$doctor_id);
		$query_result=$this->db->get();
		$view_doctor_information=$query_result->result();

		return $view_doctor_information;		


	}

	public function view_patient_information($patient_id){
		$this->db->select("*");
		$this->db->from("db_patient");
		$this->db->where("patient_id",$patient_id);
		$query_result=$this->db->get();
		$view_patient_information=$query_result->result();

		return $view_patient_information;

	}
	public function view_schedule_information($schedule_id){
		$this->db->select("*");
		$this->db->from("db_schedule");
		$this->db->where("schedule_id",$schedule_id);
		$query_result=$this->db->get();
		$view_schedule_information=$query_result->result();

		return $view_schedule_information;


	}

	public function view_appointment_information($appointment_id){

		$this->db->select("*");
		$this->db->from("db_appointment");
		$this->db->where("appointment_id",$appointment_id);
		$query_result=$this->db->get();
		$view_appointment_information=$query_result->result();

		return $view_appointment_information;


	}

	public function view_employee_information($employee_id){

		$this->db->select("*");
		$this->db->from("db_employee");
		$this->db->where("employee_id",$employee_id);
		$query_result=$this->db->get();
		$view_employee_information=$query_result->result();

		return $view_employee_information;


	}
	public function show_bed_assign_information(){

		  $this->db->select("*");
		$this->db->from("db_bed_assign");
		$query_result=$this->db->get();
		$show_bed_assign_information=$query_result->result();

		return $show_bed_assign_information;



	}

	public function view_bed_assign_information($bed_assign_id){
		$this->db->select("*");
		$this->db->from("db_bed_assign");
		$this->db->where("bed_assign_id",$bed_assign_id);
		$query_result=$this->db->get();
		$view_bed_assign_information=$query_result->result();

		return $view_bed_assign_information;


	}

	public function view_appointment_doctor_information($appointment_id){
		$this->db->select("*");
		$this->db->from("db_appointment");
		$this->db->where("appointment_id",$appointment_id);
		$query_result=$this->db->get();
		$view_appointment_doctor_information=$query_result->result();

		return $view_appointment_doctor_information;





	}
	public function view_birth_report($birth_report_id){
			$this->db->select("*");
		$this->db->from("db_birth_report");
		$this->db->where("birth_report_id",$birth_report_id);
		$query_result=$this->db->get();
		$view_birth_report=$query_result->result();

		return $view_birth_report;



	}
	public function view_death_report($death_report_id){
		$this->db->select("*");
		$this->db->from("db_death_report");
		$this->db->where("death_report_id",$death_report_id);
		$query_result=$this->db->get();
		$view_death_report=$query_result->result();

		return $view_death_report;


	}
	public function add_new_notice(){

		$data=array();

		//$appointment_id=$this->input->post('appointment_id',true);

		$data['notice_board_title']=$this->input->post('notice_board_title',true);
		$data['notice_board_description']=$this->input->post('notice_board_description',true);
		$data['notice_board_status']=$this->input->post('notice_board_status',true);
		
		$data ['notice_date'] = date('Y-m-d H:i:s');
		$this->db->insert('db_notice_board',$data);



	}
	public function show_notice_board(){

		$this->db->select("*");
		$this->db->from("db_notice_board");
		$query_result=$this->db->get();
		$all_notice=$query_result->result();

		return $all_notice;



	}
	public function view_notice_information($notice_id){
		$this->db->select("*");
		$this->db->from("db_notice_board");
		$this->db->where("notice_id",$notice_id);
		$query_result=$this->db->get();
		$view_notice_information=$query_result->result();

		return $view_notice_information;


	}

	public function delete_notice_info($notice_id){


		$this->db->where('notice_id',$notice_id);
		$this->db->delete('db_notice_board');

	}
	public function update_notice($notice_id){

		$this->db->select("*");
		$this->db->from("db_notice_board");
		$this->db->where("notice_id",$notice_id);

		$query_result=$this->db->get();
		$update_notice=$query_result->row();

		return $update_notice;


	}
	public function update_notice_info(){
		$data=array();

		$notice_id=$this->input->post('notice_id',true);

		$data['notice_board_title']=$this->input->post('notice_board_title',true);
		$data['notice_board_description']=$this->input->post('notice_board_description',true);
		
		$this->db->where('notice_id',$notice_id);
		$this->db->update('db_notice_board',$data);


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

	public function message_send_by_me(){

		$keyword= $this->session->userdata('email');
		$this->db->select("*");
		$this->db->from("db_message");
$this->db->like('added_by_email', $keyword);	
		$query_result=$this->db->get();
		$message_send_by_me=$query_result->result();
		return $message_send_by_me;


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
	public function prescription_list(){


		$this->db->select("*");
		$this->db->from("db_prescription2");
		$query_result=$this->db->get();
		$prescription_list=$query_result->result();

		return $prescription_list;

	}
	public function view_prescription_info($pres_id){

		$this->db->select("*");
		$this->db->from("db_prescription2");
		$this->db->where("pres_id",$pres_id);
		$query_result=$this->db->get();
		$view_prescription_patient_info=$query_result->result();

		return $view_prescription_patient_info;

	}
	public function invoice_list(){

		$this->db->select("*");
		$this->db->from("db_invoice");
		$query_result=$this->db->get();
		$invoice_list=$query_result->result();

		return $invoice_list;

	}
	public function view_invoice_info($invoice_no){

		$this->db->select("*");
		$this->db->from("db_invoice");
		$this->db->where("invoice_no",$invoice_no);
		$query_result=$this->db->get();
		$view_invoice_information=$query_result->result();

		return $view_invoice_information;


	}
	public function save_blood_type(){

		$data=array();

		//$appointment_id=$this->input->post('appointment_id',true);

		$data['blood_type_name']=$this->input->post('blood_type_name',true);
		$data['blood_cost']=$this->input->post('blood_cost',true);
		
		$this->db->insert('db_bloodtype',$data);

	}
	public function bloodtpes(){
		$this->db->select("*");
		$this->db->from("db_bloodtype");
		$query_result=$this->db->get();
		$bloodtpes=$query_result->result();

		return $bloodtpes;

	}
	public function edit_blood_type($blood_type_id){

		$this->db->select("*");
		$this->db->from("db_bloodtype");
		$this->db->where("blood_type_id",$blood_type_id);

		$query_result=$this->db->get();
		$edit_blood_type=$query_result->row();

		return $edit_blood_type;

	}
	public function edit_blood_types(){

		$data=array();

		$blood_type_id=$this->input->post('blood_type_id',true);

		$data['blood_cost']=$this->input->post('blood_cost',true);
		
		
		$this->db->where('blood_type_id',$blood_type_id);
		$this->db->update('db_bloodtype',$data);



	}
	public function delete_bloodtype($blood_type_id){

		$this->db->where('blood_type_id',$blood_type_id);
		$this->db->delete('db_bloodtype');

	}
	public function add_blood_quantity(){
		$this->db->select("blood_type_name");
		$this->db->from("db_bloodtype");
		$query_result=$this->db->get();
		$add_blood_quantity=$query_result->result();

		return $add_blood_quantity;


	}
	public function save_blood_quantity(){


		$data=array();

		//$appointment_id=$this->input->post('appointment_id',true);

		$data['blood_quantity_type']=$this->input->post('blood_quantity_type',true);
		$data['blood_quantity_from']=$this->input->post('blood_quantity_from',true);
		$data['blood_quantity_address']=$this->input->post('blood_quantity_address',true);
		
		$data['blood_quantity_quantity']=$this->input->post('blood_quantity_quantity',true);
		
		
		$data ['blood_quantity_date'] = date('Y-m-d H:i:s');
		$this->db->insert('db_blood_quantity',$data);

	}
	public function save_blood_transection(){

		$data=array();

		//$appointment_id=$this->input->post('appointment_id',true);

		$data['blood_transection_patient_id']=$this->input->post('blood_transection_patient_id',true);
		$data['blood_transection_type']=$this->input->post('blood_transection_type',true);
		$data['blood_transection_quantity']=$this->input->post('blood_transection_quantity',true);
		$data ['blood_transection_date'] = date('Y-m-d H:i:s');
		
		$this->db->insert('db_blood_transection_inpatient',$data);

	}
	public function blood_transection_inpatinet_list(){
		$this->db->select("*");
		$this->db->from("db_blood_transection_inpatient");
		$query_result=$this->db->get();
		$blood_transection_inpatinet_list=$query_result->result();

		return $blood_transection_inpatinet_list;

	}
	public function view_transection_blood_inpatient($blood_transection_id){

		$this->db->select("*");
		$this->db->from("db_blood_transection_inpatient");
		$this->db->where("blood_transection_id",$blood_transection_id);

		$query_result=$this->db->get();
		$view_transection_blood_inpatient=$query_result->row();

		return $view_transection_blood_inpatient;


	}
	public function available_blood_transection_inpatinet(){
		$this->db->select("*");
		$this->db->from("db_blood_transection_inpatient");
		$query_result=$this->db->get();
		$available_blood_transection_inpatinet=$query_result->row();

		return $available_blood_transection_inpatinet;

	}
	public function available_blood_quantity(){
		$this->db->select("*");
		$this->db->from("db_blood_quantity");
		$query_result=$this->db->get();
		$available_blood_quantity=$query_result->result();

		return $available_blood_quantity;

	}
	public function add_employee_types(){
			$data=array();

		//$appointment_id=$this->input->post('appointment_id',true);

		$data['employee_position']=$this->input->post('employee_position',true);
		$data['employee_salary']=$this->input->post('employee_salary',true);
		
		
		
		$this->db->insert('db_employee_type',$data);


	}
	public function add_shift_info(){

		$data=array();

		//$appointment_id=$this->input->post('appointment_id',true);

		$data['shift_day']=$this->input->post('shift_day',true);
		$data['start_time']=$this->input->post('start_time',true);

		$data['end_time']=$this->input->post('end_time',true);
		$data['shift_type']=$this->input->post('shift_type',true);
		
		
		
		$this->db->insert('db_shift',$data);

	}
	public function shift_list(){
		$this->db->select("*");
		$this->db->from("db_shift");
		$query_result=$this->db->get();
		$shift_list=$query_result->result();

		return $shift_list;


	}

	public function delete_shift($shift_id){
		$this->db->where('shift_id',$shift_id);
		$this->db->delete('db_shift');


	}

	public function delete_appointment($appointment_id){
		$this->db->where('appointment_id',$appointment_id);
		$this->db->delete('db_appointment');




	}
}
