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
        <th>Employee ID</th>
        <th>First Name</th>
        <th>Last Name </th>
         <th>Email</th>
        <th>Phone</th>
        <th>Sex</th>
        <th>Blood Group</th>
        <th>Status</th>
        <th>View</th>
        <th>Update</th>
        <th>Delete</th>
           
      </tr>
    </thead>
    <tbody>
      

<?php 
  foreach ($all_employee_doctor as  $value) {
    # code...
    ?>

    <tr>
      
      <td class="center"><?php echo $value->employee_id ?></td>
     
      <td class="center"><?php echo $value->employee_first_name ?></td>
     
     <td class="center"><?php echo $value->employee_last_name ?></td>
     
     <td class="center"><?php echo $value->employee_email ?></td>
     <td class="center"><?php echo $value->employee_phone ?></td>
     <td class="center"><?php echo $value->employee_sex ?></td>
     <td class="center"><?php echo $value->employee_blood ?></td>
     
     <td class="center"><?php echo $value->employee_status ?></td>
     
     
     
     <td class="center"><a class="btn btn-primary" href="<?php echo base_url();?>Admin/view_employee_information/<?php echo $value->employee_id ;?>" ><i class="halflings-icon white edit">View</i></a></td>
     
<td class="center"><a class="btn btn-info" href="<?php echo base_url();?>Admin/update_data/<?php echo $value->employee_id ;?>" ><i class="halflings-icon white edit">Edit</i></a></td>
     
      <td class="center">
        <a class="btn btn-danger" href="<?php echo base_url()?>Admin/delete_data/<?php echo $value->employee_id ;?>" id="delete">
          
          <i class="halflings-icon white trash">Delete</i>
        </a>
      </td>
      
     
     
      

    </tr>
  <?php }
?>

    </tbody>
  </table>
</div>