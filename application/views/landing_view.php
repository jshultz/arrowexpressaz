<div id="content" class="span-24 last">
    <div id="" class="span-16 _2column">
        <p>
            <h1>Contact Us</h1>
        </p>
        <p>Arrow Express is Arizona&rsquo;s  Best Choice for delivery service.  Our commitment to our customers  shows in the meticulous way we handle your documents or freight.  We  will make the extra phone calls to arrange a pick up or delivery and  to keep you informed of when your shipment will arrive.        </p>
		<p>Just give us a call and we  will pick up and delivery your documents or freight anywhere in Metro  Phoenix and most of Northern Arizona.  Or open an account and use our  booking system on this website.        </p>
		<p>If speed is the utmost  consideration, we can handle your delivery as a &lsquo;Hot Shot.&rsquo;  Your  package gets the very fastest delivery because we go directly between  the shipper and consignee with no stops in between.        </p>
	  <p>For a more economical  option, we will work your delivery in with our other customers.  We  offer same-day service to much of the state and the rest is delivered  the next business day.</p>
      <div id="leftcolumn" class="prepend-1 span-8"><p><strong>Between Metro Phoenix and:</strong></p>
          <p>Anthem<br />
            New River<br />
            Cordes Lake<br />
            Camp Verde<br />
            Cottonwood<br />
            Cornville<br />
            Clarkdale<br />
            Jerome<br />
            Sedona
          </p>
        </div>
      <div id="rightcolumn" class="span-6"><p><strong>Between Cottonwood and:</strong></p>
        <p>Flagstaff<br />
          Bellemont<br />
          Jerome<br />
          Chino Valley<br />
          Dewey Humboldt<br />
          Mayer<br />
          Metro Phoenix<br />
          Paulden<br />
          Prescott<br />
          Prescott Valley
        </p>
      </div>
<div class="span-16">
<h3 align="center">Next Day  Service</h3>
<p align="center">(Pick up one  day and deliver the next business day)</p>
<p align="center"><br />
  Between Metro  Phoenix and:<br />
  Flagstaff<br />
  Chino Valley<br />
  Dewey-Humboldt<br />
  Prescott</p>
<p>What's Next? <a href="/site/quote">Request A Quote</a> or <a href="/customers">Creat and Account</a> and get started!</p>
</div>
        <?php echo form_open('email/send'); ?>
            <fieldset>
               
                    <legend>
                        Use This Simple Form
                    </legend>
                    <br/>
                    <?php
                    $name_data = array('name'=>'name', 'id'=>'name', 'value'=>set_value('name'));
                    $message_data = array('name'=>'comments', 'id'=>'comments', 'value'=>set_value('comments'), 'rows'=>'5', 'class'=>'span-7');
					$subject_data = array('BillingQuestion'=>'Billing Question','CustomerService'=>'Customer Service','FeatureRequest'=>'Feature Request','RateQuote'=>'Rate Quote');
                    ?>
                    <p>
                        <label for="name">
                            Name: 
                        </label><br/>
                        <?php echo form_input($name_data); ?>
                    </p>
                    <p>
                        <label for="email">
                            Email Address: 
                        </label><br/>
                        <input type="text" name="email" id="email" value="<?php echo set_value('email');?>">
                    </p>
					<p>
                        <label for="phone">
                            Phone Number: 
                        </label><br/>
                        <input type="text" name="phone" id="phone" value="<?php echo set_value('phone');?>">
                    </p>
					<p>
                        <label for="subject">
                            Subject 
                        </label><br/>
                        <?php echo form_dropdown('subject', $subject_data, 'CustomerService');?>
                    </p>
                
                    <p><label>
                        Comments
                    </label><br/>
					<?php echo form_textarea($message_data); ?></p>
                    <br/>
                    <p>
                       <input type="submit" value="Submit">
                    </p>
                    <?php echo form_close(); ?>
               
            </fieldset>
            <?php echo validation_errors('<p class="error">'); ?>
            </div>
            <div id="" class="span-8 column last">
                <p>
                    <h1>Our Team</h1>
                </p>
				<p><b>Randy Clark</b><br/>
				Owner/General Manager</p>
				<p><b>Phone:</b> 928-639-3533</p>
				<p><b>Fax:</b> 928-649-7430</p>
				<p><a href="mailto:randyc@arrowexpressaz.com">Email Me</a></p>
				<br/>
            </div>
        </div>
