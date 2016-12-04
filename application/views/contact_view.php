<div id="content" class="span-24 last">
    <div id="" class="span-16 _2column">
        <p>
            <h1>Contact Us</h1>
            <p>Arrow Express is Arizona’s Best Choice for delivery service. Our commitment to our customers shows in the meticulous way we handle your documents or freight. We will make the extra phone calls to arrange a pick up or delivery and to keep you informed of when your shipment will arrive.</p>
            <p>Just give us a call and we will pick up and delivery your documents or freight anywhere in Metro Phoenix and most of Northern Arizona. Or <a href="/auth/login">open an account</a> and use our booking system on this website.</p>
</p>
        <?php
        $attributes = array('class' => 'email', 'id' => 'emailContact');
        echo form_open('email/send', $attributes); ?>
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
                    <br/>
                    <p>
                        <label for="human">
                            Are You Human (YES)?:
                        </label><br/>
                        <input type="text" name="human" id="human" value="<?php echo set_value('human');?>">
                    </p>
                    <p>
                        <label for="human_again">
                            Please type the same word again:
                        </label><br/>
                        <input type="text" name="human_again" id="human_again" value="<?php echo set_value('human_again');?>">
                    </p>
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
            </div>
        </div>
