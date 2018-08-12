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
        <th>Report ID</th>
        <th>Patient ID</th>
        <th>Title</th>
         <th>Date</th>
        <th>Birth Time</th>
        <th>Description</th>
        <th>Doctor</th>
        <th>Time</th>
        
        <th>View</th>
           
      </tr>
    </thead>
    <tbody>
      

<?php 
  foreach ($birth_report_list as  $value) {
    # code...
    ?>

    <tr>
      
      <td class="center"><?php echo $value->birth_report_id ?></td>
      <td class="center"><?php echo $value->birth_paient_id  ?></td>
      <td class="center"><?php echo $value->birth_title  ?></td>
      <td class="center"><?php echo $value->birth_date ?></td>
      <td class="center"><?php echo $value->birth_time ?></td>
      <td class="center"><?php echo $value->birth_description ?></td>
      <td class="center"><?php echo $value->birth_report_doctor ?></td>
      <td class="center"><?php echo $value->birth_report_status ?></td>
     
      
      <td class="center">
        <a class="btn btn-primary" href="<?php echo base_url()?>Doctor/view_birth_report_list/<?php echo $value->birth_report_id ?>" >
          
          <i class="halflings-icon white trash">View</i>
        </a>
      </td>

     
      

    </tr>
  <?php }
?>

    </tbody>
  </table>
</div>