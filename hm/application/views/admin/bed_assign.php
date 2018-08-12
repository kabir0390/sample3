 <?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
 <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Bed Assign</h3>
               <?php  $message= $this->session->flashdata('message');
    if($message) {?>
     <div class="alert alert-success">
      <?=$message;?>
    </div>
    <?php }?>
    
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url();?>Admin/save_bed_assign" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Patient ID </label>

                  <div class="col-xs-5">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Patient ID" required name="patient_id">
                  </div>
                </div>



               <div class="form-group">
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Bed Type</label>

                  <div class="col-xs-5">
                    <select class="form-control" name="bed_type">
                    <?php 

                     foreach ($all_bed_type as $value) {
                       # code...
                      echo '<option value="'.$value->bed_type.'">'.$value->bed_type.'</option>';
                     }
                     ?>
                    </select>
                  </div>
                </div>
                  

               <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Assign Date</label>

                  <div class="col-xs-5">
                     <input type="date"   min="2000-01-02" class="signup_input" required name="assign_date">
                  </div>
                </div>



               <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Discharge Date</label>

                  <div class="col-xs-5">
                     <input type="date"   min="2000-01-02" class="signup_input" required name="discharge_date">
                  </div>
                </div>


                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Description</label>

                  <div class="col-xs-5">
                     <textarea class="form-control" rows="3" placeholder="Enter Description..." required 
                     name="bed_assign_description"></textarea>
                  </div>
                </div>


 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Status</label>

                  <div class="col-xs-5">
                       <div class="radio">
                  <label><input type="radio" name="bed_assign_status" value="Active">Active</label>
              <label><input type="radio" name="bed_assign_status" value="Inactive">Inactive</label>
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
                <button type="submit" class="btn btn-info pull-right">ADD</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->