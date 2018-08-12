     <form class="form-horizontal" action="<?php echo base_url();?>Admin/edit_blood_types" method="post" 
              enctype="multipart/form-data">
  <div class="box-body">
 

                <div class="form-group">

                

                  <div class="col-xs-5">
                    <input type="hidden" class="form-control" id="inputEmail3" placeholder="Enter Blood Cost" required name="blood_type_id" value="<?php echo $edit_blood_type->blood_type_id;?>">
                  </div>
                </div>
               

                <div class="form-group">

                  <label for="inputEmail3" class="col-sm-4 control-label">Cost</label>

                  <div class="col-xs-5">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Blood Cost" required name="blood_cost" value="<?php echo $edit_blood_type->blood_cost ;?>">
                  </div>
                </div>

                <input type="submit" name="" value="Add" style="height: 30px;width: 20%;margin-left: 500px;">
      </div> 
      </form>         