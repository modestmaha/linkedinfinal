<div id="main">
		
				<div id="mainWrapper">
					
					<div id="page_title">
						<h1 id="heading_msg"> Sign in to LinkedIn </h1>
					</div>
					<div class="error" id="main-error">
						<?php echo $main_error_msg ?>
					</div>
					<div id="emailId_password_wrapper">
					
						<div id="signIn_body">
						
							<form action="<?php echo base_url();?>index.php/LinkedIn/login/validate" method="post">
								<table >
								<div id="address_body">
									<tr >
										<td>
											<label id="emailDesign" for="login_Id">Email address:</label>
										</td>
										<td>
											<span class="error" id="emailAddress-error"><?php echo $email_error_msg ?></span>
											<input type="text" name="login_textbox" value="<?php echo $email ?>"id="login_Id" >
										</td>
									</tr>
									<tr>
										<td>
											<label id="passDesign" for="login_Password">Password:</label>
										</td>
										<td>
											<span class="error" id="password-error"><?php echo $password_error_msg ?></span>
											<input type="password" name="password_textbox" value="" id="login_Password" >
										</td>
										<td>
											<a id="Forgot_password" href="<?php echo base_url();?>index.php/linkedin/reset"> Forgot password? </a>
										</td>
									</tr>	
								</div>
								</table>
								<div id="button">
									<a id="check" href="">
										<input type="submit" name="signin" value="Sign In" id="main_button" />
										</a>
										<span>or<span>
										<a id="JoinLinkedIn" href="Default"> Join LinkedIn </a>	
								
								</div>
								
							</form>
							
						</div>
					
					</div>
				
				
				</div>
	
			</div>
			