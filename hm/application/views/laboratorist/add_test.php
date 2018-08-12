 <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"> Add Test</h3>
               <?php  $message= $this->session->flashdata('message');
    if($message) {?>
     <div class="alert alert-success">
      <?=$message;?>
    </div>
    <?php }?>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url();?>Laboratorist/add_test_info" method="post" 
              enctype="multipart/form-data">
              <div class="box-body">
               <div class="form-group">

                  <label for="inputEmail3" class="col-sm-4 control-label">Test Name</label>

                  <div class="col-xs-5">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Patient ID" required name="appointment_pateint_id">
                  </div>
                </div>
  <div class="form-group">
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Unit</label>

                  <div class="col-xs-5">
                    <select class="form-control" name="appointment_serial">
                      
                      <option>mg/l</option>
                       <option>gm/dl</option>
                        <option>mm</option>
                         <option>pg</option>
                          <option>%</option>
                           
                           
                    </select>
                  </div>
                </div>
                <div class="form-group">

                  <label for="inputEmail3" class="col-sm-4 control-label">Minimum Range</label>

                  <div class="col-xs-5">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Enter First Name" required name="appointment_pateint_name">
                  </div>
                </div>

                <div class="form-group">

                  <label for="inputEmail3" class="col-sm-4 control-label">Maximum Range</label>

                  <div class="col-xs-5">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Enter First Name" required name="appointment_pateint_name">
                  </div>
                </div>

                  <div class="form-group">

                  <label for="inputEmail3" class="col-sm-4 control-label">Cost</label>

                  <div class="col-xs-5">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Enter First Name" required name="appointment_pateint_name">
                  </div>
                </div>


                  





               <div class="form-group">
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Problems</label>

                  <div class="col-xs-5">
                    <textarea class="form-control" rows="3" placeholder="Enter ..." name="appointment_problem"></textarea>
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