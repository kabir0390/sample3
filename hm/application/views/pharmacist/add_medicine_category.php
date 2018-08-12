 <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"> Add Medicine Category</h3>
               <?php  $message= $this->session->flashdata('message');
    if($message) {?>
     <div class="alert alert-success">
      <?=$message;?>
    </div>
    <?php }?>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url();?>Pharmacist/add_medicine_category_information" method="post" 
              enctype="multipart/form-data">
              <div class="box-body">
               <div class="form-group">

                  <label for="inputEmail3" class="col-sm-4 control-label">Category Name</label>

                  <div class="col-xs-5">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Patient ID" required name="medicine_category_name">
                  </div>
                </div>

               
               <div class="form-group">
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Description</label>

                  <div class="col-xs-5">
                    <textarea class="form-control" rows="3" placeholder="Enter ..." name="medicine_category_description"></textarea>
                  </div>
                </div>
                
               


                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Status</label>

                  <div class="col-xs-5">
                      <div class="radio">
                    <label><input type="radio" name="medicine_status" >Active</label>
                    <label><input type="radio" name="medicine_status" >Inactive</label>

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
          <!-- /.box 