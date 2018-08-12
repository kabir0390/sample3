<input id="mybtn" type="button" onclick="printDiv('printableArea')" value="Print " class="pb"/>

<div id="printableArea">
<div>
	
	<div style="text-align: center; background-color: #F7F9FA;"><h2>Birth Report</h2></div>

	<div>
		<hr>
		<div >
			 <table style="width:20%">
<?php 
  foreach ($view_birth_report_list as  $value) {
    # code...
    ?>
  <tr>
   
    <th >Report ID:</th>
     <td ><?php echo $value->birth_report_id ?></td>
   
  </tr>
  
 
  


  <?php }
?>
</table>




		</div>
		<hr>
				
  <table style="width:100%">
<?php 
  foreach ($view_birth_report_list as  $value) {
    # code...
    ?>
  <tr>
   
    <th style="text-align: center;">Description:</th>
   
  </tr>
  <tr>
     
    <td ><?php echo $value->birth_description ?></td>
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
  foreach ($view_birth_report_list as  $value) {
    # code...
    ?>
  <tr>
    <th>Patient ID:</th>
    <td ><?php echo $value->birth_paient_id  ?></td>
  </tr>
  <tr>
    <th>Doctor Name:</th>
    <td ><?php echo $value->birth_report_doctor ?></td>
  </tr>
  <tr>
    <th>Date:</th>
     <td ><?php echo $value->birth_date ?></td>
  </tr>


  <?php }
?>
</table>

	</div>
</div>
	
<script>
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}</script>
</div>