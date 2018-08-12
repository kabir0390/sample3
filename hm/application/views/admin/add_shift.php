
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
            <form class="form-horizontal" action="<?php echo base_url();?>Admin/add_shift_info" method="post" 
              enctype="multipart/form-data">
              <div class="box-body">

               

                 <div class="form-group">
                  
                  <label for="inputEmail3" class="col-sm-4 control-label"> Days</label>

                  <div class="col-xs-5">
                    <select class="form-control" name="shift_day" required>
                      
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
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Start Time </label>

                  <div class="col-xs-5">
                   <div class="row">
                     <div class="col-md-6">
                     <div class="form-control-wrapper">
                   <div class="input-group clockpicker" data-placement="top" data-align="left" data-donetext="Done">
      <input type="text" class="form-control" value="18:00" name="start_time">
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
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">End Time </label>

                  <div class="col-xs-5">
                   <div class="row">
                     <div class="col-md-6">
                     <div class="form-control-wrapper">
                   <div class="input-group clockpicker" data-placement="top" data-align="left" data-donetext="Done">
      <input type="text" class="form-control" value="18:00" name="end_time">
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
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Shift</label>

                  <div class="col-xs-5">
                    <select class="form-control" name="shift_type" required>
                      
                      <option>Day</option>
                       <option>Night</option>
                       
                            
                           
                    </select>
                  </div>
                </div>
               


             
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">ADD</button>
              </div>
             
            </form>
          </div>
          
          
        

