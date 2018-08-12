 <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"> Add Account</h3>
               <?php  $message= $this->session->flashdata('message');
    if($message) {?>
     <div class="alert alert-success">
      <?=$message;?>
    </div>
    <?php }?>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url();?>Accountant/add_account_name" method="post" 
              enctype="multipart/form-data">
              <div class="box-body">
               <div class="form-group">

                  <label for="inputEmail3" class="col-sm-4 control-label">Account Name</label>

                  <div class="col-xs-5">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Account Name" required name="account_name">
                  </div>
                </div>


                    <div class="form-group">
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Account Type</label>

                  <div class="col-xs-5">
                    <select class="form-control" name="account_type">
                      <option>Credit</option>
                      <option>Debit</option>
                    </select>
                  </div>
                </div>




              
               <div class="form-group">
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Description</label>

                  <div class="col-xs-5">
                    <textarea class="form-control" rows="3" placeholder="Enter ..." name="account_description"></textarea>
                  </div>
                </div>
                
               


                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Status</label>

                  <div class="col-xs-5">
                      <div class="radio">
                    <label><input type="radio" name="account_status" value="Active">Active</label>
                    <label><input type="radio" name="account_status" value="Inactive">Inactive</label>

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