<html>
<head>


<title>Upload Profile Picture | LinkedIn</title>
 <base href="<?php echo base_url(); ?>" />
<link rel="shortcut icon" href="images/favicon.ico" />


 <link href="<?php echo base_url();?>assets/css/linkedin/uploadpic2.css" rel="stylesheet">
 <link href="<?php echo base_url();?>assets/css/linkedin/chunk.css" rel="stylesheet">
  <!--
 <link rel="stylesheet" type="text/css" href="poorapoora.css">

 <link rel="stylesheet" type="text/css" href="chunk.css"> -->
</head>

<body id="join">
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
			</ul>
		</div>
	</div>
</div>
 <!--  <div class="top-menu">
    <div class="fwrapper">
      <a class="logo-black">LinkedIn</a>
    </div>
  </div> -->
  <div class="fwrapper" id="ooperlao">
    <div id="body-area" class="lessmargin">
      <div class="main-body-white signup">
        <div class="progress-container">
          <h1 class="mainh1">Upload your profile picture</h1>
          <p class="progress">
           <!--  <span class="summary">Step <strong>3</strong> of <strong>8</strong></span> -->
            <span class="progress-meter" title="37.5% Complete">
            <span class="has-progress" style="width:37.5%"></span>
            </span>
          </p>      
        </div>
		
		
        <div id="content">
         
          <div class="register-container">
            <div class="import-abook-contacts">
              <div id="module-id2">
                <div class="header">
                  <h3></h3>
                </div>
                <div class="content">
                  <p class="introduction"> Upload your picture for your profile using the form below. </p>
                  <form id="address-book-import-form" class="standard-form sided noborder" method="POST" action="<?php echo base_url('index.php/linkedin/signup/uploaded_pic');?>" enctype="multipart/form-data">
                    <fieldset class="authenticate">
                      <ul>
                        <li class="email-address">
                          <label id="label-abook-imprt-email" for="email-nWMIForm">Your picture:</label>
                          <div class="fieldgroup">
                            <div class="form-row">
                              <span class="system-error">
                                <span id="email-nWMIForm-error" class="error"></span>
                              </span>
                              <input type="file" name="img" accept="img/*" />
                              <!--<input id="email-nWMIForm"  type="file"  name="image"  accept="image/*" />
                              --><span id="wmi_progress"></span>
                              <span id="zeppelin-loading" role="presentation"></span>
                            </div>
                          </div>
                        </li>
                      </ul>
                      
                      <p class="add-connections">
                        <span>
                          <input id="resolve-btn" class="btn-primary" type="submit" value="Upload" name="" style="width: auto;" />
                        </span>
                      </p>
                      <!-- <p class="note"> We will not store your password or email anyone without your permission. </p> -->
                    </fieldset>
                  </form>
                </div>            
              </div>
              <p class="skip">
                <a id="skipButton" href="<?php echo base_url('index.php/linkedin/login/go_to_profile');?>"> Skip this step>></a>
                

                
              </p>                
              
            </div>
          </div>
            <p>
              <button class="btn-icon facebook" onclick="
    window.open(
      'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href), 
      'facebook-share-dialog', 
      'width=626,height=436'); 
    return false;"><span>Share on Facebook</span></button>
              <a href="https://twitter.com/share" class="twitter-share-button" data-via="Asadkaramat">
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script><button class="btn-icon twitter"><span>Share on Twitter</span></button></a>
            </p>
        </div>
      </div>
    </div> <!-- END: BODY-AREA -->  
  </div> <!-- END: WRAPPER -->  
    
  <div class="footer-noborder">
    <div class="fwrapper">
    <div id="legal">
      <p id="copyright">LinkedIn Corporation &copy; 2013 | Commercial use of this site without express authorization is prohibited.</p>
      <!-- <p id="terms-of-use">Commercial use of this site without express authorization is prohibited.  </p> -->
    </div>
    </div>
  </div> <!-- END: FOOTER -->
</body>

</html>
