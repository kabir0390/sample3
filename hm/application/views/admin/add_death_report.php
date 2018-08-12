 <?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
 <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Add Death Report</h3>
               <?php  $message= $this->session->flashdata('message');
    if($message) {?>
     <div class="alert alert-success">
      <?=$message;?>
    </div>
    <?php }?>
    
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url();?>Admin/save_death_report" method="post">
              <div class="box-body">

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Patient ID </label>

                  <div class="col-xs-5">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Patient ID" required name="death_paient_id">
                  </div>
                </div>


                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Title</label>

                  <div class="col-xs-5">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Title" required name="death_title">
                  </div>
                </div>


               <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Date</label>

                  <div class="col-xs-5">
                     <input type="date"   min="2000-01-02" class="signup_input"  name="death_date">
                  </div>
                </div>


                 <div class="form-group">
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Time </label>

                  <div class="col-xs-5">
                   <div class="row">
                     <div class="col-md-6">
                     <div class="form-control-wrapper">
                   <div class="input-group clockpicker" data-placement="top" data-align="left" data-donetext="Done">
      <input type="text" class="form-control" value="18:00" name="death_time">
      <span class="input-group-addon">
        <span class="glyphicon glyphicon-time"></span>
      </span>
    </div>
                   </div>
                 </div>

                
        
                      </div> 
                  </div>
                </div>

 

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Description</label>

                  <div class="col-xs-5">
                     <textarea class="form-control" rows="3" placeholder="Enter Description..." required 
                     name="death_description"></textarea>
                  </div>
                
</div>
                 <div class="form-group">
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Doctor</label>

                  <div class="col-xs-5">
                    <select class="form-control" name="death_report_doctor">
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
                  <label for="inputPassword3" class="col-sm-4 control-label">Status</label>

                  <div class="col-xs-5">
                       <div class="radio">
                  <label><input type="radio" name="death_report_status" value="Active">Active</label>
              <label><input type="radio" name="death_report_status" value="Inactive">Inactive</label>
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
          <!-- /.box -->