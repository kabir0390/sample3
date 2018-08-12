<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor_Model extends CI_Model {

	
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
	public function save_patient_info(){


		$data =array();

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

	public function display_department(){
		 $this->db->select('department_name');
		$this->db->from('db_department');
		$query_result=$this->db->get();
		$all_department_name=$query_result->result();

		return $all_department_name;




	}

	public function show_patient_list(){



		$this->db->select("*");
		$this->db->from("db_patient");
		$query_result=$this->db->get();
		$all_patient=$query_result->result();

		return $all_patient;
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

	public function show_doctor_schedule_list(){


		$keyword= $this->session->userdata('name');
               
		$this->db->select("*");
		$this->db->from("db_schedule");
        $this->db->like('schedule_doctor', $keyword);	
		$query_result=$this->db->get();
		$doctor_schedule=$query_result->result();
		return $doctor_schedule;

                


	}

	public function delete_schedule($schedule_id){


		$this->db->where('schedule_id',$schedule_id);
		$this->db->delete('db_schedule');
	}

	public function all_doctor_info(){

		$this->db->select("doctor_first_name");
		$this->db->from("db_doctor");

		$query_result=$this->db->get();
		$all_doctor=$query_result->result();

		return $all_doctor;


	}

	public function display_department_info(){
		
       $this->db->select('department_name');
		$this->db->from('db_department');
		$query_result=$this->db->get();
		$all_department_name=$query_result->result();

		return $all_department_name;

	}

	public function add_doctor_appointment(){




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
	public function show_appointment_list(){

		$this->db->select("*");
		$this->db->from("db_appointment");
		$query_result=$this->db->get();
		$all_appointment=$query_result->result();

		return $all_appointment;


	}

	public function doctor_assign_to_me_info(){

		$keyword=$this->session->userdata('name');
		$this->db->select("*");
		$this->db->from("db_appointment");
		$this->db->like('appointment_doctor', $keyword);
		$query_result=$this->db->get();
		$all_doctor_assign_to_me=$query_result->result();

		return $all_doctor_assign_to_me;






	}

	public function doctor_assign_by_me_info(){


		$keyword=$this->session->userdata('name');
		$this->db->select("*");
		$this->db->from("db_appointment");
		$this->db->like('added_by_name', $keyword);
		$query_result=$this->db->get();
		$all_doctor_assign_by_me=$query_result->result();

		return $all_doctor_assign_by_me;


	}

	public function add_patient_case_study_info(){

		$data = array();

		$data['prescription_patient_id']=$this->input->post('prescription_patient_id',true);
		$data['prescription_food_allergies']=$this->input->post('prescription_food_allergies',true);
		
		$data['prescription_tendency_bleed']=$this->input->post('prescription_tendency_bleed',true);
		
		$data['prescription_heart_disease']=$this->input->post('prescription_heart_disease',true);
		
		$data['prescription_high_blood_pressure']=$this->input->post('prescription_high_blood_pressure',true);
		
		$data['prescription_diabetic']=$this->input->post('prescription_diabetic',true);

		$data['prescription_accident']=$this->input->post('prescription_accident',true);
		$data['prescription_Others']=$this->input->post('prescription_Others',true);
		$data['prescription_family']=$this->input->post('prescription_family',true);
		$data['prescription_medication']=$this->input->post('prescription_medication',true);
		$data['prescription_female_pregnancy']=$this->input->post('prescription_female_pregnancy',true);
		//$data['prescription_medication']=$this->input->post('prescription_medication',true);
		$data['prescription_breast_feeding']=$this->input->post('prescription_breast_feeding',true);
		$data['prescription_refference']=$this->input->post('prescription_refference',true);
		$data['status']=$this->input->post('status',true);
		


		$this->db->insert('db_patient_case_study',$data);



	}

	public function patient_case_study_list_info(){

		$this->db->select("*");
		$this->db->from("db_patient_case_study");
		$query_result=$this->db->get();
		$patient_case_study_list=$query_result->result();

		return $patient_case_study_list;


	}

	public function save_birth_report(){


		$data=array();

		$data['birth_paient_id']=$this->input->post('birth_paient_id',true);
		$data['birth_title']=$this->input->post('birth_title',true);
		$data['birth_date']=$this->input->post('birth_date',true);
		$data['birth_time']=$this->input->post('birth_time',true);
		$data['birth_description']=$this->input->post('birth_description',true);
		$data['birth_report_status']=$this->input->post('birth_report_status',true);
        $data['birth_report_doctor']=$this->input->post('birth_report_doctor',true);
        

	
		$this->db->insert('db_birth_report',$data);


	}

	public function birth_report_list_info(){

		$this->db->select("*");
		$this->db->from("db_birth_report");
		$query_result=$this->db->get();
		$birth_report_list=$query_result->result();

		return $birth_report_list;



	}

	public function save_death_report(){


		$data=array();

		$data['death_paient_id']=$this->input->post('death_paient_id',true);
		$data['death_title']=$this->input->post('death_title',true);
		$data['death_date']=$this->input->post('death_date',true);
		$data['death_time']=$this->input->post('death_time',true);
		$data['death_description']=$this->input->post('death_description',true);
		$data['death_report_status']=$this->input->post('death_report_status',true);
        $data['death_report_doctor']=$this->input->post('death_report_doctor',true);


		$this->db->insert('db_death_report',$data);


	}

	public function death_report_list_info(){

	$this->db->select("*");
		$this->db->from("db_death_report");
		$query_result=$this->db->get();
		$death_report_list=$query_result->result();

		return $death_report_list;		



	}	

	public function save_operation_report(){
		$data=array();

		$data['operation_paient_id']=$this->input->post('operation_paient_id',true);
		$data['operation_title']=$this->input->post('operation_title',true);
		$data['operation_date']=$this->input->post('operation_date',true);
		$data['operation_time']=$this->input->post('operation_time',true);
		$data['operation_description']=$this->input->post('operation_description',true);
		$data['operation_report_status']=$this->input->post('operation_report_status',true);
        $data['operation_report_doctor']=$this->input->post('operation_report_doctor',true);


		$this->db->insert('db_operation_report',$data);



	}

	public function operation_report_list_info(){
		$this->db->select("*");
		$this->db->from("db_operation_report");
		$query_result=$this->db->get();
		$operation_report_list=$query_result->result();

		return $operation_report_list;		





	}

	public function show_bed_type(){
		$this->db->select("bed_type");
		$this->db->from("db_bed");

		$query_result=$this->db->get();
		$all_bed_type=$query_result->result();

		return $all_bed_type;



	}

	public function save_bed_assign_info(){

		$data=array();

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

	public function bed_assign_list_info(){

		$this->db->select("*");
		$this->db->from("db_bed_assign");
		$query_result=$this->db->get();
		$bed_assign_list=$query_result->result();

		return $bed_assign_list;		


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

	public function view_appointment_information($appointment_id){

		$this->db->select("*");
		$this->db->from("db_appointment");
		$this->db->where("appointment_id",$appointment_id);
		$query_result=$this->db->get();
		$view_appointment_information=$query_result->result();

		return $view_appointment_information;

	}

	public function view_appointment_doctor_information($appointment_doctor){

		$this->db->select("*");
		$this->db->from("db_doctor");
		$this->db->where("doctor_first_name",$appointment_doctor);
		$query_result=$this->db->get();
		$view_appointment_doctor_information=$query_result->result();

		return $view_appointment_doctor_information;


	}

	public function view_appointment_information_assign_to_me($appointment_id){

		$this->db->select("*");
		$this->db->from("db_appointment");
		$this->db->where("appointment_id",$appointment_id);
		$query_result=$this->db->get();
		$view_appointment_information_assign_to_me=$query_result->result();

		return $view_appointment_information_assign_to_me;



	}

	public function delete_appointment_information_assign_to_me($appointment_id){


		$this->db->where('appointment_id',$appointment_id);
		$this->db->delete('db_appointment');


	}
	public function view_appointment_information_assign_by_me($appointment_id){


		$this->db->select("*");
		$this->db->from("db_appointment");
		$this->db->where("appointment_id",$appointment_id);
		$query_result=$this->db->get();
		$view_appointment_information_assign_by_me=$query_result->result();

		return $view_appointment_information_assign_by_me;


	}

	public function delete_appointment_information_assign_by_me($appointment_id){

		$this->db->where('appointment_id',$appointment_id);
		$this->db->delete('db_appointment');


	}

	public function view_birth_report_list($birth_report_id){

		$this->db->select("*");
		$this->db->from("db_birth_report");
		$this->db->where("birth_report_id",$birth_report_id);
		$query_result=$this->db->get();
		$view_birth_report_list=$query_result->result();

		return $view_birth_report_list;



	}

	public function view_death_report_list($death_report_id){
		$this->db->select("*");
		$this->db->from("db_death_report");
		$this->db->where("death_report_id",$death_report_id);
		$query_result=$this->db->get();
		$view_death_report_list=$query_result->result();

		return $view_death_report_list;


	}
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

	public function add_new_prescription(){

		//$medicine_name =$this->input->post('name[]',true);
		//$medicine_type=json_encode($this->input->post('name1[]'));

		$data=array();

		$data['prescription_id']=$this->input->post('prescription_id',true);
		//$data['prescription_date']=$this->input->post('prescription_date',true);
		$data ['prescription_date'] = date('Y-m-d H:i:s');
		$data['prescription_patient_id']=$this->input->post('prescription_patient_id',true);
		$data['prescription_patient_name']=$this->input->post('prescription_patient_name',true);

		$data['prescription_patient_address']=$this->input->post('prescription_patient_address',true);
		$data['prescription_medicine1']=$this->input->post('prescription_medicine1',true);
		$data['prescription_medicine_type1']=$this->input->post('prescription_medicine_type1',true);
		$data['prescription_instruction1']=$this->input->post('prescription_instruction1',true);
		$data['prescription_days1']=$this->input->post('prescription_days1',true);

		$data['prescription_medicine2']=$this->input->post('prescription_medicine2',true);
		$data['prescription_medicine_type2']=$this->input->post('prescription_medicine_type2',true);
		$data['prescription_instruction2']=$this->input->post('prescription_instruction2',true);
		$data['prescription_days2']=$this->input->post('prescription_days2',true);


		$data['prescription_medicine3']=$this->input->post('prescription_medicine3',true);
		$data['prescription_medicine_type3']=$this->input->post('prescription_medicine_type3',true);
		$data['prescription_instruction3']=$this->input->post('prescription_instruction3',true);
		$data['prescription_days3']=$this->input->post('prescription_days3',true);

		$data['prescription_medicine4']=$this->input->post('prescription_medicine4',true);
		$data['prescription_medicine_type4']=$this->input->post('prescription_medicine_type4',true);
		$data['prescription_instruction4']=$this->input->post('prescription_instruction4',true);
		$data['prescription_days4']=$this->input->post('prescription_days4',true);
		

		// $data['name']=$this->session->userdata('name');
		// $data['name1']=$this->session->userdata('name1');
		 // $data['name2'] =$this->session->userdata('name2');
		  // $data['name3']=$this->session->userdata('name3');
$data['prescription_fees']=$this->input->post('prescription_fees',true);
$data['prescription_patient_notes']=$this->input->post('prescription_patient_notes',true);

		$this->db->insert('db_prescription1',$data);






	}
	public function invoiceno(){
		$this->db->select("*");
		$this->db->from("invoiceno");
		
		$query_result=$this->db->get();
		$invoiceno=$query_result->result();

		return $invoiceno;


		
		

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
	public function add_new_prescription1(){

		$data=array();

		$data['prescription_id']=$this->input->post('prescription_id',true);
		//$data['prescription_date']=$this->input->post('prescription_date',true);
		$data ['prescription_date'] = date('Y-m-d H:i:s');
		$data['prescription_patient_id']=$this->input->post('prescription_patient_id',true);
		$data['prescription_patient_name']=$this->input->post('prescription_patient_name',true);

		$data['prescription_patient_address']=$this->input->post('prescription_patient_address',true);
		$data['prescription_medicine']=$this->input->post('prescription_medicine',true);
		
		

		// $data['name']=$this->session->userdata('name');
		// $data['name1']=$this->session->userdata('name1');
		 // $data['name2'] =$this->session->userdata('name2');
		  // $data['name3']=$this->session->userdata('name3');
$data['prescription_fees']=$this->input->post('prescription_fees',true);
$data['prescription_patient_notes']=$this->input->post('prescription_patient_notes',true);

		$this->db->insert('db_prescription2',$data);




	}

}