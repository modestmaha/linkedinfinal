
<head>
<base href="<?php echo base_url(); ?>" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title><?php echo $heading; ?></title>
<?php echo link_css($css_url); ?>
<link rel="shortcut icon" href="<?php echo base_url();?>/linkedIn/inmages" />
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
							<a id="advanced-search" class="advanced-search" href="<?php echo base_url();?>index.php/linkedin/search">Advanced </a>
						</div>
					</div>
				</form>
			</div>
			<div class="header-section last-child">
				<ul id="control_gen_5" class="nav utilities" role="navigation">
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
				<div class="mod srp-title">
					<h2>SEARCH</h2>
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
							<form id="peopleSearchForm" name="peopleSearchForm" method="post" action="<?php echo base_url();?>index.php/linkedin/search/search_users">
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
											<select id="advs-locationType" name="locationType">
												<option value="Y">Anywhere</option>
												<option selected="" value="I">Located in or near:</option>
											</select>
										</li>
										<li class="countryCode">
											<label for="advs-countryCode">Country</label>
											<select id="advs-countryCode" name="countryCode" class="">
												<option value="pk">Pakistan</option>
											</select>
										</li>										
									</ol>
								</fieldset>
								<div class="form-controls">
									<input class="submit-advs" type="submit" name="submit" value="Search" />
									<input class="reset-advs text-button" type="reset" value="Reset" />
								</div>
							</form>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>
	
</body>

</html>
