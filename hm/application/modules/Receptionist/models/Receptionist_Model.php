<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Receptionist_Model extends CI_Model {

	
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
	public function view_doctor_information($doctor_id){

		$this->db->select("*");
		$this->db->from("db_doctor");
		$this->db->where("doctor_id",$doctor_id);
		$query_result=$this->db->get();
		$view_doctor_information=$query_result->result();

		return $view_doctor_information;

	}
	public function display_department(){
		$this->db->select('department_name');
		$this->db->from('db_department');
		$query_result=$this->db->get();
		$all_department_name=$query_result->result();

		return $all_department_name;



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

		//$data['patient_birth_date']=$this->input->post('patient_birth_date',true);
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
       // $login_data['date']=$this->input->post('patient_birth_date',true);
         $login_data['role_id']=$this->input->post('role_id',true);
        $this->db->insert('users',$login_data);



	}

	public function show_patient_list(){


		$this->db->select("*");
		$this->db->from("db_patient");
		$query_result=$this->db->get();
		$all_patient=$query_result->result();

		return $all_patient;



	}
	public function view_patient_information($patient_id){

		$this->db->select("*");
		$this->db->from("db_patient");
		$this->db->where("patient_id",$patient_id);
		$query_result=$this->db->get();
		$view_patient_information=$query_result->result();

		return $view_patient_information;



	}
	public function all_schedule(){


		$this->db->select("*");
		$this->db->from("db_schedule");
		$query_result=$this->db->get();
		$all_schedule=$query_result->result();

		return $all_schedule;

	}
	public function all_doctor_info(){

		$this->db->select("doctor_first_name");
		$this->db->from("db_doctor");

		$query_result=$this->db->get();
		$all_doctor=$query_result->result();

		return $all_doctor;


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
	public function show_appointment_list(){

		$this->db->select("*");
		$this->db->from("db_appointment");
		$query_result=$this->db->get();
		$all_appointment=$query_result->result();

		return $all_appointment;



	}
	public function appointment_assign_by_me(){



		$keyword=$this->session->userdata('name');
		$this->db->select("*");
		$this->db->from("db_appointment");
		$this->db->like('added_by_name', $keyword);
		$query_result=$this->db->get();
		$appointment_assign_by_me=$query_result->result();

		return $appointment_assign_by_me;
	}
	public function view_notice_information(){



		$this->db->select("*");
		$this->db->from("db_notice_board");
		
		$query_result=$this->db->get();
		$view_notice_information=$query_result->result();

		return $view_notice_information;

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