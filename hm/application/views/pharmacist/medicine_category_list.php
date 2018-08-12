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
        <th>Medicine CategoryS ID</th>
        <th>Medicine Category Name</th>
        <th>Description</th>
        <th>Date</th>
        
      
        
        <th>View</th>
           
      </tr>
    </thead>
    <tbody>
      

<?php 
  foreach ($medicine_category_list as  $value) {
    # code...
    ?>

    <tr>
      
      <td class="center"><?php echo $value->medicine_category_id ?></td>
      <td class="center"><?php echo $value->medicine_category_name  ?></td>
      <td class="center"><?php echo $value->medicine_category_description  ?></td>
      <td class="center"><?php echo $value->medicine_category_date  ?></td>

      
      
      
      <td class="center">
        <a class="btn btn-danger" href="<?php echo base_url()?>Pharmacist/view_notice_information_data/<?php echo $value->medicine_category_id ?>" id="delete">
          
          <i class="halflings-icon white trash">Delete</i>
        </a>
      </td>

 

    </tr>
  <?php }
?>

    </tbody>
  </table>
</div>
