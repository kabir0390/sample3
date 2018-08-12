
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
        <th>Day</th>
         <th> Start Time</th>
        <th> End Time</th>
        <th>Time per Patient</th>
       
        <th>Status</th>
        <th> View</th>
        <th>Update</th>
        <th>Delete</th>
           
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
      <td class="center"><?php echo $value->status ?></td>
       

         <td class="center"><a class="btn btn-primary" href="<?php echo base_url();?>Admin/view_schedule_information/<?php echo $value->schedule_id ;?>"><i class="halflings-icon white edit">View</i></a></td>

      <td class="center"><a class="btn btn-info" href="<?php echo base_url();?>Admin/update_schedule/<?php echo $value->schedule_id ;?>"><i class="halflings-icon white edit">Edit</i></a></td>
     
      <td class="center"><a class="btn btn-danger" href="<?php echo base_url()?>Admin/delete_schedule/<?php echo $value->schedule_id ;?>" id="delete"><i class="halflings-icon white trash">Delete</i></a></td>
     
     
      

    </tr>
  <?php }
?>

    </tbody>
  </table>
</div>