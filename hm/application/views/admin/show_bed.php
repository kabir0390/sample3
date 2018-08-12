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
        <th>Bed ID</th>
        <th>Bed Type</th>
        <th>Description </th>
         <th>Capacity</th>
        <th>Charge</th>
        <th>Status</th>
        <th>Update</th>
        <th>Delete</th>
           
      </tr>
    </thead>
    <tbody>
      

<?php 
  foreach ($all_bed as  $value) {
    # code...
    ?>

    <tr>
      
      <td class="center"><?php echo $value->bed_id ?></td>
      <td class="center"><?php echo $value->bed_type ?></td>
      <td class="center"><?php echo $value->bed_description ?></td>
      <td class="center"><?php echo $value->bed_capacity ?></td>
      
      <td class="center"><?php echo $value->bed_charge ?></td>
      <td class="center"><?php echo $value->bed_status ?></td>

     
      <td class="center"><a class="btn btn-info" href="<?php echo base_url();?>Admin/update_data/<?php echo $value->bed_id ;?>" ><i class="halflings-icon white edit">Edit</i></a></td>
     
      <td class="center">
        <a class="btn btn-danger" href="<?php echo base_url()?>Admin/delete_data/<?php echo $value->bed_id ;?>" id="delete">
          
          <i class="halflings-icon white trash">Delete</i>
        </a>
      </td>
     
     
      

    </tr>
  <?php }
?>

    </tbody>
  </table>
</div>