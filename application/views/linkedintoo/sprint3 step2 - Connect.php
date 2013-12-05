<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<base href="<?php echo base_url(); ?>" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title><?php echo $heading; ?></title>
<?php echo link_css($css_url); ?>
<link rel="shortcut icon" href="images/favicon.ico" />

</head>

<body id="pagekey-iwe_reconnect" class="en member v2  chrome-v5 chrome-v5-responsive sticky-bg js ">
<div id="header" class="global-header responsive-header nav-v5-2-header responsive-1">
	<div id="top-header">
		<div class="wrapper">
			<div class="header-section first-child">
				<h2 class="logo-container">
					<a id="in-logo" class="logo" href="#"> LinkedIn </a>
				</h2>
				<form id="global-search" class="global-search voltron voltron-vertical-selector" method="post" action="<?php echo base_url();?>index.php/linkedin/search/basic_search">
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
					<li class="nav-item activity-tab"><a class="activity-toggle inbox-alert" href="<?php echo base_url();?>index.php/linkedin/add_connection/load_requests">Inbox</a></li>
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
	<div id="section-header">
		<ul id="nav-secondary">
			<li id="nav-invite-contacts"><a href=""><span>Add Connections</span></a></li>
			<li id="nav-colleagues"><a href=""><span>Colleagues</span></a></li>
			<li id="nav-classmates"><a href=""><span>Alumni</span></a></li>
			<li id="nav-pymk"><a href=""><span>People You May Know</span></a></li>
		</ul>
		<ul class="related-links">
			<li class="last">
				<a href="">View Sent Invitations</a>
			</li>
		</ul>
	</div>
	<div class="wrapper hp-nus-wrapper">
		<div id="main" class="iwe">
			<div class="contain">
				<form id="iwe-form" method="post" action="<?php echo base_url();?>index.php/linkedin/add_connection/send_connection_request">
					<div class="iwrite">
						<div class="iwrite-in">
							<h1>Invite <strong><?php echo $contact_fname?></strong> to connect on LinkedIn</h1>
							<div class="ipaper">
								<div class="ipaper-in">
									<div class="wrap">
										<span id="reason-iweReconnect-error" class="error"></span>
										<strong class="dark">How do you know <?php echo $contact_fname?>?</strong>
										<ul id="main-options">
											<li>
												<input id="selector-IC-reason-1" class="radio-btn" type="radio" value="IC" name="reason" />
												<label for="selector-IC-reason-1">Colleague</label>
											</li>
											<li>
												<input id="selector-IC-reason-2" class="radio-btn" type="radio" value="IC" name="reason" />
												<label for="selector-IC-reason-2">Classmate</label>
											</li>
											<li>
												<input id="selector-IC-reason-3" class="radio-btn" type="radio" value="IC" name="reason" />
												<label for="selector-IC-reason-3">We’ve done business together</label>
											</li>
											<li>
												<input id="selector-IC-reason-4" class="radio-btn" type="radio" value="IC" name="reason" />
												<label for="selector-IC-reason-4">Fried</label>
											</li>
											<li>
												<input id="selector-IC-reason-5" class="radio-btn" type="radio" value="IC" name="reason" />
												<label for="selector-IC-reason-5">Other</label>
											</li>
											<li>
												<input id="selector-IC-reason-6" class="radio-btn" type="radio" value="IC" name="reason" />
												<label for="selector-IC-reason-6">I dont know <?php echo $contact_fname?></label>
											</li>
										</ul>
										<strong class="dark">
											<label for="greeting-iweReconnect">Include a personal note:</label>
										</strong>
										<span class="light">(optional)</span>
										<br />
										<span id="greeting-iweReconnect-error" class="error"></span>
										<textarea id="greeting-iweReconnect" class="message" name="greeting" data-base-height="85">I'd like to add you to my professional network on LinkedIn. 
- <?php echo $firstName?> <?php echo $lastName?>
										</textarea>
									</div>
								</div>
							</div>
							<p class="btn">
								<span class="error">Important:</span>
								 Only invite people you know well and who know you. 
								 <a class="" title="New window will open" href="#">Find out why.</a>
							</p>
							<p class="btn">
								<input type="hidden" name="contact_id" value="<?php echo $contact_id;?>">
								<input type="hidden" name="contact_fname" value="<?php echo $contact_fname;?>">
								<input type="hidden" name="contact_lname" value="<?php echo $contact_lname;?>">
								<input class="btn-primary" type="submit" value="Send Invitation" name="iweReconnectSubmit" />
								or
								<a href="#">Cancel</a>
							</p>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
	<div class="footer">
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
