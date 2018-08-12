<h2 style="text-align: center;"> Employee Information </h2>
<hr>
<hr>

<div class="profile_picture_area">
  
</div>
<div class="profile_information_area">
  

  <table style="width:50%">
<?php 
  foreach ($view_employee_information as  $value) {
    # code...
    ?>
  <tr>
    <th>Employee ID:</th>
    <td ><?php echo $value->employee_id ?></td>
  </tr>
  <tr>
    <th>First Name:</th>
    <td ><?php echo $value->employee_first_name ?></td>
  </tr>
  <tr>
    <th>Last Name:</th>
     <td ><?php echo $value->employee_last_name ?></td>
  </tr>

  <tr>
    <th>Email:</th>
    <td ><?php echo $value->employee_email ?></td>
  </tr>
  <tr>
    <th>Address:</th>
     <td ><?php echo $value->employee_address  ?></td>
  </tr>
  <tr>
    <th>Phone:</th>
     <td ><?php echo $value->employee_phone ?></td>
  </tr>
  <tr>
    <th>Join Date:</th>
    <td ><?php echo $value->employee_join_date ?></td>
  </tr>
  <tr>
    <th>Sex:</th>
     <td ><?php echo $value->employee_sex  ?></td>
  </tr>
  <tr>
    <th>Blood Group:</th>
     <td ><?php echo $value->employee_blood  ?></td>
  </tr>
  <tr>
    <th>Status:</th>
    <td ><?php echo $value->employee_status ?></td>
  </tr>
  

  <?php }
?>
</table>


</div>
