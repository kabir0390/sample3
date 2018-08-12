<div class="container">
  <?php  $message= $this->session->flashdata('message');
    if($message) {?>
     <div class="alert alert-success">
      <?=$message;?>
    </div>
    <?php }?>

   <table style="width: 100%;">
    <thead>
      <tr>
        <th>Subject</th>
        <th>Message</th>
        <th>Date</th>
         <th>To</th>
        
        <th>View</th>
        
        
           
      </tr>
    </thead>
    <tbody>
      

<?php 
  foreach ($message_send_by_me as  $value) {
    # code...
    ?>

    <tr>
      
      <td class="center"><?php echo $value->message_subject ?></td>
      <td class="center"><?php echo $value->message_text ?></td>
      <td class="center"><?php echo $value->message_date ?></td>
      <td class="center"><?php echo $value->message_send_to ?></td>
      

        <td class="center"><a class="btn btn-primary" href="<?php echo base_url();?>Admin/view_appointment_information/<?php echo $value->message_id; ?>" ><i class="halflings-icon white edit">View</i></a></td>
   
     
     
      

    </tr>
  <?php }
?>

    </tbody>
  </table>
</div>