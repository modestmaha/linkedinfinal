<div id="main">
		
				<div id="mainWrapper">
					<div class="error" id="main-error">
						<?php echo $main_error_msg ?>
					</div>
					
						<h2>
								Changing your password is simple
						</h2>
					
					
					<div id="emailId_wrapper">
					<div="try">
						<form action="<?php echo base_url();?>index.php/linkedin/reset/pass" method="post">
							<p>
								<label id="enter_email" for="address_box">Please enter your email address to get instructions.</label>
							</p>
							<div><span class="error" id="emailAddress-error"><?php echo $email_error_msg ?></span>
							</div>
							<p>			
								<input type="text" name="login_textbox" value="<?php echo $email ?>" id="address_box" >
							</p>
							</div>
							<p>	
								
									<a><input type="submit" name="Continue" value="Continue" id="main_button" /></a>
							
						</p>
					</form>
					</div>
				
				
				</div>