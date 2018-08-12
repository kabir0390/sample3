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
        <th>Bed Type</th>
         <th>Assign Date</th>
        <th>Discharge Date</th>
        <th>Description</th>
        <th>Status</th>
        
        
        <th>View</th>
           
      </tr>
    </thead>
    <tbody>
      

<?php 
  foreach ($bed_assign_list as  $value) {
    # code...
    ?>

    <tr>
      
      <td class="center"><?php echo $value->bed_assign_id ?></td>
      <td class="center"><?php echo $value->patient_id  ?></td>
      <td class="center"><?php echo $value->bed_type  ?></td>
      <td class="center"><?php echo $value->assign_date ?></td>
      <td class="center"><?php echo $value->discharge_date ?></td>
      <td class="center"><?php echo $value->bed_assign_description ?></td>
      <td class="center"><?php echo $value->bed_assign_status ?></td>
      
     
      
       <td class="center"><a href="<?php echo base_url();?>Doctor/view_department/<?php echo $value->bed_assign_id ;?>">View</a></td>
     

     
      

    </tr>
  <?php }
?>

    </tbody>
  </table>
</div>