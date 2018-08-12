<div>
  <div id="printableArea">
  
<textarea id="header">Prescription</textarea>
<div id="identity">
     <form class="form-horizontal" action="<?php echo base_url();?>Doctor/add_new_prescription" method="post" 
              enctype="multipart/form-data">
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
              <img id="image" src="<?php echo base_url();?>assets/pres/images/hos.png" alt="logo" />
            </div>
    
    </div>
    
    <div style="clear:both"></div>
    <hr><hr>
     <textarea style="background-color: #95a5a6;" id="header">Prescription Destails</textarea>
   

  <table style="width:70%;margin-left: 150px;">
<?php 
  foreach ($view_prescription_patient_info as  $value) {
    # code...
    ?>
  <tr>
    <th>Prescription No:</th>
    <td ><?php echo $value->pres_id ?></td>
  </tr>
  <tr>
    <th>Prescription ID:</th>
    <td ><?php echo $value->prescription_id ?></td>
  </tr>
   <tr>
    <th>Patient ID:</th>
    <td ><?php echo $value->prescription_patient_id ?></td>
  </tr>
   <tr>
    <th>Patient Name:</th>
    <td ><?php echo $value->prescription_patient_name?></td>
  </tr>
   <tr>
    <th>Address:</th>
    <td ><?php echo $value->prescription_patient_address?></td>
  </tr>
   <tr>
    <th>Medicines and Instructions:</th>
    <td ><?php echo $value->prescription_medicine?></td>
  </tr>
  <tr>
    <th>Visiting Fees:</th>
    <td ><?php echo $value->prescription_fees?></td>
  </tr>
  <tr>
    <th>Patient's Note:</th>
    <td ><?php echo $value->prescription_patient_notes?></td>
  </tr>


  
  <?php }
?>
</table>

<hr>





















  <textarea id="header"></textarea>

</form>
</div>
<input id="mybtn" type="button" onclick="printDiv('printableArea')" value="Print " style="margin-left: 430px; height: 40px;width: 30%;background-color: #FFFFFF" />
<script>
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}</script>

</div>