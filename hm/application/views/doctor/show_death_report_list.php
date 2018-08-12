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
        <th>Death Time</th>
        <th>Description</th>
        <th>Doctor</th>
        <th>Time</th>
        
        <th>View</th>
           
      </tr>
    </thead>
    <tbody>
      

<?php 
  foreach ($death_report_list as  $value) {
    # code...
    ?>

    <tr>
      
      <td class="center"><?php echo $value->death_report_id ?></td>
      <td class="center"><?php echo $value->death_paient_id  ?></td>
      <td class="center"><?php echo $value->death_title  ?></td>
      <td class="center"><?php echo $value->death_date ?></td>
      <td class="center"><?php echo $value->death_time ?></td>
      <td class="center"><?php echo $value->death_description ?></td>
      <td class="center"><?php echo $value->death_report_doctor ?></td>
      <td class="center"><?php echo $value->death_report_status ?></td>
     
      
       
      <td class="center">
        <a class="btn btn-primary" href="<?php echo base_url()?>Doctor/view_death_report_list/<?php echo $value->death_report_id ?>" >
          
          <i class="halflings-icon white trash">View</i>
        </a>
      </td>

     

     
      

    </tr>
  <?php }
?>

    </tbody>
  </table>
</div>