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
        <th>Notice ID</th>
        <th>Title</th>
        <th>Description</th>
         <th>Status</th>
        
        <th>Date</th>
        
        <th>View</th>
           
      </tr>
    </thead>
    <tbody>
      

<?php 
  foreach ($view_notice_information as  $value) {
    # code...
    ?>

    <tr>
      
      <td class="center"><?php echo $value->notice_id ?></td>
      <td class="center"><?php echo $value->notice_board_title  ?></td>
      <td class="center"><?php echo $value->notice_board_description  ?></td>
      <td class="center"><?php echo $value->notice_board_status ?></td>
      <td class="center"><?php echo $value->notice_date ?></td>
      
      
      
      <td class="center">
        <a class="btn btn-primary" href="<?php echo base_url()?>Accountant/view_notice_information/<?php echo $value->notice_id ?>" >
          
          <i class="halflings-icon white trash">View</i>
        </a>
      </td>

 

    </tr>
  <?php }
?>

    </tbody>
  </table>
</div>