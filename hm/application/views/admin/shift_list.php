<div class="container">
  <?php  $message= $this->session->flashdata('message');
    if($message) {?>
     <div class="alert alert-success">
      <?=$message;?>
    </div>
    <?php }?>
    <h2>Shift :</h2>

   <table class="table table-striped">
    <thead>
      <tr>
        <th>Day</th>
        <th>Start Time</th>
        <th>End Time </th>
         <th>Shift</th>
        <th>Delete</th>
           
      </tr>
    </thead>
    <tbody>
      

<?php 
  foreach ($shift_list as  $value) {
    # code...
    ?>

    <tr>
      
      <td class="center"><?php echo $value->shift_day ?></td>
      <td class="center"><?php echo $value->start_time ?></td>
      <td class="center"><?php echo $value->end_time ?></td>
      <td class="center"><?php echo $value->shift_type ?></td>
      
     
     
      <td class="center">
        <a class="btn btn-danger" href="<?php echo base_url()?>Admin/delete_shift/<?php echo $value->shift_id ;?>" id="delete">
          
          <i class="halflings-icon white trash">Delete</i>
        </a>
      </td>
     
     
      

    </tr>
  <?php }
?>

    </tbody>
  </table>
</div>