     <form class="form-horizontal" action="<?php echo base_url();?>Admin/add_employee_types" method="post" 
              enctype="multipart/form-data">
               <?php  $message= $this->session->flashdata('message');
    if($message) {?>
     <div class="alert alert-success">
      <?=$message;?>
    </div>
    <?php }?>

              <h2>Employee Category: </h2>
  <div class="box-body">
  <div class="form-group">
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Employee Type</label>

                  <div class="col-xs-5">
                    <select class="form-control" name="employee_position">
                      
                      <option>Admin</option>
                       <option>Doctor</option>
                       
                         <option>Accountant</option>
                          <option>Pharmacist</option>
                           <option>Receptionist</option>
                            <option>Lab Operator</option>
                             
                    </select>
                  </div>
                </div>

               

                <div class="form-group">

                  <label for="inputEmail3" class="col-sm-4 control-label">Salary</label>

                  <div class="col-xs-5">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Salary" required name="employee_salary">
                  </div>
                </div>

                <input type="submit" name="" value="Add" style="height: 30px;width: 20%;margin-left: 500px;">
      </div> 
      </form>         