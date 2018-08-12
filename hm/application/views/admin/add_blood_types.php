     <form class="form-horizontal" action="<?php echo base_url();?>Admin/save_blood_type" method="post" 
              enctype="multipart/form-data">
  <div class="box-body">
  <div class="form-group">
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Blood Group</label>

                  <div class="col-xs-5">
                    <select class="form-control" name="blood_type_name">
                      
                      <option>A+</option>
                       <option>B+</option>
                        <option>AB+</option>
                         <option>AB-</option>
                          <option>o+</option>
                           <option>o-</option>
                            <option>A-</option>
                             <option>B-</option>
                    </select>
                  </div>
                </div>

               

                <div class="form-group">

                  <label for="inputEmail3" class="col-sm-4 control-label">Cost</label>

                  <div class="col-xs-5">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Blood Cost" required name="blood_cost">
                  </div>
                </div>

                <input type="submit" name="" value="Add" style="height: 30px;width: 20%;margin-left: 500px;">
      </div> 
      </form>         