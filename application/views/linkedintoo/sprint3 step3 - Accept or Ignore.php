
<head>
<base href="<?php echo base_url(); ?>" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title><?php echo $heading; ?></title>
<?php echo link_css($css_url); ?>
<link rel="shortcut icon" href="<?php echo base_url();?>/linkedin/images" />
<?php echo link_js('jquery'); ?>
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
				<form id="global-search" class="global-search voltron voltron-vertical-selector" method="post" action="<?php echo base_url();?>/index.php/linkedin/search/basic_search">
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
							<a id="advanced-search" class="advanced-search" href="<?php echo base_url();?>index.php/linkedin/search">Advanced </a>
						</div>
					</div>
				</form>
			</div>
			<div class="header-section last-child">
				<ul id="control_gen_5" class="nav utilities" role="navigation">
					<li class="nav-item activity-tab"><a class="activity-toggle inbox-alert" href="">Inbox</a></li>
					<li class="nav-item activity-tab"><a class="activity-toggle notifications-alert" href="">Notifications</a></li>
					<li class="nav-item activity-tab"><a class="activity-toggle add-connections-btn" href="">Add Connections</a></li>
					<li class="nav-item account-settings-tab"><a class="account-toggle" href=""><img src="<?php echo base_url(); ?>uploads/<?php echo $this->session->userdata('profilePic').'.jpg' ?>" width="20" height="20" /></a></li>
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
						<li><a href="<?php echo base_url();?>index.php/linkedin/search/basic_search_connections">Contacts</a></li>
						<li><a href="<?php echo base_url();?>index.php/linkedin/add_connection/load_requests">Load Requests</a></li>
						<li><a href="<?php echo base_url();?>index.php/linkedin/search/find_alumni">Find Alumni</a></li>
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
				<ul id="control_gen_15">
				<?php if($results != NULL)
				{
				foreach($results as $iter):?>
							<li class="mod result people">
								<a href=""><img class="entity-img" width="60" height="60" src="<?php echo base_url(); ?>uploads/<?php echo $iter->profilePic.'.jpg' ?>" /></a>
								<div class="bd">
									<h3>
										<a class="title"><?php echo $iter->firstName.' '.$iter->lastName ?></a>
										<span class="badges"><span><abbr class="degree-icon " title="John Doe is your connection">1<sup>st</sup></abbr></span></span>
									</h3>
									<dl class="demographic">
										
									</dl>
									<div class="social-wrapper collapsed">
										
									</div>
									<div class="srp-actions blue-button">
										<form method="post" action="<?php echo base_url();?>/index.php/linkedin/add_connection/accept_request">
				
											<input type="hidden" name="contact_id" value="<?php echo $iter->user_id ?>" />
											<input class="submit-advs" type="submit" value="Connect" />
										</form>
										<form method="post" action="<?php echo base_url();?>/index.php/linkedin/add_connection/ignore_request">
											<input type="hidden" name="contact_id" value="<?php echo $iter->user_id ?>" />
											<input class="submit-advs" type="submit" value="Ignore" />
										</form>
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
							<?php endforeach; }?>
			</ul>							
			</div>
		</div>
	</div>
</div>
	
</body>

</html>
