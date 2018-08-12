<h2 style="text-align: center;">Bed Assign Information </h2>
<hr>
<hr>

<div class="profile_picture_area">
  
</div>
<div class="profile_information_area">
  

  <table style="width:50%">
<?php 
  foreach ($view_bed_assign_information as  $value) {
    # code...
    ?>
  <tr>
    <th>Bed Assign ID:</th>
    <td ><?php echo $value->bed_assign_id ?></td>
  </tr>
  <tr>
    <th>Patient ID:</th>
    <td ><?php echo $value->patient_id  ?></td>
  </tr>
  <tr>
    <th>Bed Type:</th>
     <td ><?php echo $value->bed_type  ?></td>
  </tr>

  <tr>
    <th>Assign Date:</th>
    <td ><?php echo $value->assign_date ?></td>
  </tr>
  <tr>
    <th>Discharge Date:</th>
     <td ><?php echo $value->discharge_date  ?></td>
  </tr>
  <tr>
    <th>Description:</th>
     <td ><?php echo $value->bed_assign_description ?></td>
  </tr>
  <tr>
    <th>Status:</th>
    <td ><?php echo $value->bed_assign_status ?></td>
  </tr>
  <tr>
    <th>Assigned By:</th>
     <td ><?php echo $value->added_by_name  ?></td>
  </tr>
  
  

  <?php }
?>
</table>


</div>
