
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

		


            <table id="meta1">
                <tr>
                    <td class="meta-head">Invoice #</td>
                    <td><textarea name="invoice_id">
                    	1234
                    </textarea></td>
                </tr>
                <tr>

                    <td class="meta-head">Date</td>
                    <td><textarea id="date" name="invoice_date"><p>id="date"</p>></textarea></td>
                </tr>
                <tr>
                    <td class="meta-head">Amount Due</td>
                    <td><textarea class="due" name="ammount_due"></textarea></td>
                </tr>

            </table>



            <table id="meta">
                <tr>
                    <td class="meta-head">Patient ID</td>
                    <td><textarea name="patient_id">
                    	
                    </textarea></td>
                </tr>
                <tr>

                    <td class="meta-head">Full Name</td>
                    <td><textarea  name="patient_full_name"></textarea></td>
                </tr>
                <tr>
                    <td class="meta-head">Address</td>
                    <td><textarea class="" name="patient_address"></textarea></td>
                </tr>

            </table>
		
		</div>
		
		<table id="items">
		
		  <tr>
		      <th>Account Type</th>
		      <th>Description</th>
		      <th>Unit Cost</th>
		      <th>Quantity</th>
		      <th>Price</th>
		  </tr>
		  
		  <tr class="item-row">
		      

		  </tr>
		  
		 
		  
		  <tr id="hiderow">
		    <td colspan="5"><a id="addrow" href="javascript:;" title="Add a row">Add a row</a></td>
		  </tr>
		  
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Subtotal</td>
		      <td class="total-value" ><div id="subtotal"></div></td>
		  </tr>
		  <tr>

		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line">Total</td>
		      <td class="total-value"><textarea id="total"  name="total"></textarea></td>
		  </tr>
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line" >Amount Paid</td>

		      <td class="total-value"><textarea id="paid" name="ammount_paid"></textarea></td>
		  </tr>
		  <tr>
		      <td colspan="2" class="blank"> </td>
		      <td colspan="2" class="total-line balance">Balance Due</td>
		      <td class="total-value balance" ><textarea class="due" name="balance_due"></textarea></td>
		  </tr>

		  
		
		</table>

		 <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">ADD</button>
              <input id="mybtn" type="button" onclick="printDiv('printableArea')" value="Print " class="pb"/>

              </div>
		</form>
		<div id="terms">
		  <h5>Terms</h5>
		  <textarea>NET 30 Days. Finance Charge of 1.5% will be made on unpaid balances after 30 days.</textarea>
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
	