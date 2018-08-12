<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laboratorist extends CI_Controller {

	
	public function index()
	{
	echo "Lab";
	}

	public function dashboard()
	{
	$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	$data['contents']=$this->load->view('laboratorist/dashboard','',true);

	$this->load->view('laboratorist/laboratorist_dashboard',$data);
	}

	public function dashboard_content(){


		echo "Dashboard";
	}
	public function laboratory(){


		$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	$data['contents']=$this->load->view('laboratorist/laboratory','',true);
	$this->load->view('laboratorist/laboratorist_dashboard',$data);

	}
	public function add_test(){
				$data=array();
	//$data['title']='Department ';
	//$data['sm_title']='Add Department';
	$data['contents']=$this->load->view('laboratorist/add_test','',true);
	$this->load->view('laboratorist/laboratorist_dashboard',$data);


	}
	public function add_test_info(){


		
	}
}
