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
        <th>Account ID</th>
        <th>Account Name</th>
        <th>Type</th>
         <th>Description</th>
        
       <th>Status</th>
    
        <th>Delete</th>
           
      </tr>
    </thead>
    <tbody>
      

<?php 
  foreach ($view_account_information as  $value) {
    # code...
    ?>

    <tr>
      
      <td class="center"><?php echo $value->account_id ?></td>
      <td class="center"><?php echo $value->account_name  ?></td>
      <td class="center"><?php echo $value->account_type  ?></td>
      <td class="center"><?php echo $value->account_description ?></td>
      <td class="center"><?php echo $value->account_status ?></td>
      
      
      


      <td class="center">
        <a class="btn btn-danger" href="<?php echo base_url()?>Accountant/delete_account_information/<?php echo $value->account_id ?>" id="delete">
          
          <i class="halflings-icon white trash">Delete</i>
        </a>
      </td>

 

 

    </tr>
  <?php }
?>

    </tbody>
  </table>
</div>