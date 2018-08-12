
 <div>
  <form action="<?php echo base_url();?>Admin/add_blood_types">
      <input type="submit" name="add_bloodtype" value="Add Blood Type" style="height: 30px;width: 20%;margin-bottom: 10px;">
</form>

    </div>
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
       <th>No</th>
        <th>Blood Type</th>
        <th>Cost</th>
        <th>Edit</th>
         <th> Delete</th>
        
           
      </tr>
    </thead>

    <?php 


    $total_blood=$available_blood_transection_inpatinet->blood_transection_quantity;
    $total_blood1=$available_blood_quantity->blood_quantity_quantity ;

   // $available=( $total_blood1-$total_blood);

    print_r($total_blood);
    echo $total_blood1;

    ?>
    <tbody>


    </tbody>
  </table>
</div>