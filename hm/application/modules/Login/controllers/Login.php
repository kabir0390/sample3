<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  function __construct(){

    parent :: __construct();
    
    
    
  }
  public function index()
  {
    $this->load->view('login');
  }

  public function logout(){


    $this->session->unset_userdata('login_email');
    $this->session->unset_userdata('id');

    $sdata=array();
    $sdata['logout']='Logout Successfully';
    $this->session->set_flashdata($sdata);
    redirect('Login/index');

  }

  public function login_check(){


    $username=$this->input->post('username');
    $password=md5($this->input->post('password'));
    $type=$this->input->post('type');
        
      
    $this->load->model('Login_Model');
    $user_info=$this->Login_Model->login_check_info($username,$password,$type);

    if (empty($user_info)) {
    $this ->session -> set_flashdata('message', 'Wrong username or password !!');
     $this ->load->view('login'); } 
    else if($user_info['status']=='deactive'){
      $this ->session-> set_flashdata('message2', 'Your Id is Deactive !!');
    $this ->load->view('login'); 
    }
    else if($user_info['status']=='block'){
      $this ->session-> set_flashdata('message3', 'Your Id is Blocked !!');
    $this ->load->view('login'); 
    }else

     {

    // $newdata = array(
      //     'login_email' => $user_info['login_email'],
      
        //   'logged_in' => TRUE,
        // 'id'=>$user_info['id'],
     // 'role_id'=>$user_info['role_id'],
     // '//name'=>$user_info['name']);
      // var_dump($newdata);
      // exit();
      //$this -> session -> set_userdata( $newdata )); 
     // redirect('Login/dashboard');

      $this->load->model('Login_Model');
    $user_type=$this->Login_Model->check_type($type);


    if($user_type['role_id']=='1')
    {

      $newdata=array(

        'name'=>$user_info['name'],
        'email'=>$user_info['email'],
        'logged_in'=>true,
        'role_id'=>$user_info['role_id'],
        'id'=>$user_info['id'],
        'date'=>$user_info['date'],
       );
        $this->session->set_userdata( $newdata );

           
        redirect('Admin/dashboard');
        
    }else if($user_type['role_id']=='2'){

      $newdata=array(

       'name'=>$user_info['name'],
       'email'=>$user_info['email'],
        'logged_in'=>true,
        'role_id'=>$user_info['role_id'],
        'id'=>$user_info['id'],
        'date'=>$user_info['date'],);
        $this->session->set_userdata( $newdata );

           
        redirect('Doctor/dashboard');
    }else if($user_type['role_id']=='4'){
      $newdata=array(

       'name'=>$user_info['name'],
        'logged_in'=>true,
        'role_id'=>$user_info['role_id'],
        'email'=>$user_info['email'],
        'id'=>$user_info['id'],
        'date'=>$user_info['date'],);
        $this->session->set_userdata( $newdata );



           
        redirect('Accountant/dashboard');

    }
    else if($user_type['role_id']=='5'){
      $newdata=array(

       'name'=>$user_info['name'],
       'email'=>$user_info['email'],
        'logged_in'=>true,
        'role_id'=>$user_info['role_id'],
        'id'=>$user_info['id'],
        'date'=>$user_info['date'],);
        $this->session->set_userdata( $newdata );



           
        redirect('Pharmacist/dashboard');

    }
     else if($user_type['role_id']=='7'){
      $newdata=array(

       'name'=>$user_info['name'],
       'email'=>$user_info['email'],
        'logged_in'=>true,
        'role_id'=>$user_info['role_id'],
        'id'=>$user_info['id'],
        'date'=>$user_info['date'],);
        $this->session->set_userdata( $newdata );



           
        redirect('Laboratorist/dashboard');

    }

     else if($user_type['role_id']=='6'){
      $newdata=array(

       'name'=>$user_info['name'],
       'email'=>$user_info['email'],
        'logged_in'=>true,
        'role_id'=>$user_info['role_id'],
        'id'=>$user_info['id'],
        'date'=>$user_info['date'],);
        $this->session->set_userdata( $newdata );



           
        redirect('Receptionist/dashboard');

    }


  
  }
  
}
}
