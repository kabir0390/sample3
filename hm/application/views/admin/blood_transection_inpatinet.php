 <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Blood Transection Inpatient </h3>
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

            <form class="form-horizontal" action="<?php echo base_url();?>Admin/save_blood_transection" method="post" 
              enctype="multipart/form-data">
              <div class="box-body">
               <div class="form-group">

                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Patient ID</label>

                  <div class="col-xs-5">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Enter " required name="blood_transection_patient_id">
                  </div>
                </div>
               
               <div class="form-group">
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Blood Type</label>

                  <div class="col-xs-5">
                    <select class="form-control" name="blood_transection_type">
                    <?php 

                     foreach ($blood_transection_inpatinet as $value) {
                       # code...
                      echo '<option value="'.$value->blood_type_name.'">'.$value->blood_type_name.'</option>';
                     }
                     ?>
                    </select>
                  </div>
                </div>
                
               

                 <div class="form-group">
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Quantity </label>

                  <div class="col-xs-5">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Quantity" required 
                    name="blood_transection_quantity">
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
                <button type="submit" class="btn btn-info pull-right">ADD</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box 