 <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Add Patient</h3>

               <?php  $errors= $this->session->flashdata('errors');
    if($errors) {?>
     <div class="alert alert-danger">
      <?=$errors;?>
    </div>
    <?php }?>
               <?php  $message= $this->session->flashdata('message');
    if($message) {?>
     <div class="alert alert-success">
      <?=$message;?>
    </div>
    <?php }?>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url();?>Doctor/save_patient" method="post" 
              enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">

                  <label for="inputEmail3" class="col-sm-4 control-label">First Name </label>

                  <div class="col-xs-5">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Enter First Name" required name="patient_first_name">
                  </div>
                </div>

                <div class="form-group">
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Last Name </label>

                  <div class="col-xs-5">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Last Name" required name="patient_last_name">
                  </div>
                </div>

                <div class="form-group">
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Email Address </label>

                  <div class="col-xs-5">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Enter Email" required name="patient_email">
                  </div>
                </div>

                <div class="form-group">
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Password </label>

                  <div class="col-xs-5">
                    <input type="password" class="form-control" id="inputEmail3" placeholder="Enter Password" required name="patient_password">
                  </div>
                </div>
                
               
               <div class="form-group">
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Address </label>

                  <div class="col-xs-5">
                    <textarea class="form-control" rows="3" placeholder="Enter ..." name="patient_address"></textarea>
                  </div>
                </div>
                <div class="form-group">

                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Phone </label>

                  <div class="col-xs-5">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Phone Number" required name="patient_phone">
                  </div>
                </div>

                 <div class="form-group">
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Refference Nummber</label>

                  <div class="col-xs-5">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Mobile" required 
                    name="patient_mobile">
                  </div>
                </div>
<!----------
                <div class="form-group">
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Picture </label>

                  <div class="col-xs-5">
                    <input type="file" id="exampleInputFile" name="patient_picture">
                  </div>
                </div>
-------------------->
               <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Added Date</label>

                  <div class="col-xs-5">
                     <input type="date"   min="2000-01-02" class="signup_input"  name="patient_birth_date">
                  </div>
                </div>

                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Sex</label>

                  <div class="col-xs-5">
                       <div class="radio">
                      <label><input type="radio" name="patient_sex" value="Male">Male</label>
                      <label><input type="radio" name="patient_sex" value="Female">Female</label>
                    </div>
                  </div>
                </div>



               <div class="form-group">
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Blood Group</label>

                  <div class="col-xs-5">
                    <select class="form-control" name="patient_blood">
                      
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
                      <label><input type="radio" name="patient_status" value="Active">Active</label>
                      <label><input type="radio" name="patient_status" value="Inactive">Inactive</label>
                    </div>
                  </div>
                </div>
                 <div class="form-group">
                  
                 
                  <div class="col-xs-5">
                    <input type="hidden" class="form-control" id="inputEmail3" value="3"
                    name="role_id" readonly="">
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
                    name="added_by_name" value="<?php print_r($name) ;?>" readonly>
                  </div>
                  <div class="col-xs-2">
                   
                    <input type="hidden" class="form-control" id="inputEmail3"  
                    name="added_by_type" value="<?php echo $role_id;?>"   readonly>
                  </div>


                </div>

               
                
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Add Patient</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box 