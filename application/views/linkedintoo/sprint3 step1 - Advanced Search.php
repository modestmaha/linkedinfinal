<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<base href="<?php echo base_url(); ?>" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title><?php echo $heading; ?></title>
<?php echo link_css($css_url); ?>
<?php echo link_css($css_url_1); ?>
<link rel="shortcut icon" href="images/favicon.ico" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">

   $(function(){ //<----shorter version of doc ready. this one can be used ->jQueyr(function($){ 
      $('.show_hide').click(function(e){ // <----you missed the '.' here in your selector.
          e.stopPropagation();
          $('.slidingDiv').fadeToggle();
      });
      $('.slidingDiv').click(function(e){
          e.stopPropagation();
      });

      $(document).click(function(){
          $('.slidingDiv').fadeOut();
      });
   });
</script>

</head>

<body id="pagekey-voltron_federated_search_internal_jsp" class="en member v2 voltron-page chrome-v5-retract-nav-enabled chrome-v5 chrome-v5-responsive background-v4 sticky-bg js ">
<div id="header" class="global-header responsive-header nav-v5-2-header responsive-1">
	<div id="top-header">
		<div class="wrapper">
			<div class="header-section first-child">
				<h2 class="logo-container">
					<a id="in-logo" class="logo" href="#"> LinkedIn </a>
				</h2>
				<form id="global-search" class="global-search voltron voltron-vertical-selector">
					<fieldset>
						<legend>Find People, Jobs, Companies, and More</legend>
						<div id="control_gen_2" class="search-scope global-nav-styled-dropdown">
							<label for="main-search-category">Search for: </label>
							<span class="label">
								<span class="styled-dropdown-select-all">All</span>
							</span>
							<select id="main-search-category" class="search-category" name="type">
								<option class="all" value="all" title="">All</option>
								<option class="people" value="people" title="">People</option>
								<option class="jobs" value="jobs" title="">Jobs</option>
								<option class="companies" value="companies" title="">Companies</option>
								<option class="groups" value="groups" title="">Groups</option>
								<option class="edu" value="edu" title="">Edu</option>
								<option class="inbox" value="inbox" title="">Inbox</option>
							</select>
							<ul class="search-selector">
								<li class="all option first selected highlighted"><div>All</div></li>
								<li class="people option"><div>People</div></li>
								<li class="jobs option"><div>Jobs</div></li>
								<li class="companies option"><div>Companies</div></li>
								<li class="groups option"><div>Groups</div></li>
								<li class="edu option"><div>Universities</div></li>
								<li class="inbox option"><div>Inbox</div></li>
							</ul>
						</div>
						<div id="search-box-container" class="search-box-container">
							<span id="search-autocomplete-container" class="/typeahead">
								<input id="main-search-box" class="search-term yui-ac-input" type="text" autocomplete="off" value="" name="keywords" placeholder="Search for people, jobs, companies, and more..." />
								<span id="search-typeahead-container"></span>
							</span>
						</div>
						<button class="search-button" type="submit" value="Search" name="search">
							<span>Search</span>
						</button>
					</fieldset>
					<div class="advanced-search-outer">
						<div class="advanced-search-inner">
							<a id="advanced-search" class="advanced-search" href="">Advanced </a>
						</div>
					</div>
				</form>
			</div>
			<div class="header-section last-child">
				<ul id="control_gen_5" class="nav utilities" role="navigation">
					<li class="nav-item activity-tab"><a class="activity-toggle inbox-alert" href="">Inbox</a></li>
					<li class="nav-item activity-tab"><a class="activity-toggle notifications-alert" href="">Notifications</a></li>
					<li class="nav-item activity-tab"><a class="activity-toggle add-connections-btn" href="">Add Connections</a></li>
					<li class="nav-item account-settings-tab"><a class="account-toggle" href=""><img src="images/profilepic.jpg" width="20" height="20" /></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div id="responsive-nav-scrollable" class="responsive-nav">
		<div class="wrapper">
			<ul id="control_gen_6" class="nav main-nav" role="navigation">
				<li class="nav-item"><a href="" class="nav-link">Home</a></li>
				<li class="nav-item"><a href="" class="nav-link">Profile</a>
					<ul id="profile-sub-nav" class="sub-nav">
						<li><a href="">Edit Profile</a></li>
						<li><a href="">Who viewed your Profile</a></li>
					</ul>
				</li>
				<li class="nav-item"><a href="" class="nav-link">Network</a>
					<ul id="profile-sub-nav" class="sub-nav">
						<li><a href="">Contacts</a></li>
						<li><a href="">Add Connections</a></li>
						<li><a href="">Find Alumni</a></li>
					</ul>
				</li>
				<li class="nav-item"><a href="" class="nav-link">Jobs</a></li>
				<li class="nav-item"><a href="" class="nav-link">Interests</a>
					<ul id="profile-sub-nav" class="sub-nav">
						<li><a href="">Companies</a></li>
						<li><a href="">Groups</a></li>
						<li><a href="">Influencers</a></li>
						<li><a href="">Education</a></li>
					</ul>
				</li>
				<li class="nav-item"><a href="<?php echo base_url();?>index.php/linkedin/login/do_logout" class="nav-link">Logout</a></li>
			</ul>
		</div>
	</div>
</div>
<div id="body" class="globalnav-showStop">
	<div class="wrapper hp-nus-wrapper">
		<div id="srp_main_">
			<div id="srp_container">
				<div class="mod srp-title">
					<h2>SEARCH</h2>
				</div>
				<div id="search-nav" class="">
					<button type="button" class="search-nav-button">
						<span class="button-description">Search Navigation</span>
					</button>
					<ul>
						<li><button type="button" id="saved-searches-button">Saved Searches</button></li>
						<li><a href="">Saved Jobs</a></li>
						<li><a href="">Reference Search</a></li>
						<li><a href="">Profile Organizer</a></li>
					</ul>
				</div>				
				<div id="facets-col" class="col">
					<a id="advs-link" class="advs-link mod show_hide" aria-controls="advanced-search-container" aria-role="button" style="cursor:pointer;">
						Advanced 
						<span class="advs-indicator available">Advanced Search is available for people</span> 
					</a>
					<div id="search-types">
						<div class="mod search-types hide-extra">
							<ul>
								<li class="selected"><strong>All</strong></li>
								<li><a href="">People</a></li>
								<li><a href="">Jobs</a></li>
								<li><a href="">Companies</a></li>
								<li><a href="">Groups</a></li>
								<li><a href="">Universities</a></li><li>
								<a href="">Inbox</a></li>
							</ul>
						</div>
					</div>
					<div id="advs" class="active slidingDiv">
						<h3>Advanced People Search</h3>
						<ul class="search-types nomargin">
							<li class="selected"><strong>People</strong></li>
							<li class="search-type jobs"><a href="#">Jobs</a></li>
						</ul>
						<div class="advs-controls">
							<input class="text-button reset-advs" type="reset" value="Reset" />
							<button class="text-button close-advs show_hide">Close</button>
						</div>
						<div id="advs-form-container">
							<form id="peopleSearchForm" method="post" action="<?php echo base_url();?>index.php/linkedin/search/search_users" name="peopleSearchForm">
								<fieldset class="text-input-fields">
									<ol>
										<li class="keywords">
											<label for="advs-keywords">Keywords</label>
											<input id="advs-keywords" type="text" name="keywords" />
										</li>
										<li class="firstName">
											<label for="advs-firstName">First Name</label>
											<input id="advs-firstName" type="text" name="contactFName" />
										</li>
										<li class="lastName">
											<label for="advs-lastName">Last Name</label>
											<input id="advs-lastName" type="text" name="contactLName" />
										</li>
										<li class="title">
											<label for="advs-title">Title</label>
											<input id="advs-title" type="text" name="job_title" />
										</li>
										<li class="company">
											<label for="advs-company">Company</label>
											<input id="advs-company" type="text" name="company" />
										</li>
										<li class="school">
											<label for="advs-school">School</label>
											<input id="advs-school" type="text" name="school" />
										</li>
										<li class="locationType">
											<label for="advs-locationType">Location</label>
											<select id="advs-locationType" name="location">
												<option value="Y">Anywhere</option>
												<option selected="" value="I">Located in or near:</option>
											</select>
										</li>
										<li class="countryCode">
											<label for="advs-countryCode">Country</label>
											<select id="advs-countryCode" name="country" class="">
												<option value="pk">Pakistan</option>
											</select>
										</li>										
									</ol>
								</fieldset>
								<!--
								<div class="facets-container">
									<ul class="facets standard-facets">
										<li class="facet mod">
											<fieldset>
												<legend class="facet-toggle">Relationship</legend>
												<button class="facet-toggle" type="button"></button>
												<div class="facet-values-container">
													<ol class="facet-values">
														<li class="facet-value">
															<input id="adv-F-N-ffs" type="checkbox" value="F" name="f_N" checked="true" />
															<div class="label-container">
																<label class="facet-label" title="1st Connections" for="adv-F-N-ffs">1st Connections</label>
															</div>
														</li>
														<li class="facet-value">
															<input id="adv-F-N-ffs" type="checkbox" value="F" name="f_N" checked="true" />
															<div class="label-container">
																<label class="facet-label" title="1st Connections" for="adv-F-N-ffs">2nd Connections</label>
															</div>
														</li>
														<li class="facet-value">
															<input id="adv-F-N-ffs" type="checkbox" value="F" name="f_N" checked="true" />
															<div class="label-container">
																<label class="facet-label" title="1st Connections" for="adv-F-N-ffs">Group Members</label>
															</div>
														</li>
														<li class="facet-value">
															<input id="adv-F-N-ffs" type="checkbox" value="F" name="f_N" checked="" />
															<div class="label-container">
																<label class="facet-label" title="1st Connections" for="adv-F-N-ffs">3rd + Everyone Else</label>
															</div>
														</li>
													</ol>
												</div>
											</fieldset>
										</li>
									</ul>
								</div> -->
								<div class="form-controls">
									<input class="submit-advs" type="submit" name="submit" value="Search" />
									<input class="reset-advs text-button" type="reset" value="Reset" />
								</div>
							</form>
						</div>
					</div>
				</div>
				<div id="results-col" class="col">
					<div id="results_count" class="mod results_count">
						<p><strong>2</strong> results</p>
						<div class="save-search-container">
							<span class="separator">
								<button id="save-search">Save search</button>
							</span>
						</div>
					</div>
					<div id="pivot-bar-container">
						<div id="pivot-bar" class="pivot-bar mod">
							<ul class="pivots">
								<li class="pivot">1st Connections <button class="remove-pivot" type="submit">Remove</button></li>
								<li class="pivot">2nd Connections <button class="remove-pivot" type="submit">Remove</button></li>
								<li class="pivot">Group Members <button class="remove-pivot" type="submit">Remove</button></li>
							</ul>
						</div>
					</div>
					<div id="results-container">
						<ol id="results" class="search-results">
							<?php 
							if($result_contacts != NULL)
							{
								foreach ($result_contacts as $iter):?>
								<form id="messageContactForm" method="post" action="" name="messageContactForm">
									<li class="mod result people">
										<a href=""><img class="entity-img" width="60" height="60" src="images/ghost_person_60x60_v1.png" /></a>
										<div class="bd">
											<h3>
												<a class="title"><?php echo $iter->firstName; ?></a>
												<span class="badges"><span><abbr class="degree-icon " title=" is your connection">1<sup>st</sup></abbr></span></span>
											</h3>
											<p class="description">Assistant Professor at New University</p>
											<dl class="demographic">
												<dt>Location</dt>
												<dd>Pakistan</dd>
												<dt>Industry</dt>
												<dd class="separator">Education Management</dd>
											</dl>
											<div class="social-wrapper collapsed">
												<ul class="social-line">
													<li class="shared-conn"><a href="" class="shared-conn-expando"><strong>3</strong>shared connections</a></li>
													<li class="similar"><a href="">Similar</a></li>
													<li class="conn-count"><a href=""><strong>12</strong></a></li>
												</ul>
											</div>
											<div class="srp-actions blue-button">
												<!-- <div class="primary-action-button">
													<a href="" class="primary-action label">Message</a>
												</div> -->
												<button class="primary-action-button" type="submit" value="Message" name="message">
													<span>Message</span>
												</button>
												<div class="secondary-actions-trigger">
													<a class="trigger" role="button" href="">
														<span>Secondary Actions</span>
													</a>
													<ul class="menu">
														<li><a href="">View Connections</a></li>
														<li><a href="">Share</a></li>
														<li><a href="">Find References</a></li>
													</ul>
												</div>
											</div>
										</div>
									</li>
								</form>
							<?php endforeach; }?>
							<?php
							if($result_non_contacts != NULL)
							{
								foreach ($result_non_contacts as $iter):?>
								<form id="addConnectionForm" method="post" action="<?php echo base_url();?>index.php/linkedin/add_connection" name="addConnectionForm">
									<li class="mod result people">
										<a href=""><img class="entity-img" width="60" height="60" src="images/ghost_person_60x60_v1.png" /></a>
										<div class="bd">
											<h3>
												<a class="title"><?php echo $iter->firstName; ?> <?php echo $iter->lastName; ?></a>
												<input type="hidden" name="contact_fname" value="<?php echo $iter->firstName; ?>">
												<input type="hidden" name="contact_lname" value="<?php echo $iter->lastName; ?>">
												<span class="badges"><span><abbr class="degree-icon " title=" is your connection">1<sup>st</sup></abbr></span></span>
											</h3>
											<p class="description">Assistant Professor at New University</p>
											<dl class="demographic">
												<dt>Location</dt>
												<dd>Pakistan</dd>
												<dt>Industry</dt>
												<dd class="separator">Education Management</dd>
											</dl>
											<div class="social-wrapper collapsed">
												<ul class="social-line">
													<li class="shared-conn"><a href="" class="shared-conn-expando"><strong>3</strong>shared connections</a></li>
													<li class="similar"><a href="">Similar</a></li>
													<li class="conn-count"><a href=""><strong>12</strong></a></li>
												</ul>
											</div>
											
											<div class="srp-actions blue-button">
												<!-- <div class="primary-action-button">
													<a href="" class="primary-action label">Connect</a>
												</div> -->
												<input type="hidden" name="contact_id" value="<?php echo $iter->user_id;?>">
												<button class="primary-action-button" type="submit" value="Connect" name="connect">
													<span>Connect</span>
												</button>
												<div class="secondary-actions-trigger">
													<a class="trigger" role="button" href="">
														<span>Secondary Actions</span>
													</a>
													<ul class="menu">
														<li><a href="">View Connections</a></li>
														<li><a href="">Share</a></li>
														<li><a href="">Find References</a></li>
													</ul>
												</div>
											</div>	
										</div>
									</li>
								</form>
							<?php endforeach; }?>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	<div class="footer" style="border-top: 0 transparent solid;">
		<ul class="footer-links">
			<li class="bold"><a href="#"><strong>Help Center</strong></a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Press</a></li>
			<li><a href="#">Blog</a></li>
			<li><a href="#">Careers</a></li>
			<li><a href="#">Advertising</a></li>
			<li><a href="#">Talent Solutions</a></li>
			<li><a href="#">Tools</a></li>
			<li><a href="#">Mobile</a></li>
			<li><a href="#">Developers</a></li>
			<li><a href="#">Publishers</a></li>
			<li><a href="#">Language</a></li>
		</ul>
		<div class="clear"></div>
		<ul class="footer-links">
			<li><a href="#"><strong>Upgrade Your Account</strong></a></li>
		</ul>
		<div class="clear"></div>
		<ul class="footer-links">
			<li><img src="images/logo-footer.png" alt="Footer Logo" /></li>
			<li><a href="#">User Agreement </a></li>
			<li><a href="#">Privacy Policy </a></li>
			<li><a href="#">Community Guidelines </a></li>
			<li><a href="#">Cookie Policy </a></li>
			<li><a href="#">Copyright Policy </a></li>
		</ul>
	</div> <!-- END: FOOTER -->
</body>

</html>
