<h2 style="text-align: center;"> Doctor Information </h2>
<hr>
<hr>

<div class="profile_picture_area">
  
</div>
<div class="profile_information_area">
  

  <table style="width:50%">
<?php 
  foreach ($department_info as  $value) {
    # code...
    ?>
  <tr>
    <th>Doctor ID:</th>
    <td ><?php echo $value->department_id ?></td>
  </tr>
  <tr>
    <th>Department Name:</th>
    <td ><?php echo $value->department_name ?></td>
  </tr>
  <tr>
    <th>Description:</th>
     <td ><?php echo $value->department_description ?></td>
  </tr>

  <tr>
    <th>Status:</th>
    <td ><?php echo $value->department_status ?></td>
  </tr>
  <tr>
    <th>Open Date:</th>
     <td ><?php echo $value->date_of_open ?></td>
  </tr>
  

  <?php }
?>
</table>


</div>
