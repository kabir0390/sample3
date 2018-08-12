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
        <th>Birth Report ID</th>
        <th>Patient ID</th>
        <th>Title </th>
         <th>Date</th>
        <th>Time</th>
        <th>Description</th>
        <th>Doctor</th>
        <th>Status</th>
        <th>View</th>
        <th>Delete</th>
           
      </tr>
    </thead>
    <tbody>
      

<?php 
  foreach ($all_birth_report as  $value) {
    # code...
    ?>

    <tr>
      
      <td class="center"><?php echo $value->birth_report_id ?></td>
      <td class="center"><?php echo $value->birth_paient_id ?></td>
      <td class="center"><?php echo $value->birth_title ?></td>
      <td class="center"><?php echo $value->birth_date ?></td>
      <td class="center"><?php echo $value->birth_time ?></td>
       <td class="center"><?php echo $value->birth_description ?></td>
        <td class="center"><?php echo $value->birth_report_doctor ?></td>
         <td class="center"><?php echo $value->birth_report_status ?></td>

       
      <td class="center"><a class="btn btn-primary" href="<?php echo base_url();?>Admin/view_birth_report/<?php echo $value->birth_report_id; ?>" ><i class="halflings-icon white edit">View</i></a></td>
     
      <td class="center">
        <a class="btn btn-danger" href="<?php echo base_url()?>Admin/delete_birth_report/<?php echo $value->birth_report_id ;?>" id="delete">
          
          <i class="halflings-icon white trash">Delete</i>
        </a>
      </td>
     
     
      

    </tr>
  <?php }
?>

    </tbody>
  </table>
</div>