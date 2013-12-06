<html>
<head>



<title>Build Your Profile | LinkedIn</title>

<base href="<?php echo base_url(); ?>" />
<link rel="shortcut icon" href="images/favicon.ico" />
 
<!-- <link rel="stylesheet" type="text/css" href="doit.css">  -->
 
 <link href="<?php echo base_url('/assets/css/Linkedin/khudse.css')?>" rel="stylesheet" type="text/css">
 
 
</head>

<body id="join">





	<div class="top-menu">
		<div class="fwrapper">
				<img src="<?php echo base_url(); ?>assests/images/header2logo.jpg" > 
		</div>
	</div>
	<div class="fwrapper">
	
		<div id="body-area" class="lessmargin">
			<div class="main-body-white signup">
				<div class="progress-container">
					<h1 class="mainh1"><strong><?php echo $this->session->userdata('firstname')?></strong>, let's start creating your professional profile</h1>			
				</div>
				<div id="content">
										<div id="motivation" class="motivation">
											<img src="<?php echo base_url(); ?>assests/images/motivation.png" > 
	
											<!-- <div class="profile-features">
											<h3>A LinkedIn profile helps you...</h3>
											<ul>
												<li class="first">Showcase your skills and experience</li>
												<li>Be found for new opportunities</li>
												<li>Stay in touch with colleagues and friends</li>
											</ul>
											</div> -->
										</div>
				 
					<div class="register-container">									 
						<form id="yui-gen2" class="standard-form sided extrainput" action="<?php echo base_url('index.php/linkedin/signup/validate2');?>" method="post">
							<ul>
								<li class="name">
								<div class="fieldgroup">
									<label for="country-coldRegistrationForm">* Country:</label>
									
										<span id="country-coldRegistrationForm-error" class="error"></span>
										<select class="country-select" id="country-coldRegistrationForm" name="country">
											<option value="us">United States</option>
											<option value="af">Afghanistan</option>
											<option value="ax">Aland Islands</option>
											<option value="al">Albania</option>
											<option value="dz">Algeria</option>
											<option value="as">American Samoa</option>
											<option value="ad">Andorra</option>
											<option value="ao">Angola</option>
											<option value="ai">Anguilla</option>
											<option value="aq">Antarctica</option>
											<option value="ag">Antigua and Barbuda</option>
											<option value="ar">Argentina</option>
											<option value="am">Armenia</option>
											<option value="aw">Aruba</option>
											<option value="au">Australia</option>
											<option value="at">Austria</option>
											<option value="az">Azerbaijan</option>
											<option value="bs">Bahamas</option>
											<option value="bh">Bahrain</option>
											<option value="bd">Bangladesh</option>
											<option value="bb">Barbados</option>
											<option value="by">Belarus</option>
											<option value="be">Belgium</option>
											<option value="bz">Belize</option>
											<option value="bj">Benin</option>
											<option value="bm">Bermuda</option>
											<option value="bt">Bhutan</option>
											<option value="bo">Bolivia</option>
											<option value="ba">Bosnia and Herzegovina</option>
											<option value="bw">Botswana</option>
											<option value="br">Brazil</option>
											<option value="io">British Indian Ocean Territory</option>
											<option value="bn">Brunei Darussalam</option>
											<option value="bg">Bulgaria</option>
											<option value="bf">Burkina Faso</option>
											<option value="bi">Burundi</option>
											<option value="kh">Cambodia</option>
											<option value="cm">Cameroon</option>
											<option value="ca">Canada</option>
											<option value="cv">Cape Verde</option>
											<option value="cb">Caribbean Nations</option>
											<option value="ky">Cayman Islands</option>
											<option value="cf">Central African Republic</option>
											<option value="td">Chad</option>
											<option value="cl">Chile</option>
											<option value="cn">China</option>
											<option value="cx">Christmas Island</option>
											<option value="cc">Cocos (Keeling) Islands</option>
											<option value="co">Colombia</option>
											<option value="km">Comoros</option>
											<option value="cg">Congo</option>
											<option value="ck">Cook Islands</option>
											<option value="cr">Costa Rica</option>
											<option value="ci">Cote D'Ivoire (Ivory Coast)</option>
											<option value="hr">Croatia</option>
											<option value="cu">Cuba</option>
											<option value="cy">Cyprus</option>
											<option value="cz">Czech Republic</option>
											<option value="cd">Democratic Republic of the Congo</option>
											<option value="dk">Denmark</option>
											<option value="dj">Djibouti</option>
											<option value="dm">Dominica</option>
											<option value="do">Dominican Republic</option>
											<option value="tp">East Timor</option>
											<option value="ec">Ecuador</option>
											<option value="eg">Egypt</option>
											<option value="sv">El Salvador</option>
											<option value="gq">Equatorial Guinea</option>
											<option value="er">Eritrea</option>
											<option value="ee">Estonia</option>
											<option value="et">Ethiopia</option>
											<option value="fk">Falkland Islands (Malvinas)</option>
											<option value="fo">Faroe Islands</option>
											<option value="fm">Federated States of Micronesia</option>
											<option value="fj">Fiji</option>
											<option value="fi">Finland</option>
											<option value="fr">France</option>
											<option value="gf">French Guiana</option>
											<option value="pf">French Polynesia</option>
											<option value="tf">French Southern Territories</option>
											<option value="ga">Gabon</option>
											<option value="gm">Gambia</option>
											<option value="ge">Georgia</option>
											<option value="de">Germany</option>
											<option value="gh">Ghana</option>
											<option value="gi">Gibraltar</option>
											<option value="gr">Greece</option>
											<option value="gl">Greenland</option>
											<option value="gd">Grenada</option>
											<option value="gp">Guadeloupe</option>
											<option value="gu">Guam</option>
											<option value="gt">Guatemala</option>
											<option value="gg">Guernsey</option>
											<option value="gn">Guinea</option>
											<option value="gw">Guinea-Bissau</option>
											<option value="gy">Guyana</option>
											<option value="ht">Haiti</option>
											<option value="hn">Honduras</option>
											<option value="hk">Hong Kong</option>
											<option value="hu">Hungary</option>
											<option value="is">Iceland</option>
											<option value="in">India</option>
											<option value="id">Indonesia</option>
											<option value="ir">Iran</option>
											<option value="iq">Iraq</option>
											<option value="ie">Ireland</option>
											<option value="my">Malaysia</option>
											<option selected="" value="pk">Pakistan</option>
											<option value="ru">Russian Federation</option>
											<option value="sg">Singapore</option>
											<option value="sk">Slovak Republic</option>
											<option value="si">Slovenia</option>
											<option value="sb">Solomon Islands</option>
											<option value="so">Somalia</option>
											<option value="za">South Africa</option>
											<option value="es">Spain</option>
											<option value="lk">Sri Lanka</option>
											<option value="sd">Sudan</option>
											<option value="sr">Suriname</option>
											<option value="ch">Switzerland</option>
											<option value="sy">Syria</option>
											<option value="tw">Taiwan</option>
											<option value="th">Thailand</option>
											<option value="ua">Ukraine</option>
											<option value="ae">United Arab Emirates</option>
											<option value="gb">United Kingdom</option>
											<option value="uy">Uruguay</option>
											<option value="uz">Uzbekistan</option>
											<option value="vu">Vanuatu</option>
											<option value="va">Vatican City State (Holy See)</option>
											<option value="ve">Venezuela</option>
											<option value="oo">Other</option>
										</select>
									</div>
								</li>
								<li class="name">
								<div class="fieldgroup">
									<label for="postalcode-coldRegistrationForm">Postal Code:</label>
									
										<span id="postalcode-coldRegistrationForm-error" class="error"></span>
										<input id="postalcode-coldRegistrationForm" type="text" maxlength="40" value="" name="postalcode" required/>
									</div>
								</li>
								<li>
								<div class="fieldgroup">
									<label for="currentjob-coldRegistrationForm">I am currently:</label>
									
										<span id="currentjob-coldRegistrationForm-error" class="error"></span>
										<label class="labelradio" for="employed-btn"><input onChange="myfun1();" type="radio" id="employed-btn" value="employed" name="status-chooser" checked="checked" defaultchecked="true" />Employed</label>
										<label class="labelradio" for="looking-btn"><input onChange="myfun2();" type="radio" id="looking-btn" value="looking" name="status-chooser" />Job Seeker</label>
										<label class="labelradio" for="student-btn"><input onChange="myfun3();" type="radio" id="student-btn" value="student" name="status-chooser" />Student</label>										
									</div>
								</li>
								<div id="displayblock1">
								<li class="password-field">
								<div class="fieldgroup">
									<label for="jobtitle-coldRegistrationForm">* Job Title:</label>
									
										<span id="jobtitle-coldRegistrationForm-error" class="error"></span>
										<input id="jobtitle-coldRegistrationForm" type="text" value="" name="workCompanyTitle"/>
									</div>

								</li>
								<li class="password-field">
								<div class="fieldgroup">
									<label for="company-coldRegistrationForm">* Company:</label>
									
										<span id="company-coldRegistrationForm-error" class="error"></span>
										<input id="company-coldRegistrationForm" type="text" value="" name="company" />
									</div>
								</li>
							</div>
							<div id="displayblock2" >
								<li class="password-field">

								<div class="fieldgroup">
							<label for="company-coldRegistrationForm">* Most Recent Job:</label>
									
										<span id="company-coldRegistrationForm-error" class="error"></span>
										<input id="company-coldRegistrationForm" type="text" value="" name="workCompanyTitle2" />
									</div>							
								</li>
								<li class="password-field">

								<div class="fieldgroup">
							<label for="company-coldRegistrationForm">* Most Recent Company:</label>
									
										<span id="company-coldRegistrationForm-error" class="error"></span>
										<input id="company-coldRegistrationForm" type="text" value="" name="company2" />
									</div>							
								</li>
									<li class="password-field">
<div class="start-year-entry">
							<label for="company-coldRegistrationForm">Starting year</label>
									 
                
                  
                    <select name="startYear" id="startYear-previousStartEnd-lookingProfileForm">
<option value="" selected="">-</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option></select>
                  
                
              </div>
<div class="start-year-entry">
              						<label for="company-coldRegistrationForm">Ending year</label>
									 
                
                  
                    <select name="endYear" id="startYear-previousStartEnd-lookingProfileForm">
<option value="" selected="">-</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option></select>
                  
                
              </div>
          </li>


	</div>
	<div id="displayblock3">

				<li class="password-field">
<div class="fieldgroup">
							<label for="company-coldRegistrationForm">* School/University:</label>
									
										<span id="company-coldRegistrationForm-error" class="error"></span>
										<input id="company-coldRegistrationForm" type="text" value="" name="school" />
									</div>							
								</li>
									<li class="password-field">
<div class="start-year-entry">
							<label for="company-coldRegistrationForm">Starting year</label>
									 
                
                  
                    <select name="startYear" id="startYear-previousStartEnd-lookingProfileForm">
<option value="" selected="">-</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option></select>
                  
                
              </div>
<div class="start-year-entry">
              						<label for="company-coldRegistrationForm">Ending year</label>
									 
                
                  
                    <select name="endYear" id="startYear-previousStartEnd-lookingProfileForm">
<option value="" selected="">-</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option>
</select>
                  
                
              </div>
          </li>




	</div>





						</ul>
							<p class="actions">
								<a href="<?php echo base_url('index.php/linkedin/signup/validate2');?>"><button id="btn-submit" class="btn-tertiary" >
									<div>Create my profile</div>
								</button></a>							
							</p>
							<p style="font-size:11px; margin-top: 30px;margin-left:200px;">
								* Indicates required field.
							</p>
						</form>
					</div>
					
					<!-- <div id="motivation" class="motivation">
						<div class="profile-features">
						<h3>A LinkedIn profile helps you...</h3>
						<ul>
							<li class="first">Showcase your skills and experience</li>
							<li>Be found for new opportunities</li>
							<li>Stay in touch with colleagues and friends</li>
						</ul>
						</div>
					</div> -->
				</div>
			</div>
		</div> <!-- END: BODY-AREA -->	
	</div> <!-- END: WRAPPER -->	
		
	<div class="footer-noborder">   <!--  yahan pe - daala hai -->
		<div class="fwrapper">
		<div id="legal">
			<p id="copyright">LinkedIn Corporation &copy; 2013</p>
			<p id="terms-of-use">Commercial use of this site without express authorization is prohibited.  </p>
		</div>
		</div>
	</div> <!-- END: FOOTER -->
<script type="text/javascript">
document.getElementById("displayblock1").style.display="block";
document.getElementById("displayblock2").style.display="none";
document.getElementById("displayblock3").style.display="none";
function myfun1(){

document.getElementById("displayblock1").style.display="block";
document.getElementById("displayblock2").style.display="none";
document.getElementById("displayblock3").style.display="none";
}
function myfun2(){
document.getElementById("displayblock1").style.display="none";
document.getElementById("displayblock2").style.display="block";
document.getElementById("displayblock3").style.display="none";


}
function myfun3(){

document.getElementById("displayblock1").style.display="none";
document.getElementById("displayblock2").style.display="none";
document.getElementById("displayblock3").style.display="block";

}




</script>

</body>

</html>
