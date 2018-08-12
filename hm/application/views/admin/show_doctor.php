
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
        <th>Doctor ID</th>
        <th>First Name</th>
        <th>Last Name </th>
         <th> Email</th>
        <th> Designation</th>
        <th> Department</th>
        <th>Phone</th>
        <th>Status</th>
        <th> View</th>
        <th>Update</th>
        <th>Delete</th>
           
      </tr>
    </thead>
    <tbody>
      

<?php 
  foreach ($all_doctor as  $value) {
    # code...
    ?>

    <tr>
      
      <td class="center"><?php echo $value->doctor_id ?></td>
      <td class="center"><?php echo $value->doctor_first_name ?></td>
      <td class="center"><?php echo $value->doctor_last_name ?></td>
      <td class="center"><?php echo $value->doctor_email ?></td>
      <td class="center"><?php echo $value->doctor_designation ?></td>
      <td class="center"><?php echo $value->doctor_department ?></td>
       
          <td class="center"><?php echo $value->doctor_phone ?></td>
           
            <td class="center"><?php echo $value->doctor_status ?></td>

         <td class="center"><a class="btn btn-primary" href="<?php echo base_url();?>Admin/view_doctor_information/<?php echo $value->doctor_id ;?>"><i class="halflings-icon white edit">View</i></a></td>
      <td class="center"><a class="btn btn-info" href="<?php echo base_url();?>Admin/update_doctor/<?php echo $value->doctor_id ;?>"><i class="halflings-icon white edit">Edit</i></a></td>
     
      <td class="center"><a class="btn btn-danger" href="<?php echo base_url()?>Admin/delete_doctor/<?php echo $value->doctor_id ;?>" id="delete"><i class="halflings-icon white trash">Delete</i></a></td>
     
     
      

    </tr>
  <?php }
?>

    </tbody>
  </table>
</div>