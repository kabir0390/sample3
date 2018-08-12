
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
    <tbody>
      
<?php 
  foreach ($bloodtpes as  $value) {
    # code...
    ?>

    <tr>
     
       <td class="center"> <?php echo $value->blood_type_id?></td>
      <td class="center"><?php echo $value->blood_type_name?></td>
     
      <td class="center"><?php echo $value->blood_cost ?></td>
     
     
     
     
<td class="center"><a class="btn btn-info" href="<?php echo base_url();?>Admin/edit_blood_type/<?php echo $value->blood_type_id ;?>" ><i class="halflings-icon white edit">Edit</i></a></td>
     
      <td class="center">
        <a class="btn btn-danger" href="<?php echo base_url()?>Admin/delete_bloodtype/<?php echo $value->blood_type_id ;?>" id="delete">
          
          <i class="halflings-icon white trash">Delete</i>
        </a>
      </td>
      
     
     
      

    </tr>
  <?php }
?>

    </tbody>
  </table>
</div>