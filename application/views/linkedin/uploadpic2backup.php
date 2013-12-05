<title>Upload Profile Picture | LinkedIn</title>
<link rel="shortcut icon" href="<?php echo base_url('/assets/ico/favicon.ico')?>" />


 <link href="<?php echo base_url()?>;assets/css/linkedin/uploadpic2" rel="stylesheet">
</head>

<body id="join">
  <div class="top-menu">
    <div class="wrapper">
    </div>
  </div>
  <div class="wrapper">
    <div id="body-area" class="lessmargin">
      <div class="main-body-white signup">
        <div class="progress-container">
          <h1 class="mainh1">Upload your profile picture</h1>
          <p class="progress">
            <span class="summary">Step <strong>3</strong> of <strong>8</strong></span>
            <span class="progress-meter" title="37.5% Complete">
            <span class="has-progress" style="width:37.5%"></span>
            </span>
          </p>      
        </div>
        <div id="content">
         
          <div class="register-container">
            <div class="import-abook-contacts">
              <div id="module-id2" class="leo-module mod-action abook-import">
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
                <a id="skipButton" href="<?php echo base_url('index.php/linkedin/login/go_to_profile');?>"> Skip this step </a>»
                

                
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
    <div class="wrapper">
    <div id="legal">
      <p id="copyright">LinkedIn Corporation &copy; 2013</p>
      <p id="terms-of-use">Commercial use of this site without express authorization is prohibited.  </p>
    </div>
    </div>
  </div> <!-- END: FOOTER -->
</body>

</html>
