<div>
	
	<div style="text-align: center; background-color: #F7F9FA;"><h2>Notice</h2></div>

	<div>
		<hr>
		<hr>
				
  <table style="width:100%">
<?php 
  foreach ($view_notice_information as  $value) {
    # code...
    ?>
  <tr>
   
    <th style="text-align: center;">Description:</th>
   
  </tr>
  <tr>
     
    <td ><?php echo $value->notice_board_description ?></td>
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
  foreach ($view_notice_information as  $value) {
    # code...
    ?>
  <tr>
    <th>Patient ID:</th>
    <td ><?php echo $value->notice_id  ?></td>
  </tr>
  <tr>
    <th>Title:</th>
    <td ><?php echo $value->notice_board_title ?></td>
  </tr>
   <tr>
    <th>Date:</th>
    <td ><?php echo $value->notice_date ?></td>
  </tr>
  


  <?php }
?>
</table>

	</div>
</div>