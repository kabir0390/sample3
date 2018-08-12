 <?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
 <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Update Notice</h3>
               <?php  $message= $this->session->flashdata('message');
    if($message) {?>
     <div class="alert alert-success">
      <?=$message;?>
    </div>
    <?php }?>
    
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url();?>Admin/update_notice_info" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Title</label>

                  <div class="col-xs-5">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Department Name" required name="notice_board_title" value="<?php echo  
                    $update_notice->notice_board_title ;?>">
                  </div>
                </div>

                 <div class="form-group">
                 

                  <div class="col-xs-5">
                    <input type="hidden" class="form-control" id="inputEmail3" placeholder="Enter Department Name" required name="notice_id" value="<?php echo  
                    $update_notice->notice_id ;?>">
                  </div>
                </div>
                

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Description</label>

                  <div class="col-xs-5">
                     <textarea class="form-control" rows="3"  required 
                     name="notice_board_description" ><?php echo  
                    $update_notice->notice_board_description ;?></textarea>
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