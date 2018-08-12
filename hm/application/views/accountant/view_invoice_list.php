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
        
        <th>Invoice ID</th>
        <th>Patient ID</th>
         <th>Patient  Name</th>
        
       <th>Total</th>
    
        <th>Paid</th>
        <th>Due</th>
         <th>Date</th>
          <th>View</th> 
          <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      

<?php 
  foreach ($view_invoice_list as  $value) {
    # code...
    ?>

    <tr>
      
      <td class="center"><?php echo $value->invoice_id ?></td>
      <td class="center"><?php echo $value->patient_id  ?></td>
      <td class="center"><?php echo $value->patient_full_name   ?></td>
      <td class="center"><?php echo $value->total ?></td>
      <td class="center"><?php echo $value->ammount_paid  ?></td>
      <td class="center"><?php echo $value->ammount_due  ?></td>
      <td class="center"><?php echo $value->invoice_date  ?></td>
      
      
      <td class="center">
        <a class="btn btn-primary" href="<?php echo base_url()?>Accountant/view_invoice_information/<?php echo $value->invoice_no ?>" >
          
          <i class="halflings-icon white trash">View</i>
        </a>
      </td>

      


      <td class="center">
        <a class="btn btn-danger" href="<?php echo base_url()?>Accountant/delete_invoice_information/<?php echo $value->invoice_no ?>" id="delete">
          
          <i class="halflings-icon white trash">Delete</i>
        </a>
      </td>

 

 

    </tr>
  <?php }
?>

    </tbody>
  </table>
</div>