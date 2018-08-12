<h2 style="text-align: center;"> Birth Information </h2>
<hr>
<hr>

<div class="profile_picture_area">
  
</div>
<div class="profile_information_area">
  

  <table style="width:50%">
<?php 
  foreach ($view_birth_report as  $value) {
    # code...
    ?>
  <tr>
    <th>Birth Report ID:</th>
    <td ><?php echo $value->birth_report_id ?></td>
  </tr>
  <tr>
    <th>Patient ID:</th>
    <td ><?php echo $value->birth_paient_id ?></td>
  </tr>
  <tr>
    <th>Title:</th>
     <td ><?php echo $value->birth_title ?></td>
  </tr>

  <tr>
    <th>Date of Birth:</th>
    <td ><?php echo $value->birth_date ?></td>
  </tr>
  <tr>
    <th>Date of Time:</th>
     <td ><?php echo $value->birth_time  ?></td>
  </tr>
  <tr>
    <th>Description:</th>
     <td ><?php echo $value->birth_description ?></td>
  </tr>
  <tr>
    <th>Doctor Name:</th>
    <td ><?php echo $value->birth_report_doctor ?></td>
  </tr>
 

  <?php }
?>
</table>


</div>
