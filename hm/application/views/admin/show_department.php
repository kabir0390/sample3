<div class="container">
  <?php  $message= $this->session->flashdata('message');
    if($message) {?>
     <div class="alert alert-success">
      <?=$message;?>
    </div>
    <?php }?>
<h2>Department : </h2>
   <table class="table table-striped">
    <thead>
      <tr>
        <th>Department ID</th>
        <th>Department Name</th>
        <th>Department Description </th>
         <th>Status</th>
        <th>Open Date</th>
        <th>View</th>
        <th>Update</th>
        <th>Delete</th>
           
      </tr>
    </thead>
    <tbody>
      

<?php 
  foreach ($all_department as  $value) {
    # code...
    ?>

    <tr>
      
      <td class="center"><?php echo $value->department_id ?></td>
      <td class="center"><?php echo $value->department_name ?></td>
      <td class="center"><?php echo $value->department_description ?></td>
      <td class="center"><?php echo $value->department_status ?></td>
      <td class="center"><?php echo $value->date_of_open ?></td>

       <td class="center"><a class="btn btn-primary" href="<?php echo base_url();?>Admin/view_department/<?php echo $value->department_id ;?>">View</a></td>
     
      <td class="center"><a class="btn btn-info" href="<?php echo base_url();?>Admin/update_data/<?php echo $value->department_id ;?>" ><i class="halflings-icon white edit">Edit</i></a></td>
     
      <td class="center">
        <a class="btn btn-danger" href="<?php echo base_url()?>Admin/delete_data/<?php echo $value->department_id ;?>" id="delete">
          
          <i class="halflings-icon white trash">Delete</i>
        </a>
      </td>
     
     
      

    </tr>
  <?php }
?>

    </tbody>
  </table>
</div>