
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
        <th>Patient ID</th>
        <th>First Name</th>
        <th>Last Name </th>
         <th> Email</th>
         <th>Address</th>
        <th>Phone</th>
        <th>Date</th>
        <th>Status</th>
        <th> View</th>
        
           
      </tr>
    </thead>
    <tbody>
      

<?php 
  foreach ($all_patient as  $value) {
    # code...
    ?>

    <tr>
      
      <td class="center"><?php echo $value->patient_id ?></td>
      <td class="center"><?php echo $value->patient_first_name ?></td>
      <td class="center"><?php echo $value->patient_last_name ?></td>
      <td class="center"><?php echo $value->patient_email ?></td>
      <td class="center"><?php echo $value->patient_address ?></td>
      <td class="center"><?php echo $value->patient_phone ?></td>
       
      <td class="center"><?php echo $value->patient_birth_date ?></td>
       <td class="center"><?php echo $value->patient_status ?></td>
       
       
         
       <td class="center"><a class="btn btn-primary" href="<?php echo base_url();?>Receptionist/view_patient_information/<?php echo $value->patient_id ;?>"><i class="halflings-icon white edit">View</i></a></td>
     
     
     
      

    </tr>
  <?php }
?>

    </tbody>
  </table>
</div>