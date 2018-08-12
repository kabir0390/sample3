<div>
	
	<div style="text-align: center; background-color: #F7F9FA;"><h2>Death Report</h2></div>

	<div>
		<hr>
		<hr>
				
  <table style="width:100%">
<?php 
  foreach ($view_death_report_list as  $value) {
    # code...
    ?>
  <tr>
   
    <th style="text-align: center;">Description:</th>
   
  </tr>
  <tr>
     
    <td ><?php echo $value->death_description ?></td>
  </tr>
  


  <?php }
?>
</table>



	</div>
	<hr >
	<hr>
	<div style="background-color: #F7F9FA;">
		
  <table style="width:50%">
<?php 
  foreach ($view_death_report_list as  $value) {
    # code...
    ?>
  <tr>
    <th>Patient ID:</th>
    <td ><?php echo $value->death_paient_id  ?></td>
  </tr>
  <tr>
    <th>Doctor Name:</th>
    <td ><?php echo $value->death_report_doctor ?></td>
  </tr>
  <tr>
    <th>Date:</th>
     <td ><?php echo $value->death_date ?></td>
  </tr>


  <?php }
?>
</table>

	</div>
</div>