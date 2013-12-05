
<head>
<base href="<?php echo base_url(); ?>" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title><?php echo $heading; ?></title>
<?php echo link_css($css_url); ?>
<link rel="shortcut icon" href="<?php echo base_url();?>/linkedIn/images" />
<?php echo link_js('jquery'); ?>

</head>
<body id="pagekey-voltron_federated_search_internal_jsp" class="en member v2 voltron-page chrome-v5-retract-nav-enabled chrome-v5 chrome-v5-responsive background-v4 sticky-bg js ">
<div id="header" class="global-header responsive-header nav-v5-2-header responsive-1">
	<div id="top-header">
		<div class="wrapper">
			<div class="header-section first-child">
				<h2 class="logo-container">
					<a id="in-logo" class="logo" href="#"> LinkedIn </a>
				</h2>
				<form id="global-search" class="global-search voltron voltron-vertical-selector" action="<?php echo base_url();?>index.php/linkedin/search/basic_search">
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
							<a id="advanced-search" class="advanced-search" href="<?php echo base_url();?>index.php/linkedin/search/">Advanced </a>
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
<div id="alumni" class="active">
			<div id="container-ptc-header">
				<div class="cmpt-ptc-header">
					<div class="edu-header-wrapper">
						<div class="edu-header mini-header">
							<div class="sharing-module">
								<span class="share-label">Share: </span>
								<ul class="share-providers">
									<li><a class="share-icon linkedin" href="">Share on LinkedIn</a></li>
									<li><a class="share-icon twitter" href="">Share on Twitter</a></li>
									<li><a class="share-icon facebook" href="">Share on Facebook</a></li>
								</ul>
							</div>
							<div class="header-title">
								<h2 class="title">FAST-NUCES</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="container-ptc-control-bar">
				<div class="typeahead-results-container alumni-typeahead-results-container facet-typeahead-results-container yui-ac-container"> </div>
				<div class="cmpt-ptc-control-bar">
					<div class="date-wrapper attended">
						<div class="select-wrapper">
							<div class="action-menu styled-dropdown year">
								<span class="label" style="float:left">
									<span class="text"> Attended </span>
									<span class="drop-down-arrow"></span>
								</span>
								<select class="date-type">
									<option selected="" value="attended">Attended</option>
									<option value="graduated">Graduated</option>
								</select>
							</div>
						</div>
						<span class="date-dropdown attended">
							<select class="start-date date-input">
								<option selected="" value="2013">2013</option>
								<option value="2012">2012</option>
								<option value="2011">2011</option>
								<option value="2010">2010</option>
								<option value="2009">2009</option>
								<option value="2008">2008</option>
								<option value="2007">2007</option>
								<option value="2006">2006</option>
								<option value="2005">2005</option>									
							</select>
							<span class="date-separator">to</span>
							<select class="end-date date-input">
								<option value="2020">2020</option>
								<option value="2019">2019</option>
								<option value="2018">2018</option>
								<option selected="" value="2017">2017</option>
								<option value="2016">2016</option>
								<option value="2015">2015</option>
								<option value="2014">2014</option>
								<option value="2013">2013</option>
								<option value="2012">2012</option>
								<option value="2011">2011</option>
								<option value="2010">2010</option>
							</select>
						</span>
						<span class="no-date-wrapper">
							<input id="show-with-no-date" type="checkbox" name="show-with-no-date" />
							<label for="show-with-no-date">Include people with no dates</label>
						</span>
					</div>
					<div class="more-schools-wrapper">
						<div class="more-schools">
							<a class="btn-quaternary" data-li-action="show-more-schools" href="#"> 
								Change school
								<span class="drop-down-arrow"></span>
							</a>
						</div>
					</div>					
				</div>
			</div>
			<div id="container-ptc-facet-bar">
				<div class="cmpt-ptc-facet-bar cf">
					<div class="container-cmpt-bucket-bar cf"></div>
					<div class="top-shadow"></div>
					<div class="carousel carousel-first">
						<button class="carousel-button carousel-previous" title="View previous interactive graphs">
							<span class="alumni-icon carousel-previous"></span>
						</button>
						<div class="carousel-viewport">
							<ul class="facets" style="left: 0px;">
								<li class="cmpt-ptc-facet facet has-typeahead first">
									<h2>Where they live</h2>
									<ul>
										<li class="bucket pinned active not-selected" title="Pakistan">
											<a class="facet-item">
												<span class="count">10</span>
												<label>Pakistan</label>
											</a>
											<div class="bar-graph" style="width: 50%;"></div>
											<div class="bar-bg"></div>
										</li>
										<li class="bucket pinned active not-selected" title="Pakistan">
											<a class="facet-item">
												<span class="count">5</span>
												<label>UAE</label>
											</a>
											<div class="bar-graph" style="width: 25%;"></div>
											<div class="bar-bg"></div>
										</li>
										<li class="bucket pinned active not-selected" title="Pakistan">
											<a class="facet-item">
												<span class="count">5</span>
												<label>USA</label>
											</a>
											<div class="bar-graph" style="width: 25%;"></div>
											<div class="bar-bg"></div>
										</li>
									</ul>
									<span class="collapse-facet-wrapper">
										<button class="search-facet" type="button"></button>
									</span>
								</li>
								<li class="cmpt-ptc-facet facet has-typeahead first">
									<h2>Where they live</h2>
									<ul>
										<li class="bucket pinned active not-selected" title="Pakistan">
											<a class="facet-item">
												<span class="count">10</span>
												<label>Pakistan</label>
											</a>
											<div class="bar-graph" style="width: 50%;"></div>
											<div class="bar-bg"></div>
										</li>
										<li class="bucket pinned active not-selected" title="Pakistan">
											<a class="facet-item">
												<span class="count">5</span>
												<label>UAE</label>
											</a>
											<div class="bar-graph" style="width: 25%;"></div>
											<div class="bar-bg"></div>
										</li>
										<li class="bucket pinned active not-selected" title="Pakistan">
											<a class="facet-item">
												<span class="count">5</span>
												<label>USA</label>
											</a>
											<div class="bar-graph" style="width: 25%;"></div>
											<div class="bar-bg"></div>
										</li>
									</ul>
									<span class="collapse-facet-wrapper">
										<button class="search-facet" type="button"></button>
									</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div id="container-ptc-guide-module"></div>
			<div id="container-ptc-status-bar">
				<div class="cmpt-ptc-status-bar cf">
					<div class="call-out-arrow"></div>
					<div class="results-wrapper">
						<span class="num-results-label">520 students &amp; alumni found</span>
						<span class="hide-connections-wrapper">
							<input id="hide-my-connections" type="checkbox" name="hide-my-connections" />
							<label for="hide-my-connections">Hide my connections</label>
						</span>
					</div>
					<div class="search-wrapper">
						<form id="school-form" name="school-form" action="#">
							<div class="search-box-wrapper">
								<input id="pt-keywords" type="text" name="pt-keywords" placeholder="Search profiles" />
								<button class="search-box-submit active" type="submit">Search profiles</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div id="container-ptc-people-results">
				<div class="cmpt-ptc-people-results cf">
					<div class="content active">
						<ul class="people-cards">
							<li class="person">
								<a class="profile-link">
									<img alt="John Doe" src="images/icon_no_photo_80x80.png" />
								</a>
								<div class="details">
									<h3 class="full-name">
										<div class="distance">
											<a class="profile-link" href="#">John Doe</a>
										</div>
									</h3>
									<p class="headline">Senior Software Engineer at TPS Online Pakistan</p>
									<ul class="specifics">
										<li class="first">Pakistan</li>
									</ul>
								</div>
								<div class="ft">
									<span class="connect-logo"></span>
									<a class="left-action connect" href="#">Connect</a>
									<span class="divider"> </span>
								</div>
							</li>
							<li class="person">
								<a class="profile-link">
									<img alt="John Doe" src="images/icon_no_photo_80x80.png" />
								</a>
								<div class="details">
									<h3 class="full-name">
										<div class="distance">
											<a class="profile-link" href="#">John Doe</a>
										</div>
									</h3>
									<p class="headline">Senior Software Engineer at TPS Online Pakistan</p>
									<ul class="specifics">
										<li class="first">Pakistan</li>
									</ul>
								</div>
								<div class="ft">
									<span class="connect-logo"></span>
									<a class="left-action connect" href="#">Connect</a>
									<span class="divider"> </span>
								</div>
							</li>
							<li class="person">
								<a class="profile-link">
									<img alt="John Doe" src="images/icon_no_photo_80x80.png" />
								</a>
								<div class="details">
									<h3 class="full-name">
										<div class="distance">
											<a class="profile-link" href="#">John Doe</a>
										</div>
									</h3>
									<p class="headline">Senior Software Engineer at TPS Online Pakistan</p>
									<ul class="specifics">
										<li class="first">Pakistan</li>
									</ul>
								</div>
								<div class="ft">
									<span class="connect-logo"></span>
									<a class="left-action connect" href="#">Connect</a>
									<span class="divider"> </span>
								</div>
							</li>
							<li class="person">
								<a class="profile-link">
									<img alt="John Doe" src="images/icon_no_photo_80x80.png" />
								</a>
								<div class="details">
									<h3 class="full-name">
										<div class="distance">
											<a class="profile-link" href="#">John Doe</a>
										</div>
									</h3>
									<p class="headline">Senior Software Engineer at TPS Online Pakistan</p>
									<ul class="specifics">
										<li class="first">Pakistan</li>
									</ul>
								</div>
								<div class="ft">
									<span class="connect-logo"></span>
									<a class="left-action connect" href="#">Connect</a>
									<span class="divider"> </span>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div id="find-group">
				<span class="alumni-logo"></span>
				<span class="get-reconnected">JOIN YOUR ALUMNI GROUP</span>
				<span class="content">Share ideas, find opportunities and get back in touch.</span>
				<a class="btn-ternary" id="find-group-link" href="">Find Group »</a>	
			</div>
		</div>
			</div>
		</div>
	</div>
</div>
	
</body>

</html>
