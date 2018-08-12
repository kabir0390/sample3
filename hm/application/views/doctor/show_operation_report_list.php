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
        <th>Operation Time</th>
        <th>Description</th>
        <th>Doctor</th>
        <th>Time</th>
        
        <th>View</th>
           
      </tr>
    </thead>
    <tbody>
      

<?php 
  foreach ($operation_report_list as  $value) {
    # code...
    ?>

    <tr>
      
      <td class="center"><?php echo $value->operation_report_id ?></td>
      <td class="center"><?php echo $value->operation_paient_id  ?></td>
      <td class="center"><?php echo $value->operation_title  ?></td>
      <td class="center"><?php echo $value->operation_date ?></td>
      <td class="center"><?php echo $value->operation_time ?></td>
      <td class="center"><?php echo $value->operation_description ?></td>
      <td class="center"><?php echo $value->operation_report_doctor ?></td>
      <td class="center"><?php echo $value->operation_report_status ?></td>
     
      
       <td class="center"><a href="<?php echo base_url();?>Doctor/view_department/<?php echo $value->operation_report_id ;?>">View</a></td>
     

     
      

    </tr>
  <?php }
?>

    </tbody>
  </table>
</div>