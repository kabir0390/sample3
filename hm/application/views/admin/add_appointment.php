 <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Appointment</h3>
               <?php  $message= $this->session->flashdata('message');
    if($message) {?>
     <div class="alert alert-success">
      <?=$message;?>
    </div>
    <?php }?>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url();?>Admin/add_appointment_data" method="post" 
              enctype="multipart/form-data">
              <div class="box-body">
               <div class="form-group">

                  <label for="inputEmail3" class="col-sm-4 control-label">Patient ID </label>

                  <div class="col-xs-5">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Patient ID" required name="appointment_pateint_id">
                  </div>
                </div>

                <div class="form-group">

                  <label for="inputEmail3" class="col-sm-4 control-label">Patient Name </label>

                  <div class="col-xs-5">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Enter First Name" required name="appointment_pateint_name">
                  </div>
                </div>

                    <div class="form-group">
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Department Name</label>

                  <div class="col-xs-5">
                    <select class="form-control" name="appointment_department">
                      
                      <?php 

                     foreach ($all_department as $value) {
                       # code...
                      echo '<option value="'.$value->department_name.'">'.$value->department_name.'</option>';
                     }
                     ?>
                    </select>
                  </div>
                </div>




                <div class="form-group">
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Doctor Name</label>

                  <div class="col-xs-5">
                    <select class="form-control" name="appointment_doctor">
                      <?php 

                     foreach ($all_doctor as $value) {
                       # code...
                      echo '<option value="'.$value->doctor_first_name.'">'.$value->doctor_first_name.'</option>';
                     }
                     ?>
                    </select>
                  </div>
                </div>

                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">appointment Date</label>

                  <div class="col-xs-5">
                     <input type="date"   min="2000-01-02" class="signup_input"  name="appointment_date">
                  </div>



                 <div class="form-group">
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Available Time </label>

                  <div class="col-xs-5">
                   <div class="row">
                     <div class="col-md-6">
                     <div class="form-control-wrapper">
                   <div class="input-group clockpicker" data-placement="top" data-align="left" data-donetext="Done">
      <input type="text" class="form-control" value="18:00" name="appointment_time">
      <span class="input-group-addon">
        <span class="glyphicon glyphicon-time"></span>
      </span>
    </div>
                   </div>
                 </div>

                
                      </div> 
                  </div>
                </div>
                </div>

<!-- 
               <?php 
                       
             $this->db->select("appointment_serial");
             $this->db->from("db_appointment");
             $query_result=$this->db->get();
             $all_department=$query_result->row();
            
            
           // if($all_department[0])
                      ?> -->
<!-- 
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iubat";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT appointment_serial FROM db_appointment";
$result = $conn->query($sql);

if ($result) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $arr[]= $row["appointment_serial"];
    }
} else {
    echo "0 results";
}

for ($i=0; $i <sizeof($arr); $i++) { 
  # code...
  if($arr[0]=='1')
  {

    echo "d";
  }
  else{

    echo "w";
  }
}

foreach ($arr as $key => $value) {

  echo $value;
  # code...
}
$conn->close();
?> 
 -->

 
                 <div class="form-group">
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Serial No</label>

                  <div class="col-xs-5">
                    <select class="form-control" name="appointment_serial">
                      


                      <option 
                      
                    ><?php 
                  
                      # code...
                      if(in_array('1', $arr) ){
                          echo "  1 (Already Appointed)";
                        }else{

                          echo "1";
                        
                        }
                    
                        
                      ?></option>
                       <option><?php 
                  
                      # code...
                      if(in_array('2', $arr) ){
                          echo "  2 (Already Appointed)";
                        }else{

                          echo "2";
                        
                        }
                    
                        
                      ?></option>
                        <option>
                         <?php 
                  
                      # code...
                      if(in_array('3', $arr) ){
                          echo "  3 (Already Appointed)";
                        }else{

                          echo "3";
                        
                        }
                    
                        
                      ?>
                        </option>
                         <option>
                           <?php 
                  
                      # code...
                      if(in_array('4', $arr) ){
                          echo "  4 (Already Appointed)";
                        }else{

                          echo "4";
                        
                        }
                    
                        
                      ?>
                         </option>
                          <option>
                            
                            <?php 
                  
                      # code...
                      if(in_array('5', $arr) ){
                          echo "  5 (Already Appointed)";
                        }else{

                          echo "5";
                        
                        }
                    
                        
                      ?>
                          </option>
                           <option><?php 
                  
                      # code...
                      if(in_array('6', $arr) ){
                          echo "  6 (Already Appointed)";
                        }else{

                          echo "6";
                        
                        }
                    
                        
                      ?></option>
                            <option><?php 
                  
                      # code...
                      if(in_array('7', $arr) ){
                          echo "  7 (Already Appointed)";
                        }else{

                          echo "7";
                        
                        }
                    
                        
                      ?></option>
                       <option><?php 
                  
                      # code...
                      if(in_array('8', $arr) ){
                          echo "  8 (Already Appointed)";
                        }else{

                          echo "8";
                        
                        }
                    
                        
                      ?></option>
                       <option><?php 
                  
                      # code...
                      if(in_array('9', $arr) ){
                          echo "  9 (Already Appointed)";
                        }else{

                          echo "9";
                        
                        }
                    
                        
                      ?></option>
                       <option><?php 
                  
                      # code...
                      if(in_array('10', $arr) ){
                         // echo "  10 (Already Appointed)";
                          //echo "disabled=\"disabled\";
                          echo "disabled=\"true\"";
                        }else{

                        echo "10";
                        
                        }
                    
                        
                      ?></option>
                           
                    </select>
                  </div>
                </div>

              
               <div class="form-group">
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Problems</label>

                  <div class="col-xs-5">
                    <textarea class="form-control" rows="3" placeholder="Enter ..." name="appointment_problem"></textarea>
                  </div>
                </div>
                
               


                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Status</label>

                  <div class="col-xs-5">
                      <div class="radio">
                    <label><input type="radio" name="status" value="1">Active</label>
                    <label><input type="radio" name="status" value="0">Inactive</label>

                </div>
                  </div>
                </div>


                 <div class="form-group">
                  
                 

                  <div class="col-xs-3">
                    <?php $name=$this->session->userdata('name');
                    $role_id=$this->session->userdata('role_id');
                   
                   // print_r($user_name);
                   // echo('<br />');
                   // print_r($login_type);
                  ?>
                    <input type="hidden" class="form-control" id="inputEmail3" 
                    name="added_by_name" value="<?php print_r($name) ;?>">
                  </div>
                  <div class="col-xs-2">
                   
                    <input type="hidden" class="form-control" id="inputEmail3"  
                    name="added_by_type" value="<?php echo $role_id;?>"  >
                  </div>


                </div>


              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">ADD</button>
              </div>


              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box 