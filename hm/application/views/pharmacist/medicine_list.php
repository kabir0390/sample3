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
        <th>Medicine Name</th>
        <th>Medicine Category </th>
        <th>Description</th>
        <th>Price</th>
        <th>Status</th>
      
        
        <th>Update</th>
        <th>Delete</th>
           
      </tr>
    </thead>
    <tbody>
      

<?php 
  foreach ($medicine_list as  $value) {
    # code...
    ?>

    <tr>
     
      <td class="center"><?php echo $value->pharmacist_medicine ?></td>
      <td class="center"><?php echo $value->pharmacist_medicine_category  ?></td>
      <td class="center"><?php echo $value->pharmacist_medicine_description  ?></td>
      <td class="center"><?php echo $value->pharmacist_medicine_price  ?></td>
      <td class="center"><?php echo $value->medicine_status  ?></td>

      
        
      <td class="center">
        <a class="btn btn-primary" href="<?php echo base_url()?>Pharmacist/update_medicine_information/<?php echo $value->medicine_id ?>" >
          
          <i class="halflings-icon white trash">Update</i>
        </a>
      </td>
      
      <td class="center">
        <a class="btn btn-danger" href="<?php echo base_url()?>Pharmacist/delete_medicine/<?php echo $value->medicine_id ?>" id="delete">
          
          <i class="halflings-icon white trash">Delete</i>
        </a>
      </td>

 

    </tr>
  <?php }
?>

    </tbody>
  </table>
</div>
