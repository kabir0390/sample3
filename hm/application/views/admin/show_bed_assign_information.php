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
        <th>Bed Assign ID</th>
        <th>Patient ID</th>
        <th>Bed Type </th>
         <th>Assign Date</th>
        <th>Discharge Date</th>
        <th>Status</th>
        <th>View</th>
        <th>Update</th>
        <th>Delete</th>
           
      </tr>
    </thead>
    <tbody>
      

<?php 
  foreach ($show_bed_assign_information as  $value) {
    # code...
    ?>

    <tr>
      
      <td class="center"><?php echo $value->bed_assign_id ?></td>
      <td class="center"><?php echo $value->patient_id  ?></td>
      <td class="center"><?php echo $value->bed_type ?></td>
      <td class="center"><?php echo $value->assign_date  ?></td>
      
      <td class="center"><?php echo $value->discharge_date ?></td>
      <td class="center"><?php echo $value->bed_assign_status  ?></td>

 <td class="center"><a class="btn btn-primary" href="<?php echo base_url();?>Admin/view_bed_assign_information/<?php echo $value->bed_assign_id ;?>" ><i class="halflings-icon white edit">View</i></a></td>
     
      <td class="center"><a class="btn btn-info" href="<?php echo base_url();?>Admin/update_data/<?php echo $value->bed_assign_id ;?>" ><i class="halflings-icon white edit">Edit</i></a></td>
     
      <td class="center">
        <a class="btn btn-danger" href="<?php echo base_url()?>Admin/delete_data/<?php echo $value->bed_assign_id ;?>" id="delete">
          
          <i class="halflings-icon white trash">Delete</i>
        </a>
      </td>
     
     
      

    </tr>
  <?php }
?>

    </tbody>
  </table>
</div>