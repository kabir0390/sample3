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
        <th>Case Study ID</th>
        <th>Patient ID</th>
        <th>Food Allergies</th>
         <th>Tendency Bleed</th>
        <th>Heart Disease</th>
        <th>High Blood Pressure</th>
        <th>Diabetic</th>
        <th>Surgery</th>
        <th>Accident</th>
        <th>Others</th>
        <th>Family Medical History</th>
        <th>Female Pregnancy</th>

        <th>Current Medication</th>
        <th>Breast Feeding</th>
        <th>Status</th>
        <th>Delete</th>
           
      </tr>
    </thead>
    <tbody>
      

<?php 
  foreach ($patient_case_study_list as  $value) {
    # code...
    ?>

    <tr>
      
      <td class="center"><?php echo $value->patient_case_study_id ?></td>
      <td class="center"><?php echo $value->prescription_patient_id  ?></td>
      <td class="center"><?php echo $value->prescription_food_allergies  ?></td>
      <td class="center"><?php echo $value->prescription_tendency_bleed ?></td>
      <td class="center"><?php echo $value->prescription_heart_disease ?></td>
      <td class="center"><?php echo $value->prescription_high_blood_pressure ?></td>
      <td class="center"><?php echo $value->prescription_diabetic ?></td>
      <td class="center"><?php echo $value->prescription_accident ?></td>
      <td class="center"><?php echo $value->prescription_Others ?></td>
      <td class="center"><?php echo $value->prescription_family  ?></td>

       <td class="center"><?php echo $value->prescription_medication  ?></td>
        <td class="center"><?php echo $value->prescription_female_pregnancy  ?></td>
         <td class="center"><?php echo $value->prescription_breast_feeding  ?></td>
          <td class="center"><?php echo $value->prescription_refference  ?></td>

           <td class="center"><?php echo $value->status  ?></td>

      
 <td class="center">
        <a class="btn btn-danger" href="<?php echo base_url()?>Doctor/delete_schedule_info/<?php echo $value->patient_case_study_id ;?>" id="delete">
          
          <i class="halflings-icon white trash">Delete</i>
        </a>
      </td>
     
      

    </tr>
  <?php }
?>

    </tbody>
  </table>
</div>