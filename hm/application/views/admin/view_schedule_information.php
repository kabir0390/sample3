<h2 style="text-align: center;"> Schedule Information </h2>
<hr>
<hr>

<div class="profile_picture_area">
  
</div>
<div class="profile_information_area">
  

  <table style="width:50%">
<?php 
  foreach ($view_schedule_information as  $value) {
    # code...
    ?>
  <tr>
    <th>Schedule ID:</th>
    <td ><?php echo $value->schedule_id?></td>
  </tr>
  <tr>
    <th>Doctor Name:</th>
    <td ><?php echo $value->schedule_doctor ?></td>
  </tr>
  <tr>
    <th>Day:</th>
     <td ><?php echo $value->schedule_day ?></td>
  </tr>

  <tr>
    <th>Start Time:</th>
    <td ><?php echo $value->start_time  ?></td>
  </tr>
 
  <tr>
    <th>End Time:</th>
    <td ><?php echo $value->end_time  ?></td>
  </tr>
  <tr>
    <th>Per Patient Time:</th>
     <td ><?php echo $value->schedule_time ?></td>
  </tr>
  <tr>
    <th>Serial:</th>
     <td ><?php echo $value->schedule_serial ?></td>
  </tr>
  <tr>
    <th>Status:</th>
    <td ><?php echo $value->status  ?></td>
  </tr>
  <tr>
    <th>Added By:</th>
     <td ><?php echo $value->added_by_name ?></td>
  </tr>

  <?php }
?>
</table>


</div>
