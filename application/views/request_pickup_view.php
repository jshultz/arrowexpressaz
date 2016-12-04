<div id="content" class="span-24 container">
    <div id="" class="span-16 _2column">
        <p>
            <h1>Request A Pickup</h1>
        </p>
		
		
	
	<h3><p><i>It's <b>EASY</b> to request a Pick Up! </i></p></h3>
	<p class="notice"><strong>Please note, if you need to schedule a pickup for today please call our office at:<br/> 928-639-3533</strong></p>
	<form action="/customers/submit_pickup_request" method="post" class="inline">
		<input type="hidden" name="user_id" id="user_id" value="<?php echo $user_id ?>" />
		<input type="hidden" name="order_date" value="<?php echo date("d/m/y : H:i:s", time());?>" />
		
		<?php foreach($addresses as $row): ?>
			<input type="hidden" name="name" id="name" value="<?=$row->contact?>" />
			<input type="hidden" name="email" id="email" value="<?=$row->email?>" />
			<input type="hidden" name="company" id="company" value="<?=$row->company?>" />
			
		<?php endforeach; ?>
		
		<fieldset>
			<legend>Your Information</legend>
			<p><label>What is your name?</label>
			<input type="text" id="requestor_name" name="requestor_name" />
			</p>
			<p><label>What is your phone number?</label>
			<input type="text" id="requestor_number" name="requestor_number" />
			</p>
		</fieldset>
	
		<fieldset>
		<legend>Request A Pickup or Delivery</legend>
        
		
		<p>
            <label>Where will we pick up?</label>
            <select name="origin_id">
            <?php foreach ($s_addresses->result() as $row): ?>
            <option value="<?=$row->id?>" > <?=$row->company?></option>
            <?php endforeach; ?>
			</select>
        </p>
		<p>Don't see the address your looking for? <a href="/customers/shipping_info">Click here to add a new address.</a></p>
		<br/>
		<p><label>What will we pick up?</label><br/>
			Description including approximate dimensions: length, width, height and weight
			<textarea name="description" rows=5, cols=25></textarea>
		
		<fieldset>
			<legend>Pickup Date and Time</legend>
		<p><label>What day will we pick up?</label>
		<input type="text" id="one" class="datepicker" name="ship_date" />
		<span class="required">* Required</span>
		<br/>
		 Please note, if you need to schedule a pickup for today please call our office at:<br/> 928-639-3533<br/>
		
		<label>What are the receiving hours?</label><input type="text" name="ship_time" id="ship_Time">
		</p>
		</fieldset>
		
		<fieldset>
			<p>
            <label>Where will we deliver?</label>
            <select name="destination_id">
            <?php foreach ($s_addresses->result() as $row): ?>
            <option value="<?=$row->id?>" > <?=$row->company?></option>
            <?php endforeach; ?>
			</select>
        </p>
		<p>Don't see the address your looking for? <a href="/customers/shipping_info">Click here to add a new address.</a></p>
			<legend>Delivery Date and Time</legend>
			<p><label>What day do we deliver?</label>
		<input type="text" id="two" class="datepicker" name="delivery_date" /><span class="required">* Required</span>
		<br/>
		<label>What are the delivery hours?</label>
		<input type="text" name="delivery_time" id="delivery_time">
		</p>
        <p>
            <label>
                Special Instructions
            </label>
            <br/>
            <textarea name="comments" rows=5 cols=25>
            </textarea>
        </p>
					
                    <br/>
		</fieldset>
		<p><input type="submit" value="Submit"></p>
	
	<?php echo validation_errors('<p class="error">'); ?>
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