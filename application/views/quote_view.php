<div id="content" class="span-24 last">
    <div id="FirstColumn" class="span-16 _2column">
        <p>
            <h1>Request A Quote</h1>
        </p>
		<p>If you are wishing to request a next day pickup: please go here for faster service.</p>
		<p class="notice"><b>If you are wishing to request a SAME DAY pickup: please call our office at 928-639-3533. </b></p>
        <?php $attributes = array('class' => 'email', 'id' => 'requestQuote');
	        echo form_open('email/send_quote', $attributes); ?>
            <fieldset>
                
                    <legend>
                        Use this simple form to request a quote. 
                    </legend>
                    <br/>
                    
                    <p>
                        <label for="name">
                            Name: 
                        </label><br/>
                        <input type="text" name="name" id="name" value="<?php echo set_value('name');?>">
                        
						<span class="required">* Required</span>
                    </p>
					<p>
                        <label for="company">
                            Company: 
                        </label><br/>
                        <input type="text" name="company" id="company" value="<?php echo set_value('company');?>">
                        
                    </p>
                    <p>
                        <label for="email">
                            Email Address: 
                        </label><br/>
                        <input type="text" name="email" id="email" value="<?php echo set_value('email');?>">
						<span class="required">* Required</span>
                    </p>
					<p>
                        <label for="phone">
                            Phone Number: 
                        </label><br/>
                        <input type="text" name="phone" id="phone" value="<?php echo set_value('phone');?>">
						<span class="required">* Required</span>
                    </p>
					<p>
                        <label for="package">
                            Package Type: 
                        </label><br/>
                        <input type="text" name="package" id="package" value="<?php echo set_value('package');?>"><br/>
						<span class="required">* Required</span>
                    </p>
					<p>
                        <label for="size">
                            Approximate Weight and Dimensions: 
                        </label><br/>
                        <textarea name="size" rows=5 cols=25></textarea><span class="required">* Required</span>
                    </p>
					<p>
                        <label for="origin">
                            Pickup City: 
                        </label><br/>
                        <input type="text" name="origin" id="origin" value="<?php echo set_value('origin');?>">
                    </p>
					<p>
                        <label for="destination">
                            Destination City: 
                        </label><br/>
                        <input type="text" name="destination" id="destination" value="<?php echo set_value('destination');?>">
                    </p>

					
                    <p><label>
                        Special Instructions
                    </label><br/>
					<textarea name="comments" rows=5 cols=25></textarea><br/>
					
					
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
					 </fieldset>
                    <?php echo form_close(); ?>
                
           
			<p class="error">This is not a request for pickup form.</p>
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
