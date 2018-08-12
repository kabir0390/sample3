
<div id="printableArea">
	<div id="page-wrap">

		<textarea id="header" >INVOICE</textarea>
		
		<div id="identity">
		 <form class="form-horizontal" action="<?php echo base_url();?>Accountant/add_new_invoice" method="post" 
              enctype="multipart/form-data">
            <textarea id="address" >DemoHospital
House # 63, Road # 13, Sector # 10,
 Uttara, Dhaka-1230, Bangladesh

Phone: (555) 555-5555</textarea>

            <div id="logo">

              <div id="logoctr">
                <a href="<?php echo base_url();?>assets/pres/javascript:;" id="change-logo" title="Change logo">Change Logo</a>
                <a href="javascript:;" id="save-logo" title="Save changes">Save</a>
                |
                <a href="<?php echo base_url();?>assets/pres/javascript:;" id="delete-logo" title="Delete logo">Delete Logo</a>
                <a href="<?php echo base_url();?>assets/pres/javascript:;" id="cancel-logo" title="Cancel changes">Cancel</a>
              </div>

              <div id="logohelp">
                <input id="imageloc" type="text" size="50" value="" /><br />
                (max width: 540px, max height: 100px)
              </div>
              <img id="image" src="<?php echo base_url();?>assets/pres/images/hos.png" alt="logo" />
            </div>
		
		</div>
		
		<div style="clear:both"></div>
		
		<div id="customer">

		
<?php 
  foreach ($view_invoice_information as  $value) {
    # code...
    ?>


            <table id="meta1">
                <tr>
                    <td class="meta-head">Invoice #</td>
                    <td><textarea name="invoice_id">
                    	<?php echo $value->invoice_id ?>
                    </textarea></td>
                </tr>
                <tr>

                    <td class="meta-head">Date</td>
                    <td><textarea id="date" name="invoice_date">
                    	<?php echo $value->invoice_date  ?>
                    </textarea></td>
                </tr>
                <tr>
                    <td class="meta-head">Amount Due</td>
                    <td><textarea  name="ammount_due">
                    	<?php echo $value->ammount_due  ?>
                    </textarea></td>
                </tr>

            </table>



            <table id="meta">
                <tr>
                    <td class="meta-head">Patient ID</td>
                    <td><textarea name="patient_id">
                    	<?php echo $value->patient_id  ?>
                    </textarea></td>
                </tr>
                <tr>

                    <td class="meta-head">Full Name</td>
                    <td><textarea  name="patient_full_name">
                    	<?php echo $value->patient_full_name  ?>
                    </textarea></td>
                </tr>
                <tr>
                    <td class="meta-head">Address</td>
                    <td><textarea class="" name="patient_address">
                    	<?php echo $value->patient_address  ?>
                    </textarea></td>
                </tr>

            </table>
		
		</div>
		
		<table id="items">
		

		  
		  <tr class="item-row">
		      

		  </tr>
		  <tr>
		  	
		  	<td>Bill</td>
		 
		  <td>Taka</td>

		</tr>

		<tr>
		  	
		  	<td>Total</td>
		 
		  <td><?php echo $value->total ?></td>

		</tr>
		 
		  <tr>
		  	
		  	<td>Ammount Paid</td>
		 
		  <td><?php echo $value->ammount_paid  ?></td>

		</tr>
		  <tr>
		  	
		  	<td>Due</td>
		 
		  <td><?php echo $value->ammount_due  ?></td>

		</tr>
		
		</table>

		 <div class="box-footer">
            

              </div>

               <?php }
?>
		</form>
		
	<textarea id="header" >Thank You</textarea>
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

 
              <input id="mybtn" type="button" onclick="printDiv('printableArea')" value="Print " style="height: 40px;width: 30%;margin-left: 450px;">
</div>
	