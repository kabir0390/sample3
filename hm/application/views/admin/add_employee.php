 <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Add Employee</h3>
               <?php  $message= $this->session->flashdata('message');
    if($message) {?>
     <div class="alert alert-success">
      <?=$message;?>
    </div>
    <?php }?>

          </div>
            <!-- /.box-header -->
            <!-- form start -->

            <?php
        $this->load->helper('form');
        echo validation_errors(); ?>

            <form class="form-horizontal" action="<?php echo base_url();?>Admin/add_employee_information" method="post" 
              enctype="multipart/form-data">
              <div class="box-body">


               <div class="form-group">
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">User Role</label>

                  <div class="col-xs-5">
                    <select class="form-control" name="employee_role">
                      
                      <option value="1">Admin</option>
                       <option value="2">Doctor</option>
                        <option value="3">Patient</option>
                         <option value="4">Accountant</option>
                          <option value="5">Pharmacist</option>
                            <option value="6">Receptionist</option>
                             <option value="7">Lab Operator</option>
                          
                    </select>
                  </div>
                </div>






                <div class="form-group">

                  <label for="inputEmail3" class="col-sm-4 control-label">First Name </label>

                  <div class="col-xs-5">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Enter First Name" required name="employee_first_name">
                  </div>
                </div>

                <div class="form-group">
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Last Name </label>

                  <div class="col-xs-5">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Last Name" required name="employee_last_name">
                  </div>
                </div>

                <div class="form-group">
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Email Address </label>

                  <div class="col-xs-5">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Enter Email" required name="employee_email">
                  </div>
                </div>

                <div class="form-group">
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Password </label>

                  <div class="col-xs-5">
                    <input type="password" class="form-control" id="inputEmail3" placeholder="Enter Password" required name="employee_password">
                  </div>
                </div>
               
               
               <div class="form-group">
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Address </label>

                  <div class="col-xs-5">
                    <textarea class="form-control" rows="3" placeholder="Enter ..." name="employee_address"></textarea>
                  </div>
                </div>
                <div class="form-group">

                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Phone </label>

                  <div class="col-xs-5">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Phone Number" required name="employee_phone">
                  </div>
                </div>

                 
<!-----------------
                <div class="form-group">
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Picture </label>

                  <div class="col-xs-5">
                    <input type="file" id="exampleInputFile" name="doctor_picture">
                  </div>
                </div>

                ------->

               <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Date of Join</label>

                  <div class="col-xs-5">
                     <input type="date"   min="2000-01-02" class="signup_input"  name="employee_join_date">
                  </div>
                </div>

                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Sex</label>

                  <div class="col-xs-5">
                    <div class="radio">
                      <label><input type="radio" name="employee_sex" value="Male">Male</label>
                      <label><input type="radio" name="employee_sex" value="Female">Female</label>
                    </div>
                  </div>
                </div>



               <div class="form-group">
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Blood Group</label>

                  <div class="col-xs-5">
                    <select class="form-control" name="employee_blood">
                      
                      <option>A+</option>
                       <option>B+</option>
                        <option>AB+</option>
                         <option>AB-</option>
                          <option>o+</option>
                           <option>o-</option>
                            <option>A-</option>
                             <option>B-</option>
                    </select>
                  </div>
                </div>


                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Status</label>

                  <div class="col-xs-5">
                       <div class="radio">
                      <label><input type="radio" name="employee_status" value="Active">Active</label>
                      <label><input type="radio" name="employee_status" value="Inactive">Inactive</label>
                    </div>
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