 <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Add Patient Case Study</h3>
               <?php  $message= $this->session->flashdata('message');
    if($message) {?>
     <div class="alert alert-success">
      <?=$message;?>
    </div>
    <?php }?>
    
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url();?>Doctor/add_case_study" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Patient ID </label>

                  <div class="col-xs-5">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Patient ID" required name="prescription_patient_id">
                  </div>
                </div>

               
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Food Allergies</label>

                  <div class="col-xs-5">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Food Allergies" required name="prescription_food_allergies">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Tendency Bleed</label>

                  <div class="col-xs-5">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Tendency Bleed" required name="prescription_tendency_bleed">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Heart Disease</label>

                  <div class="col-xs-5">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Heart Disease" required name="prescription_heart_disease">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">High Blood Pressure </label>

                  <div class="col-xs-5">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Enter High Blood Pressure" required name="prescription_high_blood_pressure">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Diabetic </label>

                  <div class="col-xs-5">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Diabetic" required name="prescription_diabetic">
                  </div>
                </div>

                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Surgery </label>

                  <div class="col-xs-5">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Surgery" required name="prescription_surgery">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Accident </label>

                  <div class="col-xs-5">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Accident" required name="prescription_accident">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Others </label>

                  <div class="col-xs-5">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Others" required name="prescription_Others">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Family Medical History</label>

                  <div class="col-xs-5">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Family Medical History" required name="prescription_family">
                  </div>
                </div>
                

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Female Pregnancy</label>

                  <div class="col-xs-5">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Female Pregnancy" required name="prescription_female_pregnancy">
                  </div>
                </div>

               <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Current Medication</label>

                  <div class="col-xs-5">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Current Medication" required name="prescription_medication">
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Breast Feeding</label>

                  <div class="col-xs-5">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Breast Feeding" required name="prescription_breast_feeding">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">Refference</label>

                  <div class="col-xs-5">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Refference" required name="prescription_refference">
                  </div>
                </div>


                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Status</label>

                  <div class="col-xs-5">
                      <div class="radio">
                        
                        <label><input type="radio" name="status" value="1">Active</label>
                        <label><input type="radio" name="status" value="0">Inactive</label>

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