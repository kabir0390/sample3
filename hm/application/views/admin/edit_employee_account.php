 <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Update Employee</h3>
               <?php  $message= $this->session->flashdata('message');
    if($message) {?>
     <div class="alert alert-success">
      <?=$message;?>
    </div>
    <?php }?>


            </div>
            <!-- /.box-header -->
            <!-- form start -->

            <form class="form-horizontal" action="<?php echo base_url();?>Admin/update_employee_accountant_data" method="post" 
              enctype="multipart/form-data">
              <div class="box-body">

                <div class="form-group">

                 
                  <div class="col-xs-5">
                    <input type="hidden" class="form-control" id="inputEmail3"  required name="doctor_first_name" value="<?php echo $update_employee_accountant->employee_id ;?>">
                  </div>
                </div>
                
                <div class="form-group">

                  <label for="inputEmail3" class="col-sm-4 control-label">First Name </label>

                  <div class="col-xs-5">
                    <input type="text" class="form-control" id="inputEmail3"  required name="employee_first_name" value="<?php echo $update_employee_accountant->employee_first_name ;?>">
                  </div>
                </div>

                <div class="form-group">
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Last Name </label>

                  <div class="col-xs-5">
                    <input type="text" class="form-control" id="inputEmail3"  required name="employee_last_name" value="<?php echo $update_employee_accountant->employee_last_name ;?>">
                  </div>
                </div>

                <div class="form-group">
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Email Address </label>

                  <div class="col-xs-5">
                    <input type="email" class="form-control" id="inputEmail3"  required name="employee_email" value="<?php echo $update_employee_accountant->employee_email ;?>">
                  </div>
                </div>

               
               
               <div class="form-group">
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Address </label>

                  <div class="col-xs-5">
                    <textarea class="form-control" rows="3" placeholder="Enter ..." name="employee_address"><?php echo $update_employee_accountant->employee_address ;?></textarea>
                  </div>
                </div>
                <div class="form-group">

                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Phone </label>

                  <div class="col-xs-5">
                    <input type="text" class="form-control" id="inputEmail3"  required name="employee_phone" value="<?php echo $update_employee_accountant->employee_phone ;?>">
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



                
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right" >Update</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box 