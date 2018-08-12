<div class="container">
  <?php  $message= $this->session->flashdata('message');
    if($message) {?>
     <div class="alert alert-success">
      <?=$message;?>
    </div>
    <?php }?>
<h2>Inpatient Blood Transection List</h2>
   <table class="table table-striped">
    <thead>
      <tr>
        <th>Transection ID</th>
        <th>Patient ID</th>
        <th>Blood Type </th>
         <th>Quantity</th>
        <th>Date</th>
        
        <th>View</th>
           
      </tr>
    </thead>
    <tbody>
      

<?php 
  foreach ($blood_transection_inpatinet_list as  $value) {
    # code...
    ?>

    <tr>
      
      <td class="center"><?php echo $value->blood_transection_id ?></td>
      <td class="center"><?php echo $value->blood_transection_patient_id  ?></td>
      <td class="center"><?php echo $value->blood_transection_type ?></td>
      <td class="center"><?php echo $value->blood_transection_quantity ?></td>
      
      <td class="center"><?php echo $value->blood_transection_date ?></td>
     

 <td class="center"><a class="btn btn-primary" href="<?php echo base_url();?>Admin/view_transection_blood_inpatient/<?php echo $value->blood_transection_id ;?>" ><i class="halflings-icon white edit">View</i></a></td>
    
     
     
      

    </tr>
  <?php }
?>

    </tbody>
  </table>
</div>