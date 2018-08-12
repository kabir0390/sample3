 <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Add Blood Quantity </h3>
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

            <form class="form-horizontal" action="<?php echo base_url();?>Admin/save_blood_quantity" method="post" 
              enctype="multipart/form-data">
              <div class="box-body">
               
               
               <div class="form-group">
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Blood Type</label>

                  <div class="col-xs-5">
                    <select class="form-control" name="blood_quantity_type">
                    <?php 

                     foreach ($add_blood_quantity as $value) {
                       # code...
                      echo '<option value="'.$value->blood_type_name.'">'.$value->blood_type_name.'</option>';
                     }
                     ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">

                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Collected From</label>

                  <div class="col-xs-5">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Enter " required name="blood_quantity_from">
                  </div>
                </div>
               
               <div class="form-group">
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Address </label>

                  <div class="col-xs-5">
                    <textarea class="form-control" rows="3" placeholder="Enter ..." name="blood_quantity_address"></textarea>
                  </div>
                </div>
                

                 <div class="form-group">
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Quantity </label>

                  <div class="col-xs-5">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Quantity" required 
                    name="blood_quantity_quantity">
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