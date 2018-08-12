<h2 style="text-align: center;"> Doctor Information </h2>
<hr>
<hr>

<div class="profile_picture_area">
  
</div>
<div class="profile_information_area">
  

  <table style="width:50%">
<?php 
  foreach ($view_doctor_information as  $value) {
    # code...
    ?>
  <tr>
    <th>Doctor ID:</th>
    <td ><?php echo $value->doctor_id ?></td>
  </tr>
  <tr>
    <th>First Name:</th>
    <td ><?php echo $value->doctor_first_name ?></td>
  </tr>
  <tr>
    <th>Last Name:</th>
     <td ><?php echo $value->doctor_last_name ?></td>
  </tr>

  <tr>
    <th>Email:</th>
    <td ><?php echo $value->doctor_email ?></td>
  </tr>
  <tr>
    <th>Designation:</th>
     <td ><?php echo $value->doctor_designation ?></td>
  </tr>
  <tr>
    <th>Department:</th>
     <td ><?php echo $value->doctor_department ?></td>
  </tr>
  <tr>
    <th>Address:</th>
    <td ><?php echo $value->doctor_address ?></td>
  </tr>
  <tr>
    <th>Phone:</th>
     <td ><?php echo $value->doctor_phone ?></td>
  </tr>
  <tr>
    <th>Sex:</th>
     <td ><?php echo $value->sex ?></td>
  </tr>
  <tr>
    <th>Blood Group:</th>
    <td ><?php echo $value->doctor_blood ?></td>
  </tr>
  <tr>
    <th>Status:</th>
     <td ><?php echo $value->doctor_status ?></td>
  </tr>

  <?php }
?>
</table>


</div>
