 <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Add Medicine</h3>
               <?php  $message= $this->session->flashdata('message');
    if($message) {?>
     <div class="alert alert-success">
      <?=$message;?>
    </div>
    <?php }?>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url();?>Pharmacist/add_new_medicine" method="post" 
              enctype="multipart/form-data">
              <div class="box-body">

               <div class="form-group">

                  <label for="inputEmail3" class="col-sm-4 control-label">Medicine Name </label>

                  <div class="col-xs-5">
                    <input type="" name="" value="<?php echo $update_medicine->pharmacist_medicine ?>">
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
          <!-- /.box 