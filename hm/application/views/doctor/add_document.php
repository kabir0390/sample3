 <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Add Document</h3>

               <?php  $errors= $this->session->flashdata('errors');
    if($errors) {?>
     <div class="alert alert-danger">
      <?=$errors;?>
    </div>
    <?php }?>
               <?php  $message= $this->session->flashdata('message');
    if($message) {?>
     <div class="alert alert-success">
      <?=$message;?>
    </div>
    <?php }?>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url();?>Doctor/save_document" method="post" 
              enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">

                  <label for="inputEmail3" class="col-sm-4 control-label">Patient ID</label>

                  <div class="col-xs-5">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Patient ID" required name="document_patient_id">
                  </div>
                </div>
                
               <div class="form-group">
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Description </label>

                  <div class="col-xs-5">
                    <textarea class="form-control" rows="3" placeholder="Enter ..." name="document_description"></textarea>
                  </div>
                </div>
                


                <div class="form-group">
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Attach File </label>

                  <div class="col-xs-5">
                    <input type="file" id="exampleInputFile" name="patient_picture">
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
                <button type="submit" class="btn btn-info pull-right">Add Patient</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box 