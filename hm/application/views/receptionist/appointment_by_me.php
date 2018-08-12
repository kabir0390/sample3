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
        <th>Appointment ID</th>
        <th>Patient ID</th>
        <th>Patient Name</th>
         <th>Doctor</th>
        <th>Department</th>
        <th>Date</th>
        <th>Time</th>
        <th>Serial</th>
        <th>Problem</th>
        <th>Status</th>
        <th>View</th>
           
      </tr>
    </thead>
    <tbody>
      

<?php 
  foreach ($appointment_assign_by_me as  $value) {
    # code...
    ?>

    <tr>
      
      <td class="center"><?php echo $value->appointment_id ?></td>
      <td class="center"><?php echo $value->appointment_pateint_id  ?></td>
      <td class="center"><?php echo $value->appointment_pateint_name  ?></td>
      <td class="center"><?php echo $value->appointment_doctor ?></td>
      <td class="center"><?php echo $value->appointment_department ?></td>
      <td class="center"><?php echo $value->appointment_date ?></td>
      <td class="center"><?php echo $value->appointment_time ?></td>
      <td class="center"><?php echo $value->appointment_serial ?></td>
      <td class="center"><?php echo $value->appointment_problem ?></td>
      <td class="center"><?php echo $value->status  ?></td>
      
       
     <td class="center">
        <a class="btn btn-danger" href="<?php echo base_url()?>Doctor/view_appointment_information/<?php echo $value->appointment_id ?>/<?php echo $value->appointment_doctor ?>" id="delete">
          
          <i class="halflings-icon white trash">Delete</i>
        </a>
      </td>
     
      

    </tr>
  <?php }
?>

    </tbody>
  </table>
</div>