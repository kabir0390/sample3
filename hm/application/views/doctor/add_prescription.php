<div>

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
  <textarea id="header">Prescription</textarea>
  <textarea id="address">DemoHospital
House # 63, Road # 13, Sector # 10,
 Uttara, Dhaka-1230, Bangladesh

Phone: (555) 555-5555</textarea>


            <div id="logo">

              <div id="logoctr">
                <a href="<?php echo base_url();?>assets/pres/javascript:;" id="change-logo" title="Change logo">Change Logo</a>
                <a href="javascript:;" id="save-logo" title="Save changes">Save</a>
                |
                <a href="<?php echo base_url();?>assets/pres/javascript:;" id="delete-logo" title="Delete logo">Delete Logo</a>
                <a href="<?php echo base_url();?>assets/pres/javascript:;" id="cancel-logo" title="Cancel changes">Cancel</a>
              </div>

              <div id="logohelp">
                <input id="imageloc" type="text" size="50" value="" /><br />
                (max width: 540px, max height: 100px)
              </div>
              <img id="image" src="<?php echo base_url();?>assets/pres/images/logo2.png" alt="logo" />
            </div>
    
    </div>
    
    <div style="clear:both"></div>
    
    <div id="customer">
<form class="form-horizontal" action="<?php echo base_url();?>Doctor/add_new_prescription" method="post" 
              enctype="multipart/form-data">
      <div>
        
        <div>
           <table id="meta">
                <tr>
                    <td class="meta-head">Prescription ID #</td>
                    <td>

                      <input type="" name="prescription_id" value="<?php 

                       $rand=rand();
                       echo $rand;
                        
                        ?>"
                         

                     >
                      </td>
                </tr>
                <tr>

                    <td class="meta-head">Date</td>
                    <td><textarea id="date" name="prescription_date"><?php echo date("m/d/y");?></textarea></td>
                </tr>
                

            </table>
    
    </div>


        </div>
        <div >
                <label>Patient ID :</label>
                <input style="height: 36px;width: 40%;margin-left: 25px;" type="text" name="prescription_patient_id" placeholder="Enter Patient ID" name="pres_patient_id"><br />
                 <label>Patient Name :</label>
                <input style="height: 36px;width: 40%;" type="text"  placeholder="Enter Patient Name" name="prescription_patient_name"><br />
                 <label> Address :</label>
                <input style="height: 36px;width: 40%;margin-left: 33px;" type="text" placeholder="Enter Patient Address" name="prescription_patient_address">



        </div>






      </div>
      <textarea style="background-color: #95a5a6;" id="header">Medicine </textarea>

      <div>
        <label>Medicine Name:</label>
        <input style="height: 35px; width: 20%;" type="text" name="prescription_medicine1" placeholder="Medicine Name ">

         <label>Type :</label>
        <input style="height: 35px; width: 20%;" type="text" name="prescription_medicine_type1" placeholder="Medicine Type">

          <label>Instruction :</label>
        <input style="height: 35px; width: 20%;" type="text" name="prescription_instruction1" placeholder="Instruction">
         <label>Days:</label>
        <input style="height: 35px; width: 10%;" type="text" name="prescription_days1" placeholder="Days">


      </div>
      <br />
       <div>
        <label>Medicine Name:</label>
        <input style="height: 35px; width: 20%;" type="text" name="prescription_medicine2" placeholder="Medicine Name ">

         <label>Type :</label>
        <input style="height: 35px; width: 20%;" type="text" name="prescription_medicine_type2" placeholder="Medicine Type">

          <label>Instruction :</label>
        <input style="height: 35px; width: 20%;" type="text" name="prescription_instruction2" placeholder="Instruction">
         <label>Days:</label>
        <input style="height: 35px; width: 10%;" type="text" name="prescription_days2" placeholder="Days">


      </div>
        <br />
       <div>
        <label>Medicine Name:</label>
        <input style="height: 35px; width: 20%;" type="text" name="prescription_medicine3" placeholder="Medicine Name ">

         <label>Type :</label>
        <input style="height: 35px; width: 20%;" type="text" name="prescription_medicine_type3" placeholder="Medicine Type">

          <label>Instruction :</label>
        <input style="height: 35px; width: 20%;" type="text" name="prescription_instruction3" placeholder="Instruction">
         <label>Days:</label>
        <input style="height: 35px; width: 10%;" type="text" name="prescription_days3" placeholder="Days">


      </div>
        <br />
       <div>
        <label>Medicine Name:</label>
        <input style="height: 35px; width: 20%;" type="text" name="prescription_medicine4" placeholder="Medicine Name ">

         <label>Type :</label>
        <input style="height: 35px; width: 20%;" type="text" name="prescription_medicine_type4" placeholder="Medicine Type">

          <label>Instruction :</label>
        <input style="height: 35px; width: 20%;" type="text" name="prescription_instruction4" placeholder="Instruction">
         <label>Days:</label>
        <input style="height: 35px; width: 10%;" type="text" name="prescription_days4" placeholder="Days">


      </div>
      <br />
      
      <br />
      <hr>
      <div>
       
        <div class="form-group">
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Visiting Fees:</label>

                  <div class="col-xs-5">
                    <input type="text"  class="form-control"  placeholder="Enter fees" name="prescription_fees">
                  </div>
                </div>
                <div class="form-group">

          <br />
          <hr>
       
        <div class="form-group">
                  
                  <label for="inputEmail3" class="col-sm-4 control-label">Patient Note </label>

                  <div class="col-xs-5">
                    <textarea class="form-control" rows="3" placeholder="Enter ..." name="prescription_patient_notes"></textarea>
                  </div>
                </div>
                <div class="form-group">

          

      </div>




      <div>
        
        <input style="height: 50px;width: 100px;margin-left: 50px;" type="submit" name="" value="ADD">
      </div>






  <textarea id="header"></textarea>
  </form>
</div>