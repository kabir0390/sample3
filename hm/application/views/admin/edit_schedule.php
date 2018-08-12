
 <!-- Horizontal Form -->
 <?php  $schedule_message= $this->session->flashdata('schedule_message');
    if($schedule_message) {?>
     <div class="alert alert-success">
      <?=$schedule_message;?>
    </div>
    <?php }?>

          <div class="box box-info ">
            <div class="box-header with-border">
              <h3 class="box-title">Schedule</h3>
                <?php  $message= $this->session->flashdata('message');
    if($message) {?>
     <div class="alert alert-success">
      <?=$message;?>
    </div>
    <?php }?>

            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url();?>Admin/update_schedule_info" method="post" 
              enctype="multipart/form-data">
              <div class="box-body">

               <div class="form-group">

                  <label for="inputEmail3" class="col-sm-4 control-label">Doctor Name </label>

                  <div class="col-xs-5">
                    <input type="text" class="form-control" id="inputEmail3"  required name="schedule_doctor" value="<?php echo $update_schedule->schedule_doctor ;?>">
                  </div>
                </div>

                <div class="form-group">
                 
                  <div class="col-xs-5">
                    <input type="hidden" class="form-control" id="inputEmail3"   name="schedule_id" value="
                    <?php echo $update_schedule->schedule_id;?>">
                  </div>
                </div>

               

                 <div class="form-group">
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Available Days</label>

                  <div class="col-xs-5">
                    <select class="form-control" name="schedule_day" required>
                      
                      <option>Sunday</option>
                       <option>Monday</option>
                        <option>Tuesday</option>
                         <option>Wednessday</option>
                          <option>Thusday</option>
                           <option>Friday</option>
                            <option>Saturday</option>
                           
                    </select>
                  </div>
                </div>




                 <div class="form-group">
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Available Time </label>

                  <div class="col-xs-5">
                   <div class="row">
                     <div class="col-md-6">
                     <div class="form-control-wrapper">
                   <div class="input-group clockpicker" data-placement="top" data-align="left" data-donetext="Done">
			<input type="text" class="form-control" value="<?php echo $update_schedule->start_time;?>" name="start_time" >
			<span class="input-group-addon">
				<span class="glyphicon glyphicon-time"></span>
			</span>
		</div>
                   </div>
                 </div>

                 <div class="col-md-6">
                     <div class="form-control-wrapper">
                   <div class="input-group clockpicker" data-placement="top" data-align="left" data-donetext="Done">
			<input type="text" class="form-control" value="<?php echo $update_schedule->end_time;?>" name="end_time">
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
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Per Patient Time</label>

                  <div class="col-xs-5">
                    <select class="form-control" name="schedule_time" required>
                      
                      <option>05 Minute</option>
                       <option>10 Minute</option>
                        <option>15 Minute</option>
                         <option>20 minute</option>
                          <option>25 Minute</option>
                           <option>30 Minute</option>
                            
                           
                    </select>
                  </div>
                </div>
               
                <div class="form-group">
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Serial Visibility</label>

                  <div class="col-xs-5">
                    <select class="form-control" name="schedule_serial" required>
                      
                      <option>Sequential</option>
                       <option>Timestamp</option>
                       
                            
                           
                    </select>
                  </div>
                </div>
               


                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Status</label>

                  <div class="col-xs-5">
                      <div class="radio">
                    <label><input type="radio" name="status" value="Active" required>Active</label>
                    <label><input type="radio" name="status" value="InActive" required>Inactive</label>

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

             
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">ADD</button>
              </div>
             
            </form>
          </div>
          
          
        

