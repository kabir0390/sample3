 <?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
 <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Add Bed Information</h3>
               <?php  $message= $this->session->flashdata('message');
    if($message) {?>
     <div class="alert alert-success">
      <?=$message;?>
    </div>
    <?php }?>
    
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url();?>Admin/save_bed_info" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Bed Type </label>

                  <div class="col-xs-5">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Bed Type" required name="bed_type">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Description</label>

                  <div class="col-xs-5">
                     <textarea class="form-control" rows="3" placeholder="Enter Description..." required 
                     name="bed_description"></textarea>
                  </div>
                </div>
 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Bed Capacity </label>

                  <div class="col-xs-5">
                    <input type="number" class="form-control" id="inputEmail3" placeholder="Enter Bed Capacity" required name="bed_capacity">
                  </div>
                </div>

                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Charge </label>

                  <div class="col-xs-5">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Bed Charge" required name="bed_charge">
                  </div>
                </div>

 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Status</label>

                  <div class="col-xs-5">
                       <div class="radio">
                  <label><input type="radio" name="bed_status" value="Active">Active</label>
              <label><input type="radio" name="bed_status" value="Inactive">Inactive</label>
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