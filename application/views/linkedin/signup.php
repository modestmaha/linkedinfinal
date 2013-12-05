<div id="main">
				<div id="mainWrapper">
					<div class="error" id="main-error">
						<?php echo $main_error_msg ?>
					</div>
					<!-- div generation using jquery/ajax -->
					<div id="contentsWrapper">
						<div id="parallelContents">
							<div id="content">
								<h1>Over 225 million professionals use LinkedIn to exchange information, ideas and opportunities</h1>
								<ul>
									<li id="stayInformed">Stay informed about your contacts and industry</li>
									<li id="findPeople">Find the people & knowledge you need to achieve your goals</li>
									<li id="proIdentity">Control your professional identity online</li>
								
								</ul>
							</div>
							<div id="joinToday">
								<div id="joinHeader">
									<h2>Join LinkedIn Today</h2>
								</div>
								<div id="joinContent">
									<form action="<?php echo base_url();?>index.php/linkedin/signup/validate" method="post" name="registrationForm" novalidate="novalidate" id="joinTodayForm">
										<fieldset>
											<legend>Join Today</legend>
											<ul>
												<li id="fnjoinTodayli">
													<label for="firstName">First Name:</label>
													<div class="textTuple">
														<span class="error" id="firstName-error"><?php echo $firstname_error_msg ?></span>
														<input id="firstname" name="firstName" type="text" maxlength="15" value="<?php echo $firstname ?>">
													</div>
												</li>
												<li id="lnjoinTodayli">
													<label for="lastName">Last Name:</label>
													<div class="textTuple">
														<span class="error"id="lastName-error"><?php echo $lastname_error_msg ?></span>
														<input id="lastname" name="lastName" type="text" maxlength="30" value="<?php echo $lastname ?>">
													</div>
												</li>
												<li id="emjoinTodayli">
													<label for="emailAddress">Email:</label>
													<div class="textTuple">
														<span class="error" id="emailAddress-error"><?php echo $email_error_msg ?></span>
														<input id="emailaddress" name="emailAddress" type="text" maxlength="30" value="<?php echo $email ?>">
													</div>
												</li>
												<li id="psjoinTodayli">
													<label for="password">Password:</label>
													<div class="textTuple">
														<span class="error" id="password-error"><?php echo $password_error_msg ?></span>
														<input id="pass" name="password" type="password" maxlength="15" value="">
													</div>
												</li>
											</ul>
											<p class="passLength">6 or more characters</p>
											<p class="action">
												<input id="submitButton" type="submit" value="Join Now" >
												<a href="">*</a>
											</p>
											<p class="alreadyJoined">Already on LinkedIn?
											<a href="<?php echo base_url();?>index.php/linkedin/login">Sign in</a>
											</p>
										</fieldset>
									</form>
								</div>
							</div>
						</div>	
						<div id="searchByName">
							<div id="searchField">
								<form class="searchForm" method="post" action="Default.html">
									<h3 class="searchHeading">Search for someone by name:</h3>
									<ul class="searchList">
										<li
											<input class="searchFName" type="text" placeholder="First Name" maxlength="15">
										</li>
										<li>
											<input class="searchLName" type="text" placeholder="Last Name" maxlength="15">
										</li>
										<li>
											<input id="goButton" type="submit" tname="search" value="Go">
										</li>
									</ul>
								</form>
							</div>
							<div id="directory">
								<h3 id="directoryHeading">LinkedIn member directory:</h3>
								<ul id="alphabetList">
									<li>
										<a href="Default.html">a</a>
									</li>
									<li>
										<a href="Default.html">b</a>
									</li>
									<li>
										<a href="Default.html">c</a>
									</li>
									<li>
										<a href="Default.html">d</a>
									</li>
									<li>
										<a href="Default.html">e</a>
									</li>
									<li>
										<a href="Default.html">f</a>
									</li>
									<li>
										<a href="Default.html">g</a>
									</li>
									<li>
										<a href="Default.html">h</a>
									</li>
									<li>
										<a href="Default.html">i</a>
									</li>
									<li>
										<a href="Default.html">j</a>
									</li>
									<li>
										<a href="Default.html">k</a>
									</li>
									<li>
										<a href="Default.html">l</a>
									</li>
									<li>
										<a href="Default.html">m</a>
									</li>
									<li>
										<a href="Default.html">n</a>
									</li>
									<li>
										<a href="Default.html">o</a>
									</li>
									<li>
										<a href="Default.html">p</a>
									</li>
									<li>
										<a href="Default.html">q</a>
									</li>
									<li>
										<a href="Default.html">r</a>
									</li>
									<li>
										<a href="Default.html">s</a>
									</li>
									<li>
										<a href="Default.html">t</a>
									</li>
									<li>
										<a href="Default.html">u</a>
									</li>
									<li>
										<a href="Default.html">v</a>
									</li>
									<li>
										<a href="Default.html">w</a>
									</li>
									<li>
										<a href="Default.html">x</a>
									</li>
									<li>
										<a href="Default.html">y</a>
									</li>
									<li>
										<a href="Default.html">z</a>
									</li>
									<li>
										<a id="" href="Default.html">more</a>
										<div>
										</div>
									</li>
								</ul>
							</div>
							<div id="searchByCountry">
									<p>Browse members <a href="">by country</a></p>
								</div>
						</div>
					</div>
				
				</div>
	
			</div>