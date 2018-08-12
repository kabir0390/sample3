 <?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
 <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Add Department</h3>
               <?php  $message= $this->session->flashdata('message');
    if($message) {?>
     <div class="alert alert-success">
      <?=$message;?>
    </div>
    <?php }?>
    
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url();?>Admin/update_department_info" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Department Name </label>

                  <div class="col-xs-5">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Department Name" required name="department_name" value="<?php echo  
                    $update_department->department_name ;?>">
                  </div>
                </div>

                <div class="form-group">
                  

                  <div class="col-xs-5">
                    <input type="hidden" class="form-control" id="inputEmail3" placeholder="Enter Department Name" required name="department_id" value="<?php echo  
                    $update_department->department_id ;?>">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Description</label>

                  <div class="col-xs-5">
                     <textarea class="form-control" rows="3"  required 
                     name="department_description" ><?php echo  
                    $update_department->department_description ;?></textarea>
                  </div>
                </div>


 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Status</label>

                  <div class="col-xs-5">
                       <div class="radio">
                  <label><input type="radio" name="department_status" value="Active">Active</label>
              <label><input type="radio" name="department_status" value="Inactive">Inactive</label>
                    </div>
                  </div>
                </div>
              

               

               <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Date</label>

                  <div class="col-xs-5">
                     <input type="date"   min="2000-01-02" class="signup_input" required name="date_of_open" value="<?php echo  $update_department->date_of_open ; ?>">
                  </div>
                </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right" >Update</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->