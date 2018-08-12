<h2 style="text-align: center;"> Patient Information </h2>
<hr>
<hr>

<div class="profile_picture_area">
  
</div>
<div class="profile_information_area">
  

  <table style="width:50%">
<?php 
  foreach ($view_patient_information as  $value) {
    # code...
    ?>
  <tr>
    <th>Patient ID:</th>
    <td ><?php echo $value->patient_id ?></td>
  </tr>
  <tr>
    <th>First Name:</th>
    <td ><?php echo $value->patient_first_name ?></td>
  </tr>
  <tr>
    <th>Last Name:</th>
     <td ><?php echo $value->patient_last_name ?></td>
  </tr>

  <tr>
    <th>Email:</th>
    <td ><?php echo $value->patient_email ?></td>
  </tr>
 
  <tr>
    <th>Address:</th>
    <td ><?php echo $value->patient_address ?></td>
  </tr>
  <tr>
    <th>Phone:</th>
     <td ><?php echo $value->patient_phone ?></td>
  </tr>
  <tr>
    <th>Sex:</th>
     <td ><?php echo $value->patient_sex ?></td>
  </tr>
  <tr>
    <th>Blood Group:</th>
    <td ><?php echo $value->patient_blood ?></td>
  </tr>
  <tr>
    <th>Status:</th>
     <td ><?php echo $value->patient_status ?></td>
  </tr>

  <?php }
?>
</table>


</div>
