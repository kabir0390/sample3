<div class="container">
  <?php  $message= $this->session->flashdata('message');
    if($message) {?>
     <div class="alert alert-success">
      <?=$message;?>
    </div>
    <?php }?>

   <table style="width: 100%;" >
    <thead>
      <tr>
        <th>Prescription No</th>
        <th>Prescription ID</th>
        <th>Patient ID</th>
         <th>Patient Name</th>
        <th>Address</th>
        <th>Date</th>
        <th>View</th>
           
      </tr>
    </thead>
    <tbody>
      

<?php 
  foreach ($prescription_list as  $value) {
    # code...
    ?>

    <tr>
      <td class="center"><?php echo $value->pres_id ?></td>
      <td class="center"><?php echo $value->prescription_id ?></td>
      <td class="center"><?php echo $value->prescription_patient_id ?></td>
      <td class="center"><?php echo $value->prescription_patient_name?></td>
      <td class="center"><?php echo $value->prescription_patient_address?></td>
      <td class="center"><?php echo $value->prescription_date?></td>
     
     
      
      
     <td class="center">
        <a class="btn btn-primary" href="<?php echo base_url()?>Doctor/view_prescription_patient_info/<?php echo $value->pres_id ;?>" >
          
          <i class="halflings-icon white trash">View</i>
        </a>
      </td>
      

     

     
      

    </tr>
  <?php }
?>

    </tbody>
  </table>
</div>