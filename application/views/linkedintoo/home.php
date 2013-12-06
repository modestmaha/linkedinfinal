<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<base href="<?php echo base_url(); ?>" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title><?php echo $heading; ?></title>
<?php echo link_css($css_url); ?>
<link rel="shortcut icon" href="images/favicon.ico" />

</head>

<body id="pagekey-member-home" class="en member v2 no-footer chrome-v5 chrome-v5-responsive sticky-bg js ">
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
					<li class="nav-item activity-tab"><a class="activity-toggle inbox-alert" href="">Inbox</a></li>
					<li class="nav-item activity-tab"><a class="activity-toggle notifications-alert" href="">Notifications</a></li>
					<li class="nav-item activity-tab"><a class="activity-toggle add-connections-btn" href="">Add Connections</a></li>
					<li class="nav-item account-settings-tab"><a class="account-toggle" href=""><img src="<?php echo base_url(); ?>uploads/<?php echo $this->session->userdata('profilepic').'.jpg' ?>" width="20" height="20" /></a></li>
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
						<li><a href="<?php echo base_url();?>index.php/linkedin/signup/upload_new_picture">Upload Profile Picture</a></li>
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

<div id="body" class="">
<div class="wrapper hp-nus-wrapper">
<div id="main" class="home-member-new grid-f">
<div id="content">
<div id="feed-nhome" class="section feed feed-nhome feed-redesign">

    
      <div class="filter-cont rt-filter-cont">
    
    
 <div id="slick-sharing-cont" class="post-home is-view share-box rt-filter-cont">
 <a href="/profile/edit?goback=%2Enmp_*1_*1_*1_*1_*1_*1_*1_*1_*1_*1&amp;trk=spm_pic" title="View your profile">
 <img src="<?php echo base_url(); ?>uploads/<?php echo $this->session->userdata('profilepic').'.jpg' ?>" class="member-photo animated-member-photo" width="60" height="60" alt="aw haw">
 </a>
 <div id="post-module" class="post-module">
 <div class="post-module-in">
 

 
 <form target="slideShareIframeTransport" id="slideshare-upload-form" enctype="multipart/form-data" action="//slideshare.linkedin.com/upload?X-Progress-ID=ss307979351" method="post" class="is-ready">
 <label for="slideshare-file-input" class="a11y-hidden-label">Attach a File</label>
 <input name="file_name" type="file" id="slideshare-file-input" class="file-input">
 <iframe name="slideShareIframeTransport" class="slideshare-upload-iframe" height="0" width="0" src="about:blank" style="display: none;"></iframe></form>
 

 <script id="controlinit-http-12209-289055-15" type="text/javascript+initialized" class="li-control">
 
 /* extlib: _slideshareuploader */
 
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
    
LI.i18n.register( 'slideshare-uploader-presentation', 'Presentation' );
LI.i18n.register( 'slideshare-uploader-document', 'Document' );
LI.i18n.register( 'slideshare-uploader-image', 'Image' );
LI.i18n.register( 'slideshare-uploader-percentage', 'Uploading... {0}%' );
LI.i18n.register( 'slideshare-uploader-beforeunload', 'Your share is still in progress. Are you sure you want to leave without finishing?' );
LI.i18n.register( 'slideshare-uploader-promo-title', 'Add a little something to your update!' );
LI.i18n.register( 'slideshare-uploader-promo-cta', 'Add a file' );
 
 
 LI.Controls.addControl('control-http-12209-289055-15', 'SlideshareUploader', {
 progressPrefix: 'ss307979351',
 domain: 'linkedin.com',
 usePostMessage: true,
 paths: {
 convert: '\/nhome\/slideshare\/convert-upload?fileKey=*&shareOnSS=false',
 status: '\/nhome\/slideshare\/get-convert-status?slideshowId=*',
 slideshow: '\/nhome\/slideshare\/get-slideshow?slideshowId=*&truncationLength=250',
 monitor: '\/nhome\/slideshare\/set-stats?trk=ss-setstat'
 },
 transportName: 'slideShareIframeTransport',
 fileInputId: 'slideshare-file-input',
 enableUnload: true,
 enableImageUpload: true,
 enableTranscriptAsDescription: true,
 enableHealthCheck: false,
 convertTimeThresholds: {
 UploadConvertThresholdOne : 'Seconds_60',
 UploadConvertThresholdTwo : 'Seconds_120'
 },
 promoStatus : 3
 });
 </script>
 


 <script id="controlinit-http-12209-289055-16" type="text/javascript+initialized" class="li-control">
 
 /* extlib: _ballooncallout */
 
 
 
 LI.Controls.addControl('control-http-12209-289055-16', 'LI.BalloonCallout', {
 events: [ 'mouseover', 'mouseout' ],
 id: 'slideshare-upload-callout',
 orientation: 'bottom',
 type: 'tooltip-callout',
 width: 'auto'
 });
 </script>
 
 

 <div class="callout-container" id="slideshare-upload-callout">
 <div class="callout-content"><div class="callout-body">Attach a File</div></div>
 </div>

 <dl id="file-supported-dialog">
 <dt>Presentations:</dt>
 <dd>pdf, ppt, pps, pptx, ppsx, pot, potx (Powerpoint), odp (OpenOffice)</dd>
 <dt>Documents:</dt>
 <dd>pdf, doc, docx, rtf (MSOffice), odt</dd>
 <dt>Images:</dt>
 <dd>png, gif, jpg, jpeg</dd>
 <dt>Maximum file size:</dt>
 <dd>100MB</dd>
 </dl>
 <a href="#" title="Close" id="file-supported-dialog-close">x</a>

 <div id="slideshare-hopscotch-placeholder">
 <span class="slideshare-hopscotch">
 <span class="section">
 <span class="doc-icon image"></span>
 <span>
 <span class="type">Image</span>
 Show some great moments from work
 </span>
 </span>
 <span class="section">
 <span class="doc-icon presentation"></span>
 <span>
 <span class="type">Presentation</span>
 Start conversations with inspiring slide decks
 </span>
 </span>
 <span class="section">
 <span class="doc-icon document"></span>
 <span>
 <span class="type">Document</span>
 Read something great? Spread the word!
 </span>
 </span>
 </span>
 </div>



 
 <form id="share-form" class="doc-sharing-form post" enctype="multipart/form-data" method="POST" action="<?php echo base_url()?>index.php/linkedin/newsfeed/share_post">
<div id="post-module-neu" class="enable-slideshare mentions-enabled transition active active_message">
<div id="share-entity-mentions-container" class="mentions-container">

<textarea id="postText-postModuleForm" class="post-message mentions-input" cols="40" rows="2" name="post_content" placeholder="Share an update..." data-base-height="15"></textarea>
<div  style=" background: url(<?php echo base_url();?>uploads/uploadpic.png); background-repeat:no-repeat;margin: -50px -200px 0 0; float: right;">
<input id="uploadImage" type="file" accept="image/jpeg" name="image"  style="filter: alpha(opacity=0);opacity: 0; cursor: pointer;" />
</div>
 </div>
<div class="post-actions">
<div class="post-actions-row">
<select name="privacy">
<option value="Connections" selected>Share with: Connections</option>
<option value="Public">Share with: Public</option>
<option >Share with: Public + Twitter</option>
</select>
<input id="share-submit" class="btn-primary" type="submit" value="Share" name="post">
<img id="uploadPreview" style="display:none;border: 0;
  border-radius: 3px;
  -webkit-box-shadow: 0px 2px 7px 0px rgba(0, 0, 0, .27);
  box-shadow: 0px 2px 7px 0px rgba(0, 0, 0, .27);
        width:300px;
        height:177px;
        "/>


</div>
</div>
</div>
</form> </div>
 <div class="clear"></div>
 </div>
 
 

    
      </div>
    

    <div class="header">
      
        <div id="rt-notify-container" style="display: none; top: -35px;">
          <div class="button-container">
            <button class="button" type="button"></button>
          </div>
        </div>
      

      
          
          
            <div id="filters-wrapper" class="feed-showing-B new-rt-ux">
  
  <ul id="nus-filters" class="feed-filters uscp-feed-filters">
    <li class="first">
      <div class="tab-droplist">
        
          <div class="droplist" id="control_gen_15">
                <ul class="menu" id="control_gen_14">
                
                <li id="feed-sort-relevance" class="selected">
                  <a href="/nhome/?trk=uscp_filter_by_relevance" data-li-nus-sort="Relevance">Top</a>
                </li>
                <li id="feed-sort-time" class="">
                  <a href="/nhome/?trk=uscp_filter_by_time" data-li-nus-sort="Time">Recent</a>
                </li>

                
                <li class="separator selected">
                    <a href="/updates?view=&amp;trk=NUS_all_activity" data-li-filter="ALL">All Updates</a>
                </li>

                

                <li class="">
                  <a href="/nhome/uscp-myupdates?networkScope=0&amp;trk=hp-nus-h-myupdate" data-li-filter="MYUPDATE">Your Updates</a>
                </li>

                
                  
                  <li class="separator"><a href="http://www.linkedin.com/nus-trk?trkact=customizeNusPrefs&amp;pk=member-home&amp;r=&amp;url=https%3A%2F%2Fwww%2Elinkedin%2Ecom%2Fsecure%2Fsettings%3FviewNUSPrefs%3D%26trk%3Duscp_customize&amp;urlhash=bQDQ">Customize »</a></li>
                    
                
              </ul>
            
 
        
          <script id="controlinit-http-12209-289060-26" type="text/javascript+initialized" class="li-control">
            
      
        
        
        /* extlib: _nussortmenu */
          
        
        
        
        
      
    
            LI.Controls.addControl('control-http-12209-289060-26', 'NusSortMenu', {
              defaultToRelevance: true,
              relevanceEnabled: true,
              isUSCPSortingEnabled: true,
              isUSCPTimeSortingEnabled: true
            });
          </script>
        

          </div>
 
          <script id="controlinit-http-12209-289060-27" type="text/javascript+initialized" class="li-control">
            
      
        
        
        /* extlib: _droplist */
          
        
        
        
        
      
    
            LI.Controls.addControl('control-http-12209-289060-27', 'DropList', {
          actionType: 'hover'
        });
          </script>
        
        
          
        
          
        
        
      
      
      
      
      
      
    
      </div>
    </li>
  </ul>







            </div>
          
      
      
      
      
      
      
   
          <script id="controlinit-http-12209-289060-28" type="text/javascript+initialized" class="li-control">
            
      
        
        
        /* extlib: _nusfiltermenu */
          
        
        
        
        
      
    
            LI.Controls.addControl('control-http-12209-289060-28', 'NusFilterMenu', { isNewRealTimeUX : true });
          </script>
        
        
          
        
          
        
        
      
      
      
      
      
      
    
        

    </div>

    
    

      
      
      
      
   
<div class="content">
  
    
        <script>
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
    
LI.i18n.register( 'typeahead2-no-matching-results', 'No matching results' );
LI.i18n.register( 'typeahead2-search-connections', 'Connections' );
LI.i18n.register( 'typeahead2-search-people', 'People' );
LI.i18n.register( 'typeahead2-search-companies', 'Companies' );
LI.i18n.register( 'typeahead2-search-groups', 'Groups' );
LI.i18n.register( 'typeahead2-search-features', 'Features' );
LI.i18n.register( 'typeahead2-search-skills', 'Skills' );
LI.i18n.register( 'typeahead2-search-skill', 'Skill' );
LI.i18n.register( 'typeahead2-search-suggestions', 'Suggestions' );
LI.i18n.register( 'typeahead2-search-schools', 'Universities' );
LI.i18n.register( 'typeahead2-search-degrees', 'Degrees' );
LI.i18n.register( 'typeahead2-search-fields-of-study', 'Fields of study' );
LI.i18n.register( 'typeahead2-cap-prospects', 'Profiles' );
LI.i18n.register( 'typeahead2-cap-jobs', 'Jobs' );
LI.i18n.register( 'typeahead2-cap-projects', 'Projects' );
LI.i18n.register( 'typeahead2-search-discussion-participants', 'Participants' );
LI.i18n.register( 'typeahead2-search-group-members', 'Group Members' );

LI.TypeaheadDataSourceUrls = {
  COMPANY: "/ta/company",
  INDUSTRY: "/ta/industry",
  REGION: "/ta/region",
  GEOGRAPHY: "/ta/geo",
  GROUP: "/ta/group",
  JOB_TITLE: "/ta/titleV2",
  JOB_FUNCTION: "/ta/jobfunc",
  SKILL: "/ta/skill",
  LANGUAGE: "/ta/language",
  SCHOOL: "/ta/school",
  DEGREE: "/ta/degree",
  FIELD_OF_STUDY: "/ta/fieldofstudy",
  MY_NETWORK: "/ta/mynetwork",
  MY_GROUP: "/typeahead/mygroup",
  FIRST_DEGREE_MY_NETWORK: "/ta/my1stnetwork",
  SITEFEATURE: "/ta/sitefeature",
  FEDERATOR: "/ta/federator",
  AUTOCOMPLETE: "/ta/autocomplete",
  CAP_PROSPECTS_PROJECTS_JOBS: "/cap/lookup/capTaAjax"
};


LI.Typeahead2Dependencies = {
  scripts: 
      
        
            
              
              
                ["http://s.c.lnkd.licdn.com/scds/concat/common/js?h=aujmp9r1kj9k9x4ezyk8ahfbk-62cjxbtqyt2o85tawwwz12otx-e65shetrzzzlxo3meq05fh683-e9hlju2yiqcg1o8gd3c94jdkf&fc=1"]
               
    
};


// for IE7/8 in remote nav - eval() does not properly reference LI in the window
// scope, when this code is executed while the "sandbox" is still open - which
// happens because remote-nav has to gather the li-control scripts.  While we have
// a black-list for not initializing the controls via the sandbox, we don't have
// a good way of preventing this code from being added to the eval() string and t
// then evaluated later.
//
// since this ONLY affects UniversalSearch and Typeahead2 - doing a 'reverse' reference
// here is ugly, but by far the simplest and least intrusive solution - otherwise
// remote-nav would have to introspect the script contents and the selectively
// purge that based on some regEx.  also gross.

if(LI.isSandboxed){
  window.LI.TypeaheadDataSourceUrls = LI.TypeaheadDataSourceUrls;
  window.LI.Typeahead2Dependencies  = LI.Typeahead2Dependencies;
}</script>
        <script>
 
LI.MentionsDependencies = {
  scripts: 
      
        
            
              
              
                ["http://s.c.lnkd.licdn.com/scds/concat/common/js?h=2eaf0kfvnzceohwl7oeq7lekf-5p8vy3ss27tn2r0dyjig5ae1f-7udf9q9ygt4x4cvy33a93gvfr&fc=1"]
              
      
};

LI.MentionsUnderscore = {
  scripts: 
      
                 ["http://s.c.lnkd.licdn.com/scds/concat/common/js?h=aq8gt7g4x1o11fxmypuv7vfkb&fc=1"]
              
     
};

LI.MentionsIsInfluencerUrl = '/nhome/influencer-entitlement';

LI.MentionsDataSourceDependencies = {
  scripts: 
      
                 ["http://s.c.lnkd.licdn.com/scds/concat/common/js?h=aujmp9r1kj9k9x4ezyk8ahfbk-62cjxbtqyt2o85tawwwz12otx&fc=1"]
              
     
};</script>

      
        
          
            
                



                    
                        


                      <div id="feed-wrapper">

                        <div id="feed-content">
                            
                           
                            <ul id="my-feed-post" class="chron katify">

     <?php if($posts != NULL)
			{ foreach ($posts as $iter): ?>
     <li class="feed-item linkedin-post">
					 <img class="feed-photo photo" width="60" height="60" alt="Maha Kamal" src="<?php echo base_url(); ?>uploads/<?php echo $this->session->userdata('profilepic').'.jpg' ?>">

					<div class="feed-body">
					  <div class="feed-content">
					<div class="annotated-body">
					        <span class="new-miniprofile-container /profile/mini-profile-with-connections?_ed=0_0yykgZAGbAs3vR3nTUGTusa4PbwAVxJahdpSDfajxri" data-li-url="/profile/mini-profile-with-connections?_ed=0_0yykgZAGbAs3vR3nTUGTusa4PbwAVxJahdpSDfajxri" data-li-tl="tl/shared/profile/mini_profile_shell" data-li-miniprofile-id="LI-3790177"><strong><a href="http://www.linkedin.com/nhome/nus-redirect?url=http%3A%2F%2Fwww%2Elinkedin%2Ecom%2Fprofile%2Fview%3Fid%3D271611222%26snapshotID%3D%26authType%3Dname%26authToken%3DFWOO%26ref%3DNUS%26goback%3D%252Enmp_*1_*1_*1_*1_*1_*1_*1_*1_*1_*1%26trk%3DNUS-body-member-name&amp;urlhash=MbeE&amp;trkToken=action%3DviewMember%26pageKey%3Dmember-home%26contextId%3DQJBXY9m0PBPQ%2FhPgwyoAAA%3D%3D%26isSponsored%3Dfalse%26distanceFromViewer%3D1%26aggregationType%3Dnone%26isPublic%3Dfalse%26verbType%3Dlinkedin%3Apost%26activityId%3Dactivity%3A5814066974858153984%26isDigested%3Dfalse%26isFolloweeOfPoster%3Dfalse%26actorType%3Dlinkedin%3Amember%26feedPosition%3D1%26actorId%3Dmember%3A271611222%26objectId%3D%26rowPosition%3D1%26objectType%3D"><?php echo $iter->firstname; ?> <?php echo $iter->lastname; ?></a></strong></span>
					</div>
					    <span class="share-body">
					            
					              <span class="commentary" id="control_gen_13">
					                    <?php echo $iter->post_content; ?>
					              </span>
					            
					      
					  </div> 
					  <?php if($iter->link != NULL){?>
						<span><a class="embedly-card" href="<?php echo $iter->link ?>"></a></span>
						<script>!function(a){var b="embedly-platform",c="script";if(!a.getElementById(b)){var d=a.createElement(c);d.id=b,d.src=("https:"===document.location.protocol?"https":"http")+"://cdn.embedly.com/widgets/platform.js";var e=document.getElementsByTagName(c)[0];e.parentNode.insertBefore(d,e)}}(document);</script>
						<?php }?>

					<div class="feed-item-meta">
					      

					    <span class="nus-timestamp">
					      11s ago
					    </span>

					</div> 


					  <div class="comments hide" id="discussion-U-5814066974858153984-M-271611222-5814066974858153984-form" data-li-member-name="Maha Kamal" data-li-config="{
					      &quot;topicType&quot;: &quot;U&quot;,
					      &quot;topicID&quot;: &quot;5814066974858153984&quot;,
					      &quot;objectUrnId&quot;: &quot;urn:li:activity:5814066974858153984&quot;,
					      &quot;attributedObjectUrnId&quot;: &quot;activity:5814066974858153984&quot;,
					      &quot;scopeType&quot;: &quot;M&quot;,
					      &quot;scopeID&quot;: &quot;271611222&quot;,
					      &quot;visibility&quot;: &quot;C&quot;,
					      &quot;profileLink&quot;: &quot;http:\/\/www.linkedin.com\/profile\/view?id=208100535&quot;,
					      &quot;memberPhoto&quot;: &quot;http:\/\/s.c.lnkd.licdn.com\/scds\/common\/u\/img\/themes\/katy\/ghosts\/profiles\/ghost_profile_30x30_v1.png&quot;,
					      &quot;discussionID&quot;: &quot;0&quot;,
					      &quot;activityID&quot; : &quot;5814066974858153984&quot;,
					      &quot;createViralActivity&quot;: &quot;true&quot;,
					      &quot;permLink&quot;: &quot;&quot;,
					      &quot;megaphoneFlag&quot;: &quot;0&quot;,
					      &quot;eduFlag&quot;: &quot;0&quot;,
					      &quot;actorType&quot;: &quot;&quot;,
					      &quot;actorId&quot;: &quot;0&quot;,
					      &quot;actionToken&quot;: &quot;&quot;,
					      &quot;objectUrn&quot;: &quot;urn:li:activity:5814066974858153984&quot;
					  }" style="display: block;">
					      <ul>

					    <li class="pre-rendered " data-li-likers-url="http://www.linkedin.com/lite/updates/lite-all-likers?objectUrn=urn%3Ali%3Aactivity%3A5814066974858153984&amp;trk=like-see-more">
					      <span class="thumb">&nbsp;</span>
					      <p>

					                      <a href="http://www.linkedin.com/nhome/nus-redirect?url=http%3A%2F%2Fwww%2Elinkedin%2Ecom%2Fprofile%2Fview%3Fid%3D208100535%26firstname%3DYou%26lastname%3D%26ref%3DNUS%26trk%3Dliker-prf&amp;urlhash=6BSr&amp;trkToken=action%3DviewLiker%26pageKey%3Dmember-home%26contextId%3DQJBXY9m0PBPQ%2FhPgwyoAAA%3D%3D%26isSponsored%3Dfalse%26distanceFromViewer%3D1%26aggregationType%3Dnone%26isPublic%3Dfalse%26verbType%3Dlinkedin%3Apost%26activityId%3Dactivity%3A5814066974858153984%26isDigested%3Dfalse%26isFolloweeOfPoster%3Dfalse%26actorType%3Dlinkedin%3Amember%26feedPosition%3D1%26actorId%3Dmember%3A271611222%26objectId%3D%26rowPosition%3D1%26objectType%3D">You</a>
					      </p>
					    </li>

					    <?php	if($iter->comments != NULL)
							{
								foreach ($iter->comments as $comm):?>
							
					      <li class="comment-item first">
					      	<div class="bubble"></div><img class="feed-photo photo" width="10" height="10" alt="Maha Kamal" src="<?php echo base_url(); ?>uploads/<?php echo $comm->profilepic.'.jpg' ?>"><p><a id="nus-comment-5814067230303862784" data-li-uscp-action="delete-my-comment" href="http://www.linkedin.com/updates?discuss=&amp;scope=271611222&amp;stype=M&amp;type=S&amp;topic=5814066974858153984&amp;a=RaFZ&amp;id=5814067230266122240&amp;cid=5814067230303862784&amp;deleteComment=" class="delete feed-delete-comment" data-li-topic-type="U" data-li-topic-id="5814066974858153984" data-li-scope-type="M" data-li-scope-id="271611222" data-li-discussion-id="5814067230266122240" data-li-comment-id="5814067230303862784" data-li-urn-id="urn:li:activity:5814066974858153984">Delete</a><a href="http://www.linkedin.com/profile/view?id=208100535" class="commenter"><?php echo $comm->firstname; ?> <?php echo $comm->lastname; ?></a> <q><?php echo $comm->comment_content; ?></q> <span class="nus-timestamp"><?php echo $comm->comment_time; ?></span> </p>
					      </li>
					      <?php endforeach; }?>
					    </ul>
				          <div class="form mini">
										<form method="post" action="<?php echo base_url();?>index.php/linkedin/newsfeed/add_comment">
											<div class="mentions-container">
											<input type="hidden" name="post_id" id="post_id" value="<?php echo $iter->post_id ?>" />
											<textarea class="texta comment-text mentions-input" placeholder="Add a comment…" style="height: 40px;" id="<?php echo $iter->post_id;?>" name="comment_content"></textarea>
											</div>
											<input class="btn-primary" type="submit" value="Comment" />
	
										</form>
									</div>


					</div>


					</li>

					<?php endforeach; }?>
 </ul>

 </div>
 </div>
 </div>
 </div>
 </li>






                            </ul>

                            


          <script id="controlinit-http-12209-289062-29" type="text/javascript+initialized" class="li-control">
            
        /* extlib: _nusinfinitepagination */
          
        
    
            LI.Controls.addControl('control-http-12209-289062-29', 'NusInfinitePagination', {
                              url: '\/nhome\/hits?goback=%2Enmp_*1_*1_*1_*1_*1_*1_*1_*1_*1_*1&amp;trk=NUS_infinite_scroll',
                              uscpUrl: '\/nhome\/uscp-home?goback=%2Enmp_*1_*1_*1_*1_*1_*1_*1_*1_*1_*1',
                              uscpBackfillUrl: '',
                              uscpItemsMyUpdatesUrl: '\/nhome\/uscp-myupdates?networkScope=0',
                              isUSCPSortingEnabled: true,
                              isUSCPTimeSortingEnabled: true,
                              enableInfiniteScroll: true,
                              originUUIDEnabled: true,
                              infiniteScrollStopThreshold: 'LI_-1'
                            });
          </script>
  

          <script id="controlinit-http-12209-289063-30" type="text/javascript+initialized" class="li-control">
            
        /* extlib: _nusrealtimeresults */
          
        
    
            LI.Controls.addControl('control-http-12209-289063-30', 'NusRealTimeResults', {
                              isNewRealTimeUX : true,
                              isFeedKatificationEnabled : true,
                              progressivePoll: false,
                              realTimeResultsOn: true,
                              url: '\/nhome\/poll?goback=%2Enmp_*1_*1_*1_*1_*1_*1_*1_*1_*1_*1',
                              fetchUrl: '\/nhome\/realtime?goback=%2Enmp_*1_*1_*1_*1_*1_*1_*1_*1_*1_*1',
                              uscpUrl: '\/nhome\/uscp-poll?goback=%2Enmp_*1_*1_*1_*1_*1_*1_*1_*1_*1_*1',
                              uscpFetchUrl: '\/nhome\/uscp-realtime?goback=%2Enmp_*1_*1_*1_*1_*1_*1_*1_*1_*1_*1',
                              realTimeMaxDisplay: 'control',
                              originUUIDEnabled: true
                            });
          </script>
        
    

                        </div>
                     <!--    <a id="feed-show-more" class="feed-show-more" href="#" role="button">
                          <span class="view-more">Show more updates</span>
                        </a> -->
                      </div>
                    
      
 



  


          <script id="controlinit-http-12209-289063-31" type="text/javascript+initialized" class="li-control">
            
        /* extlib: _followrecommendation */
          
        
    
            LI.Controls.addControl('control-http-12209-289063-31', 'FollowRecommendation', {});
          </script>
        
 
          <script id="controlinit-http-12209-289063-32" type="text/javascript+initialized" class="li-control">
            
        /* extlib: _channelfollow */
          
        
    
            LI.Controls.addControl('control-http-12209-289063-32', 'LI.ChannelFollow', {isFollowRecommendationEnabled : true});
          </script>
        
    



          <script id="controlinit-http-12209-289063-33" type="text/javascript+initialized" class="li-control">
            
        /* extlib: _scinhiding */
          
        
    
            LI.Controls.addControl('control-http-12209-289063-33', 'SCINHiding', {});
          </script>
        
    
 

          <script id="controlinit-http-12209-289063-34" type="text/javascript+initialized" class="li-control">
            
        /* extlib: _nustweetactions */
          
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
    
LI.i18n.register( 'NusTweetActions-connect-your-twitter', 'Connect your Twitter and LinkedIn' );


     
      
  
  

    
      
        
          
            
                
              
          
        
      
    
    


     
    
  

     
      
        
          
            
                
              
          
        
      
    
     

LI.TwitterBindDialogDependencies = {
  jsFiles: 
      
        
            
              
              
                ["http://s.c.lnkd.licdn.com/scds/concat/common/js?h=drc7c6u9rvdr5l5w0iuhye95b-82rxcxp2xdwfaugb1hymmbkaw&fc=1"]
              
            
          
        
      
    ,
  cssFiles: 
      
        
            
              
              
                ["http://s.c.lnkd.licdn.com/scds/concat/common/css?h=7b60n5zy4134lyiyl1hcmjwgn&fc=1"]
              
            
          
        
      
    
};

        
    
            LI.Controls.addControl('control-http-12209-289063-34', 'NusTweetActions', {
              bindDialogUrl: '\/today\/dialog\/twitter?goback=%2Enmp_*1_*1_*1_*1_*1_*1_*1_*1_*1_*1',
              bindCheckUrl: '\/verifyTwitterAcct?csrfToken=ajax%3A1049694404522061108&goback=%2Enmp_*1_*1_*1_*1_*1_*1_*1_*1_*1_*1',
              showBindDialog: true
            });
          </script>
        
    
 

          <script id="controlinit-http-12209-289064-35" type="text/javascript+initialized" class="li-control">
            
        /* extlib: _nusdeleteupdate */
          
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
    
LI.i18n.register( 'NusDeleteUpdate-are-you', 'Are you sure you want to delete this update?' );
LI.i18n.register( 'NusDeleteUpdate-yes',   'Delete' );
LI.i18n.register( 'NusDeleteUpdate-or', 'or' );
LI.i18n.register( 'NusDeleteUpdate-cancel',   'Cancel' );
LI.i18n.register( 'NusDeleteUpdate-please-confirm',   'Delete' );

        
    
            LI.Controls.addControl('control-http-12209-289064-35', 'NusDeleteUpdate', {useAjax: 'true'});
          </script>
        
  
          <script id="controlinit-http-12209-289064-36" type="text/javascript+initialized" class="li-control">
            
        /* extlib: _nushiding */
          
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
    
LI.i18n.register( 'NUS_HIDING_UNDO', "Undo" );
LI.i18n.register( 'NUS_HIDING_CLOSE', "Close" );
LI.i18n.register( 'NUS_HIDING_IS_SHOWING_MSG', "Hide hidden updates <span id=\"nus-hidden-count\">{0}<\/span>" );
LI.i18n.register( 'NUS_HIDING_IS_HIDING_MSG', "Show hidden updates (<span id=\"nus-hidden-count\">{0}<\/span>)" );
LI.i18n.register( 'NUS_HIDING_YOU_WILL_NO_LONGER_RECEIVE_UPDATES_FROM_THIS_MEMBER', "You will no longer receive updates from this member" );


        
    
            LI.Controls.addControl('control-http-12209-289064-36', 'NusHiding', {
          hideHiddenLink : '/nhome/nusShowHide?showHidden=false&nusView=chronSplit',
          showHiddenLink : '/nhome/nusShowHide?showHidden=true&nusView=chronSplit'
        });
          </script>
        
    
 

          <script id="controlinit-http-12209-289064-37" type="text/javascript+initialized" class="li-control">
            
        /* extlib: _nusdiscussion */
          
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
    
LI.i18n.register( 'NUS_DISCUSSION_DELETE_MSG', "This comment has been deleted." );
LI.i18n.register( 'NUS_DISCUSSION_TIME_MSG', "Less than a minute ago" );
LI.i18n.register( 'NUS_DISCUSSION_ERROR_GENERIC', "We\'re sorry. Something unexpected happened and your request could not be completed. Please try again." );
LI.i18n.register( 'NUS_DISCUSSION_ADD_A_COMMENT', "Add a comment&#8230;" );
LI.i18n.register( 'NUS_DISCUSSION_COMMENT', "Comment" );
LI.i18n.register( 'NUS_DISCUSSION_OR', "or" );
LI.i18n.register( 'NUS_DISCUSSION_CANCEL', "Cancel" );
LI.i18n.register( 'NUS_DISCUSSION_DELETE', "Delete" );

        
    
            LI.Controls.addControl('control-http-12209-289064-37', 'NusDiscussion', {
        addCommentLink : '/lite/add-comment?csrfToken=ajax%3A1049694404522061108',
        deleteCommentLink : '/lite/delete-comment?csrfToken=ajax%3A1049694404522061108',
        addCommentLinkUscp : '/lite/updates?csrfToken=ajax%3A1049694404522061108',
        addCommentMegaphone: '/today/social/create-comment-submit?csrfToken=ajax%3A1049694404522061108',
        addCommentTreasury: '/profile/treasury-conversation-comment?csrfToken=ajax%3A1049694404522061108',
        addCommentEdu: '/edu/school-conversation-comment?csrfToken=ajax%3A1049694404522061108',
        deleteCommentLinkUscp : '/lite/remove-comment?csrfToken=ajax%3A1049694404522061108',
        deleteCommentMegaphone: '/today/social/delete-comment-submit?csrfToken=ajax%3A1049694404522061108',
        imgSize: 30,
        maxLength: 700,
        isFeedKatificationEnabled : true,
        useDwr : false,
        commentSpamFlaggingEnabled : true,
        useMentions : true,
        useNewMiniProfile: true,
        mentionsTriggerKeyString : 'H',
        mentionsDedupeConnections : true,
        mentionsQueryDelay : 'control',
        urlRegEx : '((?:[^A-Za-z0-9@\u00EF\u00BC\u00A0$#\u00EF\u00BC\u0083!\'#%&\'\\(\\)\\*\\+,\\\\:\\-\\.\/;<=>\\?@\\[\\]\\^_\\{\\|\\}~\\$\\s\\uFFFE\\uFEFF\\uFFFF\\u202A-\\u202E]|^)(https?:\\\/\\\/)?((?:(?:[^!\'#%&\'\\(\\)\\*\\+,\\\\:\\-\\.\/;<=>\\?@\\[\\]\\^_\\{\\|\\}~\\$\\s\\uFFFE\\uFEFF\\uFFFF\\u202A-\\u202E](?:[_-]|[^!\'#%&\'\\(\\)\\*\\+,\\\\:\\-\\.\/;<=>\\?@\\[\\]\\^_\\{\\|\\}~\\$\\s\\uFFFE\\uFEFF\\uFFFF\\u202A-\\u202E])*)?[^!\'#%&\'\\(\\)\\*\\+,\\\\:\\-\\.\/;<=>\\?@\\[\\]\\^_\\{\\|\\}~\\$\\s\\uFFFE\\uFEFF\\uFFFF\\u202A-\\u202E]\\.)*(?:(?:[^!\'#%&\'\\(\\)\\*\\+,\\\\:\\-\\.\/;<=>\\?@\\[\\]\\^_\\{\\|\\}~\\$\\s\\uFFFE\\uFEFF\\uFFFF\\u202A-\\u202E](?:-|[^!\'#%&\'\\(\\)\\*\\+,\\\\:\\-\\.\/;<=>\\?@\\[\\]\\^_\\{\\|\\}~\\$\\s\\uFFFE\\uFEFF\\uFFFF\\u202A-\\u202E])*)?[^!\'#%&\'\\(\\)\\*\\+,\\\\:\\-\\.\/;<=>\\?@\\[\\]\\^_\\{\\|\\}~\\$\\s\\uFFFE\\uFEFF\\uFFFF\\u202A-\\u202E]\\.)(?:(?:(?:aero|asia|biz|cat|com|coop|edu|gov|info|int|jobs|mil|mobi|museum|name|net|org|pro|tel|travel|xxx)(?=[^0-9a-zA-Z]|$))|(?:(?:ac|ad|ae|af|ag|ai|al|am|an|ao|aq|ar|as|at|au|aw|ax|az|ba|bb|bd|be|bf|bg|bh|bi|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|cr|cs|cu|cv|cx|cy|cz|dd|de|dj|dk|dm|do|dz|ec|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gg|gh|gi|gl|gm|gn|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|im|in|io|iq|ir|is|it|je|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|me|mg|mh|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|mv|mw|mx|my|mz|na|nc|ne|nf|ng|ni|nl|no|np|nr|nu|nz|om|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|ps|pt|pw|py|qa|re|ro|rs|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|ss|st|su|sv|sx|sy|sz|tc|td|tf|tg|th|tj|tk|tl|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|za|zm|zw)(?=[^0-9a-zA-Z]|$))|(?:xn--[0-9a-z]+)))(?::[0-9]+)?(\\\/(?:[a-z0-9!\\*\';:=\\+,\\.\\$\/%#\\[\\]\\-_~@\\|&\\u00c0-\\u00d6\\u00d8-\\u00f6\\u00f8-\\u00ff\\u0100-\\u024f\\u0253-\\u0254\\u0256-\\u0257\\u0259\\u025b\\u0263\\u0268\\u026f\\u0272\\u0289\\u028b\\u02bb\\u0300-\\u036f\\u1e00-\\u1eff]*(?:(\\([a-z0-9!\\*\';:=\\+,\\.\\$\/%#\\[\\]\\-_~@\\|&\\u00c0-\\u00d6\\u00d8-\\u00f6\\u00f8-\\u00ff\\u0100-\\u024f\\u0253-\\u0254\\u0256-\\u0257\\u0259\\u025b\\u0263\\u0268\\u026f\\u0272\\u0289\\u028b\\u02bb\\u0300-\\u036f\\u1e00-\\u1eff]\\))[a-z0-9!\\*\';:=\\+,\\.\\$\/%#\\[\\]\\-_~@\\|&\\u00c0-\\u00d6\\u00d8-\\u00f6\\u00f8-\\u00ff\\u0100-\\u024f\\u0253-\\u0254\\u0256-\\u0257\\u0259\\u025b\\u0263\\u0268\\u026f\\u0272\\u0289\\u028b\\u02bb\\u0300-\\u036f\\u1e00-\\u1eff]*)*([a-z0-9!\\*\';:=\\+,\\.\\$\/%#\\[\\]\\-_~@\\|&\\u00c0-\\u00d6\\u00d8-\\u00f6\\u00f8-\\u00ff\\u0100-\\u024f\\u0253-\\u0254\\u0256-\\u0257\\u0259\\u025b\\u0263\\u0268\\u026f\\u0272\\u0289\\u028b\\u02bb\\u0300-\\u036f\\u1e00-\\u1eff]|(\\([a-z0-9!\\*\';:=\\+,\\.\\$\/%#\\[\\]\\-_~@\\|&\\u00c0-\\u00d6\\u00d8-\\u00f6\\u00f8-\\u00ff\\u0100-\\u024f\\u0253-\\u0254\\u0256-\\u0257\\u0259\\u025b\\u0263\\u0268\\u026f\\u0272\\u0289\\u028b\\u02bb\\u0300-\\u036f\\u1e00-\\u1eff]\\)))|(?:[a-z0-9!\\*\';:=\\+,\\.\\$\/%#\\[\\]\\-_~@\\|&\\u00c0-\\u00d6\\u00d8-\\u00f6\\u00f8-\\u00ff\\u0100-\\u024f\\u0253-\\u0254\\u0256-\\u0257\\u0259\\u025b\\u0263\\u0268\\u026f\\u0272\\u0289\\u028b\\u02bb\\u0300-\\u036f\\u1e00-\\u1eff]+\\\/))*)?(\\?[a-z0-9!?\\*\'@\\(\\);:&=\\+\\$\\\/%#\\[\\]\\-_\\.,~\\|]*[a-z0-9_&=#\\\/])?)'
      });
          </script>
        
 


          <script id="controlinit-http-12209-289065-38" type="text/javascript+initialized" class="li-control">
            
        /* extlib: _nusliking */
          
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
    
LI.i18n.register( 'NUS_LIKING_LIKE_LINK', "Like (<span>{0}<\/span>)" );
LI.i18n.register( 'NUS_LIKING_LIKE', "Like" );

        
    
            LI.Controls.addControl('control-http-12209-289065-38', 'NusLiking', {
      isFeedKatificationEnabled : true
    });
          </script>
        
    
 
          <script id="controlinit-http-12209-289065-39" type="text/javascript+initialized" class="li-control">
            
        /* extlib: _nusaggregation */
          
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
    
LI.i18n.register( 'Nus-collapse-update', 'Collapse ({0}) update from {1}' );
LI.i18n.register( 'Nus-collapse-updates', 'Collapse ({0}) updates from {1}' );
LI.i18n.register( 'Nus-collapse-from', 'Collapse updates from {0}' );
        
    
            LI.Controls.addControl('control-http-12209-289065-39', 'NusAggregation', {});
          </script>
        
    
</div>



  </div>
</div>
</div>
</div>
</div>
</body>
  <script src="http://cdn.embed.ly/jquery.embedly-3.1.1.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/assets/js/js/jquery.imgareaselect.pack.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/assets/js/js/script.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>/assets/js/jquery.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<script type="text/javascript">
// function hello(id){

// var data=document.getElementById(id).value;


// 	var hr = new XMLHttpRequest();
//     // Create some variables we need to send to our PHP file
//     var url = "<?php echo base_url()?>/index.php/home/home/updateCommentAJAX";
//     var vars = "postID="+id+"&comment="+data;
//     hr.open("POST", url, true);
//     // Set content type header information for sending url encoded variables in the request
//     hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//     // Access the onreadystatechange event for the XMLHttpRequest object
//     hr.onreadystatechange = function() {
// 	    if(hr.readyState == 4 && hr.status == 200) {
// 		    var return_data = hr.responseText;
		   
// 		    document.getElementById(id+"comment").innerHTML+="<li class='comment-item first nus-mid-208236160'><div class='bubble'></div><a href='#'><img id='' class='feed-photo photo' width='30' height='30' alt='' src='"+return_data+"'></a><p><span class='new-miniprofile-container'><a href='#'><?php echo $fullname; ?></a></span></p><q id=''><span class='commentary'>"+data+"</span></q><span class='nus-timestamp'> "+Date()+" </span></li>";
// 		    document.getElementById(id).value="";
		  






		
// 	    }
//     }
//     // Send the data to PHP now... and wait for response to update the status div
//     hr.send(vars); // Actually execute the request
//   }

//   function ajaxNotifications(){

//     var hr = new XMLHttpRequest();

//     hr.open("POST", "<?php echo base_url()?>/index.php/notifications/notifications/getfriendListAJAX", true);
//     hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//       hr.onreadystatechange = function() {
// 	    if(hr.readyState == 4 && hr.status == 200) {
// 		    var data = JSON.parse(hr.responseText);
// 		//    alert(data);
// 			document.getElementById("notificationUpdate").innerHTML= "";
// 			for(var obj in data){

// 				document.getElementById("notificationUpdate").innerHTML+="<form action='<?php echo base_url();?>index.php/connections/connection/acceptfriend' method='post' name='process' id='add-friend'><li class='update single'> <span class='timestamp'></span><div class='photo'><img width='40' height='40' src='<?php echo base_url();?>uploads/30_"+data[obj].imageUrl+".jpg"+"'></div><div class='action'><span id='showText' class='name'>"+data[obj].fullname+"</span><input name='friendid' type='hidden' value='"+data[obj].userid+"'><button type='submit' value='Connect' name='addignore' class='btn-primary' style='margin: 5px 5px 5px 5px; text-align: center; width: 65px;'>Connect</button><button type='submit' value='Ignore' name='addignore' class='btn-secondary' style='margin: 5px 5px 5px 5px; text-align: center; width: 65px;'>Ignore</button></div></li></form>";


// 				//results.innerHTML += "Property A: "+data[obj].propertyA+"<hr />";
				
// 			}
// 	    }
//     }
//     hr.send();
//     document.getElementById("notificationUpdate").innerHTML = "<li class='update single'><p>No pending requests..</p></li>";

// }





</script>



	

</html>
