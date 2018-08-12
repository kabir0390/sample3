<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){

		parent :: __construct();
		$this->load->model('Home_Model');
	}
	

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function all_doctor_list(){
		$data=array();

		$data['all_doctor']=$this->Home_Model->show_doctor_list();
		//$data['contents']=$this->load->view('doctor/show_doctor',$data,true);
	   $this->load->view('welcome_message',$data);
}
public function visitor_message(){

	$sdata=array();
	
	$sdata['all_message']=$this->Home_Model->save_visitor_message();
	$sdata['message']='Message  Send Successfully';
	$this->session->set_flashdata($sdata);

	//redirect('Home/index',$data);
		
	}
		

     function error_page(){

			echo "Please enter a valid input";
		}
}
