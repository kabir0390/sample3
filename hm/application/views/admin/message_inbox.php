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
        <th>Subject</th>
        <th>Message</th>
        <th>Date</th>
         <th>From</th>
        
        <th>View</th>
        
        <th>Delete</th>
           
      </tr>
    </thead>
    <tbody>
      

<?php 
  foreach ($message_inbox as  $value) {
    # code...
    ?>

    <tr>
      
      <td class="center"><?php echo $value->message_subject ?></td>
      <td class="center"><?php echo $value->message_text ?></td>
      <td class="center"><?php echo $value->message_date ?></td>
      <td class="center"><?php echo $value->added_by_name ?></td>
      

        <td class="center"><a class="btn btn-primary" href="<?php echo base_url();?>Admin/view_appointment_information/<?php echo $value->message_id; ?>" ><i class="halflings-icon white edit">View</i></a></td>
     
      <td class="center">
        <a class="btn btn-danger" href="<?php echo base_url()?>" id="delete">
          
          <i class="halflings-icon white trash">Delete</i>
        </a>
      </td>
     
     
      

    </tr>
  <?php }
?>

    </tbody>
  </table>
</div>