<div class="container">
  <?php  $message= $this->session->flashdata('message');
    if($message) {?>
     <div class="alert alert-success">
      <?=$message;?>
    </div>
    <?php }?>

   <table class="table table-striped">
    <thead>
      <tr>
        <th>Schedule ID</th>
        <th>Doctor</th>
        <th>Day </th>
         <th>Start</th>
        <th>End</th>
        <th>Per Patient Time</th>
        <th>Serial Visibility</th>
       
        <th>Status</th>
        
           
      </tr>
    </thead>
    <tbody>
      

<?php 
  foreach ($all_schedule as  $value) {
    # code...
    ?>

    <tr>
      
      <td class="center"><?php echo $value->schedule_id ?></td>
      <td class="center"><?php echo $value->schedule_doctor ?></td>
      <td class="center"><?php echo $value->schedule_day ?></td>
      <td class="center"><?php echo $value->start_time ?></td>
      <td class="center"><?php echo $value->end_time ?></td>
      <td class="center"><?php echo $value->schedule_time ?></td>
      <td class="center"><?php echo $value->schedule_serial ?></td>
      <td class="center"><?php echo $value->status ?></td>
     
    

     
      

    </tr>
  <?php }
?>

    </tbody>
  </table>
</div>