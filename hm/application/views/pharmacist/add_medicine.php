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
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Medicine Name" required name="pharmacist_medicine">
                  </div>
                </div>

                

                    <div class="form-group">
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Medicine Category</label>

                  <div class="col-xs-5">
                    <select class="form-control" name="pharmacist_medicine_category">
                      
                      <?php 

                     foreach ($medicine_category as $value) {
                       # code...
                      echo '<option value="'.$value->medicine_category_name.'">'.$value->medicine_category_name.'</option>';
                     }
                     ?>
                    </select>
                  </div>
                </div>



               <div class="form-group">
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Description</label>

                  <div class="col-xs-5">
                    <textarea class="form-control" rows="3" placeholder="Enter ..." name="pharmacist_medicine_description"></textarea>
                  </div>
                </div>
                
               



                <div class="form-group">

                  <label for="inputEmail3" class="col-sm-4 control-label">Price </label>

                  <div class="col-xs-5">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Medicine Price" required name="pharmacist_medicine_price">
                  </div>
                </div>

                <div class="form-group">

                  <label for="inputEmail3" class="col-sm-4 control-label">Manufactured By </label>

                  <div class="col-xs-5">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Manufacture Company" required name="pharmacist_manufactured_by">
                  </div>
                </div>

                
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Status</label>

                  <div class="col-xs-5">
                      <div class="radio">
                    <label><input type="radio" name="medicine_status" value="Active">Active</label>
                    <label><input type="radio" name="medicine_status" value="Inactive">Inactive</label>

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