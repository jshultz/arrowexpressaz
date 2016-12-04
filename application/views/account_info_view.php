<div id="content" class="span-24 container">
    <div id="" class="span-16 _2column">
        <p>
            <h1>My Account Profile</h1>
        </p>
		
		<?php if(count($addresses) > 0) : foreach ($addresses as $row): ?>

<form id="billingAddresses" action="/customers/delete_bill_address" method="post" class="inline" />
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
			
			<h2>No Addresses Found</h2>
			
		  <?php endif; ?>

		
		<form id="submitAccountInfo" action="/customers/submit_bill" method="post" class="inline">
		
		<input type="hidden" name="user_id" id="user_id" value="<?php echo $user_id ?>" />
	
		
		<?php echo "<fieldset><legend>Submit Your Billing Address</legend>"; ?>
		
		<?php echo form_label('Enter Your Contact Name<br/>', 'contact');?>
		<input type="text" name="contact" ><span class="required">* Required</span><br/>
		
		<?php echo form_label('Enter Your Email Address<br/>', 'email');?>
		<input type="text" name="email" ><span class="required">* Required</span><br/>
		
		<?php echo form_label('Enter Your Company Name<br/>', 'company');?>
		<input type="text" name="company" ><br/>
		
		<?php echo form_label('Enter Your Street Address<br/>', 'street');?>
		<input type="text" name="street" ><span class="required">* Required</span><br/>
		
		
		<?php echo form_label('Enter Your Address Line 2<br/>', 'street2'); ?>
		<input type="text" name="street2" ><br/>
		
		
		<?php echo form_label('Enter Your City<br/>', 'city'); ?>
		<input type="text" name="city" ><span class="required">* Required</span><br/>
		
		
        <?php function state_selection() {
    echo '<select name="state">';
    $states = array('Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California', 'Colorado', 'Connecticut', 'Delaware', 'District of Columbia', 'Florida', 'Georgia', 'Hawaii', 'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana', 'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota', 'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire', 'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota', 'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island', 'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont', 'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming');
    foreach ($states as $state_name) {
        echo '<option value="'.$state_name.'">'.$state_name.'</option>';
    }
    echo '</select>';
	echo '<br/>';
} ?>

<?php echo form_label('Choose Your State<br/>', 'state'); ?>
<?php state_selection(); ?>

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