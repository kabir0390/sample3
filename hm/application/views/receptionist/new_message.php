 <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Message</h3>
               <?php  $message= $this->session->flashdata('message');
    if($message) {?>
     <div class="alert alert-success">
      <?=$message;?>
    </div>
    <?php }?>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?php echo base_url();?>Receptionist/new_message_send" method="post" 
              enctype="multipart/form-data">
              <div class="box-body">
               

                    <div class="form-group">
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Send To</label>

                  <div class="col-xs-5">
                    <select class="form-control" name="message_send_to">
                      
                      <?php 

                     foreach ($message_send_to as $value) {
                       # code...
                      echo '<option value="'.$value->email.'">'.$value->name.'</option>';
                     }
                     ?>
                    </select>
                  </div>
                </div>


                 <div class="form-group">

                  <label for="inputEmail3" class="col-sm-4 control-label">Subject</label>

                  <div class="col-xs-5">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Enter Message Subject" required name="message_subject">
                  </div>
                </div>


               <div class="form-group">
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Message</label>

                  <div class="col-xs-5">
                    <textarea class="form-control" rows="3" placeholder="Enter ..." name="message_description"></textarea>
                  </div>
                </div>
                
               

                 <div class="form-group">
                  
                 

                  <div class="col-xs-3">
                    <?php $name=$this->session->userdata('name');
                    $email=$this->session->userdata('email');
                   
                   // print_r($user_name);
                   // echo('<br />');
                   // print_r($login_type);
                  ?>
                    <input type="hidden" class="form-control" id="inputEmail3" 
                    name="added_by_name" value="<?php print_r($name) ;?>">
                  </div>
                  <div class="col-xs-2">
                   
                    <input type="hidden" class="form-control" id="inputEmail3"  
                    name="added_by_email" value="<?php echo $email;?>"  >
                  </div>


                </div>



              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">SEND</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box 