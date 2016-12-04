<div id="content" class="span-24 container">
    <div id="" class="span-16 _2column">
        <p>
            <h1>Pickup and Ship To Addresses</h1>
        </p>
	
<?php if(count($addresses) > 0) : foreach ($addresses as $row): ?>
<form id="shippingAddresses" action="/customers/delete_ship_address" method="post" class="inline" />
	<input type="hidden" name="id" id="id" value="<?=$row->id?>" />
<fieldset>
	<table cellpadding="0" cellspacing="0" class="stripeMe">
        <tr><th colspan="2">Address</th></tr>
		<tr><td colspan="2"><b>Contact:</b><?=$row->contact?></td>
	<tr>
		<tr><td colspan="2"><b>Company:</b><?=$row->company?></td>
	<tr>
		<td><strong>Street Address:</strong> <?=$row->street?></td>
		<td><?=$row->street2?></td>

	</tr>
	<tr>
		<td><strong>City:</strong><?=$row->city?></td>
		<td><strong>State:</strong><?=$row->state?></td>
	</tr>
	<tr>
		<td><strong>Zip:</strong><?=$row->zip?></td>
		<td><strong>Phone:</strong><?=$row->phone?></td>
	</tr>
	<tr>
		<td><input type="submit" name="Delete Address" value="Delete" /></td>
	</tr>
	</table> 
	</fieldset>
	</form>
<?php endforeach; ?>
		 	
			<?php else : ?>
			
			<h2>No Vendors Found</h2>
			
		  <?php endif; ?>

		
		<form id="submitShippingInfo" action="/customers/submit_ship" method="post" class="inline">
		
		<input type="hidden" name="user_id" id="user_id" value="<?php echo $user_id ?>" />
	
		
		<?php echo "<fieldset><legend>Submit Your Shipping Address</legend>"; ?>
		
		<?php echo form_label('Enter the Contact Name<br/>', 'contact');?>
		<input type="text" name="contact" ><br/>
		
		<?php echo form_label('Enter the Company Name<br/>', 'company');?>
		<input type="text" name="company" ><span class="required">* Required</span><br/>
		
		<?php echo form_label('Enter the Primary Street<br/>', 'street');?>
		<input type="text" name="street" ><span class="required">* Required</span><br/>
		
		
		<?php echo form_label('Enter The Secondary Street<br/>', 'street2'); ?>
		<input type="text" name="street2" ><br/>
		
		
		<?php echo form_label('Enter the City<br/>', 'city'); ?>
		<input type="text" name="city" ><span class="required">* Required</span><br/>
		
		<br/>
		
		<?php echo form_label('State: Arizona<br/>', 'state'); ?>
		<input type="hidden" name="state" value="Arizona" ><br/>
        

		<?php echo form_label('Enter Your 5 Digit Zip Code<br/>', 'zip'); ?>
		<input type="text" name="zip" ><br/>
		
		<?php echo form_label('Enter Your Phone Number<br/>', 'phone'); ?>
		<input type="text" name="phone" ><span class="required">* Required</span><br/>
		
		<input type="submit" value="Submit">
		
		</fieldset>
		
		</form>
		
		
    </div>

    <div id="" class="span-8 column last">
        
		<p>
            <h1>Available Actions</h1>
        </p>
		<p>You can do any of the following:
		<ul>
		<li><a href="/customers/account_info">Update My Profile</a></li>
		<li><a href="/customers/request_pickup">Request A Pickup</a></li>
		<li><a href="/customers/shipping_info">Add/Delete Shipping Addresses</a></li>
	</ul></li>
	</p>
    </div>

</div>