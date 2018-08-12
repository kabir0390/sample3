<h2 style="text-align: center;"> Appointment Information </h2>
<hr>
<hr>

<hr>
<div class="profile_picture_area">
  
</div>
<div class="profile_information_area">
  

  <table style="width:50%">
<?php 
  foreach ($view_appointment_information_assign_to_me as  $value) {
    # code...
    ?>
    <tr>
    <th>Doctor Name:</th>
    <td ><?php echo $value->appointment_doctor?></td>
  </tr>

  
  <tr>
    <th>Appointment ID:</th>
    <td ><?php echo $value->appointment_id ?></td>
  </tr>
  <tr>
    <th>Patient ID:</th>
    <td ><?php echo $value->appointment_pateint_id ?></td>
  </tr>
  <tr>
    <th>Patient Name:</th>
     <td ><?php echo $value->appointment_pateint_name ?></td>
  </tr>

  <tr>
    <th>Date:</th>
    <td ><?php echo $value->appointment_date ?></td>
  </tr>
  <tr>
    <th>Time:</th>
     <td ><?php echo $value->appointment_time ?></td>
  </tr>
  <tr>
    <th>Serial:</th>
     <td ><?php echo $value->appointment_serial ?></td>

  </tr>
  <tr>
    <th>Problem:</th>
    <td ><?php echo $value->appointment_problem ?></td>
  </tr>
  <tr>
    <th>Status:</th>
     <td ><?php echo $value->status ?></td>
  </tr>
  

  <?php }
?>
</table>


</div>
