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
        <th>Notice</th>
        <th>View</th>
        <th>Update</th>
        <th>Delete</th>
           
      </tr>
    </thead>
    <tbody>
      

<?php 
  foreach ($all_notice as  $value) {
    # code...
    ?>

    <tr>
      
      <td class="center"><?php echo $value->notice_id ?></td>
     
      <td class="center"><?php echo $value->notice_board_title ?></td>
     
     <td class="center"><?php echo $value->notice_board_description ?></td>
     
     
     
          
<td class="center"><a class="btn btn-primary" href="<?php echo base_url();?>Admin/view_notice/<?php echo $value->notice_id ;?>" ><i class="halflings-icon white edit">View</i></a></td>
     
<td class="center"><a class="btn btn-info" href="<?php echo base_url();?>Admin/update_notice/<?php echo $value->notice_id ;?>" ><i class="halflings-icon white edit">Update</i></a></td>
     
      <td class="center">
        <a class="btn btn-danger" href="<?php echo base_url()?>Admin/delete_notice/<?php echo $value->notice_id ;?>" id="delete">
          
          <i class="halflings-icon white trash">Delete</i>
        </a>
      </td>
      
     
     
      

    </tr>
  <?php }
?>

    </tbody>
  </table>
</div>