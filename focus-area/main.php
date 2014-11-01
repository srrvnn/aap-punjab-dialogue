<!DOCTYPE html>
<html lang="en">
<head>
	<title>Delhi Dialogue</title>

	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Navbar and Register Proposal Style -->
	<link rel="stylesheet" href="../files/mainstyle.css" type="text/css" media="all">
	<link rel="stylesheet" id="dt-default-style-css" href="../files/style.css" type="text/css" media="all">
	<link rel="stylesheet" id="options-google-fonts" href="../files/css_002.css" type="text/css" media="all">		

	<!-- Page content style -->	
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" id="dt-issue-css" href="../css/focus-area.css" type="text/css" media="all">

<body>

	<!-- preloader-->
	<header id="header" class="show-original-logo solid-header scrolled-header" 
	style="padding-top: 10px; padding-bottom: 10px;box-shadow: rgba(0, 0, 0, 0.298039) 0px 0px 3px; background: rgba(255, 255, 255, 0.901961);">
		<div class="centered-wrapper">
			<div class="percent-one-fourth ">
				<div class="logo">
					<a class="original-logo" href="../main.php#home"><img style="width: auto; height: 50px;" src="../images/dd-logo.jpg" alt="AAP Logo"></a>
					
				</div>
			</div><!--end one-fourth-->

			<a class="nav-btn "><i class="fa fa-bars"></i></a>
			<div class="percent-three-fourth column-last">	
				<nav style="overflow: visible;" id="navigation" class="light-header desktop">
					<div class="menu-one-page-menu-container">
						<ul style="padding-top: 10px;" id="mainnav" class="sf-menu sf-js-enabled sf-arrows">
							<li style="overflow: visible;" id="menu-item-181" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-181"><a class="headnavs" href="../main.php#home"><span>HOME</span></a></li>
							<li style="overflow: visible;" id="menu-item-181" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-181"><a class="headnavs" href="../main.php#about"><span>ABOUT US</span></a></li>
							<li style="overflow: visible;" id="menu-item-182" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-182"><a class="headnavs" href="../main.php#topics"><span>FOCUS AREAS</span></a></li>
							<li style="overflow: visible;" id="menu-item-182" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-182"><a class="headnavs" href="../main.php#schedule"><span>SCHEDULE</span></a></li>
							<li style="overflow: visible;" id="menu-item-185" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-185"><a class="headnavs" href="../main.php#contact"><span>CONTACT</span></a></li>
						</ul>
					</div>				
				</nav><!--end navigation-->				
			</div><!--end three-fourth-->
		</div><!--end centered-wrapper-->
	</header>
	<div id="wrapper">	
	<div style="height: 70px;" class="menu-fixer"></div>
		<section class="col-sm-12" style="background-color: rgba(236, 236, 236, 0.36)">
			<article id="page-82" class="col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8 col-sm-12 begin-content">
				<section style="border: 1px solid #e3e3e3">
					
					<div class="lighter-overlay">
						<div class="vc_span12 wpb_column column_container">
							<div class="main-header"><h2>Focus Area</h2><h1 id="focusAreaHeader"></h1></div>
							<div class="main-content col-sm-12">
								<form method="post" class="form form-inline vertical-align" role="form">
                                    <div class="inline-form-group form-group">
										<input class="form-control"  name="vzip" id="nameInput" placeholder="Enter Name"/>
										<input class="form-control" name="vemail" id="emailInput"  placeholder="Enter Email"/>
										<input type="hidden" class="form-control" name="focusarea" id="focusarea" value="Electricity"/>
                                    </div>
                                    <input type="submit" class="blue-fixed-btn button"  name="submit" id="send" value="Get Update"/>
                                </form>
								<div class="message" style="display: none"><span></span></div>
                                <h3><?php include "secure_email_code2.php"?></h3>
								<div id="focusAreaSection" class="col-sm-12">
								</div>
								<div class="button-group col-sm-12">
									<a href="#connect" id="registerBtn" class="blue-fixed-btn button" role="button">Register</a>
									<a href="#connect" id="proposalBtn" class="blue-fixed-btn button" role="button">Submit Proposal</a>
									<a href="#" id="discussBtn" class="blue-fixed-btn button" role="button">Discuss Online</a>
								</div>
							</div>
						</div>
					</div>
				</section>
			</article>
		</section>

		<footer class="col-sm-12">
			<div id="connect" style="background-image: url(../images/aap-bg.jpg);background-repeat: no-repeat; background-size:100% 100%; background-attachment: fixed;background-position: 50% 0;">
				<div class="darker-overlay" style="padding-top: 100px;padding-bottom: 100px; background-color: rgba(0,0,0, 0.70);">
					<h1 class="section-title">Register or Submit a Proposal</h1><div style="clear:both; width:100%; height:60px"></div>
					<div class="container">
						<form action="#" method="post" class="wpcf7-form" novalidate="novalidate">
							<div class="col-sm-12 inline-radiogroup"> <br>
								<div class="btn-group">
									<label class="btn" data-bind="css: { 'active': selectedOption() === 'Option 1' }">
										<input type="radio" name="options" value ="SubmitProposal" id="proposalRadioBtn" data-bind="checked: selectedOption, checkedValue: 'Submit Proposal'">Submit Proposal
									</label>
									<label class="btn" data-bind="css: { 'active': selectedOption() === 'Option 2' }">
										<input type="radio" name="options" value ="RegisterForSeminar" id="seminarRadioBtn" data-bind="checked: selectedOption, checkedValue: 'Register For Seminar'">Register For Seminar
									</label>
								</div>
							</div><br>
							<div class="percent-one-half"> <br>
								<span class="wpcf7-form-control-wrap your-name">
									<input name="your-name" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Name" type="text">
								</span><br>
							</div><br>
							<div class="percent-one-half column-last"> <br>
								<span class="wpcf7-form-control-wrap your-email">
									<input name="your-email" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email" type="email">
								</span><br>
							</div><br>
							<div class="percent-one-half"> <br>
								<span class="wpcf7-form-control-wrap your-phone">
									<input name="your-phone" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Phone" type="text">
								</span><br>
							</div><br>
							<div class="percent-one-half column-last"> <br>
								<span class="wpcf7-form-control-wrap">
									<input name="your-profession" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Profession" type="text">
								</span><br>
							</div><br>
							<div class="percent-one-half"> <br>
								  <div class="panel panel-default">
									<div class="panel-body " style="padding: 0">
										<div class="col-sm-12 btn-group btn-input clearfix" style="padding: 0;">
											 <button type="button" class="btn btn-default dropdown-toggle form-control" data-toggle="dropdown">
											   <span data-bind="orgType">Organization Type</span>&nbsp;<span class="caret"></span>
											 </button>
											 <ul class="dropdown-menu">
											   <li role="presentation"><a role="menuitem" href="#connect">NGO</a></li>
											   <li role="presentation"><a role="menuitem" href="#connect">RWA</a></li>
											   <li role="presentation"><a role="menuitem" href="#connect">Researcher</a></li>
											   <li role="presentation"><a role="menuitem" href="#connect">Others</a></li>
											 </ul>
										   </div>
									</div>
								</div><br>
							</div><br>
							<div class="percent-one-half"></div>
							<div class="percent-one-half">
								<p style="color: rgba(255, 255, 255, 0.77); font-size: 16px; font-weight: 600;">Select Policy Interest</p><br>
							</div><br>
							<div id="focusAreaCheckbox" class="col-sm-12 inline-checkbox">
								<div class="checkbox">
								  <label><input type="checkbox" id="focusAreaCheckbox0">All</label>
								</div>
								<div class="checkbox">
									<label><input type="checkbox" class="focus-area-checkbox" id="focusAreaCheckbox1" name="JobsandEmployment">Jobs and Employment</label>
								</div>
								<div class="checkbox">
								  <label><input type="checkbox" class="focus-area-checkbox" id="focusAreaCheckbox2" name = "EnterpriseTradeandIndustry">Enterprise: Trade and Industry</label>
								</div>
								<div class="checkbox">
								  <label><input type="checkbox" class="focus-area-checkbox" id="focusAreaCheckbox3" name = "WomenRightsSafety">Women Rights (Safety)</label>
								</div>
								<div class="checkbox">
								  <label><input type="checkbox" class="focus-area-checkbox" id="focusAreaCheckbox4" name = "SanitationandSolidWasteMgmt">Sanitation and Solid Waste Mgmt</label>
								</div>
								<div class="checkbox">
								  <label><input type="checkbox" class="focus-area-checkbox" id="focusAreaCheckbox5"  name = "SocialWelfareandSocialJustice">Social Welfare and Social Justice</label>
								</div>
								<div class="checkbox">
								  <label><input type="checkbox" class="focus-area-checkbox" id="focusAreaCheckbox6"  name = "Transportation">Transportation</label>
								</div>
								<div class="checkbox">
								  <label><input type="checkbox" class="focus-area-checkbox" id="focusAreaCheckbox7" name = "EnergyandElectricity">Energy and Electricity</label>
								</div>
								<div class="checkbox">
								  <label><input type="checkbox" class="focus-area-checkbox" id="focusAreaCheckbox8"  name = "Education">Education</label>
								</div>
								<div class="checkbox">
								  <label><input type="checkbox" class="focus-area-checkbox" id="focusAreaCheckbox9" name="Health">Health</label>
								</div>
								<div class="checkbox">
								  <label><input type="checkbox" class="focus-area-checkbox" id="focusAreaCheckbox10" name="LandandHousing">Land and Housing</label>
								</div>
								<div class="checkbox">
								  <label><input type="checkbox" class="focus-area-checkbox" id="focusAreaCheckbox11" name="RuralDelhi">Rural Delhi</label>
								</div>
								<div class="checkbox">
								  <label><input type="checkbox" class="focus-area-checkbox" id="focusAreaCheckbox12" name = "Water">Water</label>
								</div>
							</div><br>
							<span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Message"></textarea></span><br>
							
							<div class="captcha col-sm-8">
								<div>
									<label>Word Verification:</label>
									<input type="text" name="captcha" placeholder="captcha">
								</div>
									<img style="max-width:200px; max-height:105px" src="../files/captcha.gif" class="img-responsive" id="captcha" alt="Responsive image">
							</div>
							<div class="col-sm-4" style="text-align:right">
								<button name="submit" class="blue-fixed-btn button" type="submit">Submit</button>
							</div>
							
						</form>
                        <h3><?php include "secure_email_code3.php"?></h3>
					</div>
				</div>
			</div>
		</footer>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="../js/focus-area.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

	<script>
		function initialze(focusAreaId) {
			// Assign handlers immediately after making the request,
			// and remember the jqxhr object for this request
			var jqxhr = $.getJSON( "../data/issue-details.json", function() {
			})
			  .done(function(result) {
				Dialouge.FocusAreaPage.setContents(result, focusAreaId);
			  })
			  .fail(function() {
				
			  })
			  .always(function() {
			  });
		}

		 $(document).ready(function(){
			// Dropdown box select
			$( document.body ).on( 'click', '.dropdown-menu li', function( event ) {
			 
				var $target = $( event.currentTarget );
				var dropDownLevelContainer = $target.closest( '.btn-group' ).find( '[data-bind="orgType"]' );
				// Set text
				dropDownLevelContainer.text( $target.text() ).end()
				  .children( '.dropdown-toggle' ).dropdown( 'toggle' ); // Toggle opened dropdown
			   return false;
			});

			Dialouge.FocusAreaPage.create("#focusAreaHeader", "#focusAreaSection", ".focus-area-checkbox");

			var queryString = Dialouge.UrlUtils.getQueryString();
			var pageId =  queryString["id"];
			if(pageId) {
				// Remove section if specified
				pageId = pageId.replace(/#.*/i, "");
			}
			if(!pageId) {
				pageId = "1"; // default focus issue page Id
			}
			initialze(pageId);
			
			$( "#registerBtn" ).click(function() {
				goToRegistrationPage();
				$("#seminarRadioBtn").prop("checked", true);
			});
			$( "#proposalBtn" ).click(function() {
				goToRegistrationPage();
				$("#proposalRadioBtn").prop("checked", true);
			});
			$( "#focusAreaCheckbox0" ).click(function() {
				//select/deselect all checkboxes with class "focus-area-checkbox" 
				Dialouge.FocusAreaPage.setAllCheckboxStatus(this.checked);
			});
		});

		function goToRegistrationPage() {
			// Scroll to the right page
			$('html, body').animate({
				 scrollTop: $( "#connect" ).offset().top
			}, 1000);
		}
	</script>
</body>
</html>
