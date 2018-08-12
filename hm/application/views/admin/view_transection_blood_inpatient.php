<h2 style="text-align: center;"> Patient Information </h2>
<hr>
<hr>

<div class="profile_picture_area">
  
</div>
<div class="profile_information_area">
  

  <table style="width:50%">
<?php 
  foreach ($view_transection_blood_inpatient as  $value) {
    # code...
    ?>
  <tr>
    <th>Patient ID:</th>
    <td ><?php echo $value->blood_transection_id ?></td>
  </tr>
  <tr>
    <th>First Name:</th>
    <td ><?php echo $value->blood_transection_patient_name ?></td>
  </tr>
  <tr>
    <th>Last Name:</th>
     <td ><?php echo $value->blood_transection_type ?></td>
  </tr>

  <tr>
    <th>Email:</th>
    <td ><?php echo $value->blood_transection_quantity ?></td>
  </tr>
 
  <tr>
    <th>Address:</th>
    <td ><?php echo $value->blood_transection_date ?></td>
  </tr>

  <?php }
?>
</table>


</div>
