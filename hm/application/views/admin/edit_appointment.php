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
            <form class="form-horizontal" action="<?php echo base_url();?>Admin/update_appointment_data_info" method="post" 
              enctype="multipart/form-data">
              <div class="box-body">
               <div class="form-group">

                  <label for="inputEmail3" class="col-sm-4 control-label">Patient ID </label>

                  <div class="col-xs-5">
                    <input type="text" class="form-control" id="inputEmail3"  required name="appointment_pateint_id" value="<?php echo $update_appointment->appointment_pateint_id ;?>">
                  </div>
                </div>

                <div class="form-group">

                  <label for="inputEmail3" class="col-sm-4 control-label">Patient Name </label>

                  <div class="col-xs-5">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Enter First Name" required name="appointment_pateint_name" value="<?php echo $update_appointment->appointment_pateint_name ;?>">
                  </div>
                </div>

                    <div class="form-group">
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Department Name</label>

                  <div class="col-xs-5">
                    <select class="form-control" name="appointment_department">
                      
                      <?php 

                     foreach ($all_department_name as $value) {
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
                     <input type="date"   min="2000-01-02" class="signup_input"  name="appointment_date" value="<?php echo $update_appointment->appointment_date ;?>">
                  </div>



                 <div class="form-group">
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Available Time </label>

                  <div class="col-xs-5">
                   <div class="row">
                     <div class="col-md-6">
                     <div class="form-control-wrapper">
                   <div class="input-group clockpicker" data-placement="top" data-align="left" data-donetext="Done">
      <input type="text" class="form-control"  name="appointment_time" value="<?php echo $update_appointment->appointment_time ;?>">
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
                 <div class="form-group">
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Serial No</label>

                  <div class="col-xs-5">
                    <select class="form-control" name="appointment_serial">
                      
                      <option>1</option>
                       <option>2</option>
                        <option>3</option>
                         <option>4</option>
                          <option>5</option>
                           <option>6</option>
                            <option>7</option>
                           
                    </select>
                  </div>
                </div>
              
               <div class="form-group">
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Problems</label>

                  <div class="col-xs-5">
                    <textarea class="form-control" rows="3" placeholder="Enter ..." name="appointment_problem"><?php echo $update_appointment->appointment_problem ;?></textarea>
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
                <div class="form-group">

                  
                  <div class="col-xs-5">
                    <input type="hidden" class="form-control" id="inputEmail3"  required name="appointment_pateint_id" value="<?php echo $update_appointment->appointment_id ;?>">
                  </div>
                </div>

              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Update</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box 