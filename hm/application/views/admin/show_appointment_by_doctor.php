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
        <th>Patient Name </th>
         <th>Doctor</th>
        <th>Date</th>
        <th>Time</th>
        <th>Serial</th>
        <th>Status</th>
        <th>Appoint By</th>
        <th>View</th>
        <th>Delete</th>
           
      </tr>
    </thead>
    <tbody>
      

<?php 
  foreach ($appoinment_by_doctor as  $value) {
    # code...
    ?>

    <tr>
      
      <td class="center"><?php echo $value->appointment_id ?></td>
      <td class="center"><?php echo $value->appointment_pateint_id ?></td>
      <td class="center"><?php echo $value->appointment_pateint_name ?></td>
      <td class="center"><?php echo $value->appointment_doctor ?></td>
      <td class="center"><?php echo $value->appointment_date ?></td>
       <td class="center"><?php echo $value->appointment_time ?></td>
        <td class="center"><?php echo $value->appointment_serial ?></td>
         <td class="center"><?php echo $value->status ?></td>
         <td class="center"><?php echo $value->added_by_name ?></td>

       
      
     
       <td class="center"><a class="btn btn-primary" href="<?php echo base_url()?>Admin/view_appointment_doctor_information/<?php echo $value->appointment_id ;?>" ><i class="halflings-icon white trash">View</i></a></td>
     
      
       <td class="center"><a class="btn btn-danger" href="<?php echo base_url()?>Admin/delete_appointment_doctor/<?php echo $value->appointment_id ;?>" id="delete"><i class="halflings-icon white trash">Delete</i></a></td>
     
     
      

    </tr>
  <?php }
?>

    </tbody>
  </table>
</div>