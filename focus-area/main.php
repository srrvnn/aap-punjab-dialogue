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
								 <form id="notification-form" action="secure_email_code2.php" role="form">
									<div class="form-inline vertical-align">
										<div class="form-group inline-form-group">
										<input name="name" class="form-control" placeholder="Enter Name" id="customerName">
									  </div>
									  <div class="form-group inline-form-group">
										<input name="email" class="form-control" placeholder="Enter Email" id="customerEmail">
									  </div>
									  <input type="hidden" class="form-control" name="focusarea" id="focusarea" value="Electricity"/>
									  <button type="submit" class="blue-fixed-btn button"  name="submit" id="send">
										<span></span>Get Update
									  </button>
									</div>
									  <div style="margin-top:30px; margin-bottom: 30px">
										  <ul class="error" style="list-style-type: none;" id="notificationErrorMessage"></ul>
										  <label class="message" hidden></label>
									  </div>
								  
								</form>
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
					<form action="secure_email_code3.php" id="contact-form" class="form-horizontal">
							<fieldset>
								<div class="row">
									<div class="control-group">
									  <div class="controls inline-radiogroup">
										<div class="btn-group">
											<label class="btn">
												<input type="radio" name="participationOption" value ="Submit Proposal" id="proposalRadioBtn" >Submit Proposal
											</label>
											<label class="btn"">
												<input type="radio" name="participationOption" value ="Register For Seminar" id="seminarRadioBtn">Register For Seminar
											</label>
										</div>
									  </div>
									</div>
								</div>
								<div class="row">
									<div class="control-group col-sm-6">
									  <div class="controls">
										<input type="text" class="input-xlarge" placeholder="Name" name="name" id="name">
									  </div>
									</div>
									<div class="control-group col-sm-6">
									  <div class="controls">
										<input type="text" class="input-xlarge" placeholder="Email" name="email" id="email">
									  </div>
									</div>
								</div>
								<div class="row">
									<div class="control-group col-sm-6">
									  <div class="controls">
										<input type="text" class="input-xlarge" placeholder="Phone" name="phone" id="phone">
									  </div>
									</div>
									<div class="control-group col-sm-6">
									  <div class="controls">
										<input type="text" class="input-xlarge" placeholder="Profession" name="profession" id="profession">
									  </div>
									</div>
								</div>
								<div class="row">
									<div class="control-group col-sm-12">
									  <div class="controls col-sm-6" style="padding-left:0">
											<div class="panel panel-default">
												<div class="panel-body " style="padding: 0">
												
													<div class="col-sm-12 btn-group btn-input clearfix" style="padding: 0;">
														 <button type="button" class="btn btn-default dropdown-toggle form-control" data-toggle="dropdown">
														 <input type="hidden" placeholder="" name="orgType" id="orgType">
														   <label data-bind="orgTypeLbl" name="orgTypeLbl" id="orgTypeLbl"></label>&nbsp;<span class="caret"></span>
														 </button>
														 <ul class="dropdown-menu">
														   <li role="presentation"><a role="menuitem" href="#connect">NGO</a></li>
														   <li role="presentation"><a role="menuitem" href="#connect">RWA</a></li>
														   <li role="presentation"><a role="menuitem" href="#connect">Researcher</a></li>
														   <li role="presentation"><a role="menuitem" href="#connect">Others</a></li>
														 </ul>
													</div>
												</div>
											</div>
											<div class="container" id="errorContainer"></div>
									  </div>
									</div>
								</div>
								<div class="row">
									<p style="color: rgba(255, 255, 255, 0.77); font-size: 16px; font-weight: 600;">Select Policy Interest</p><br>
								</div>
								<div class="row">
									<div id="focusAreaCheckbox" class="control-group col-sm-12">
										<div class="col-sm-12 controls inline-checkbox">
											<div class="checkbox">
											  <label><input type="checkbox" name="focusArea" id="focusAreaCheckbox0">All</label>
											</div>
											<div class="checkbox">
												<label><input type="checkbox" class="focus-area-checkbox" id="focusAreaCheckbox1" name="focusArea">Jobs and Employment</label>
											</div>
											<div class="checkbox">
											  <label><input type="checkbox" class="focus-area-checkbox" id="focusAreaCheckbox2" name = "focusArea">Enterprise: Trade and Industry</label>
											</div>
											<div class="checkbox">
											  <label><input type="checkbox" class="focus-area-checkbox" id="focusAreaCheckbox3" name = "focusArea">Women Rights (Safety)</label>
											</div>
											<div class="checkbox">
											  <label><input type="checkbox" class="focus-area-checkbox" id="focusAreaCheckbox4" name = "focusArea">Sanitation and Solid Waste Mgmt</label>
											</div>
											<div class="checkbox">
											  <label><input type="checkbox" class="focus-area-checkbox" id="focusAreaCheckbox5"  name = "focusArea">Social Welfare and Social Justice</label>
											</div>
											<div class="checkbox">
											  <label><input type="checkbox" class="focus-area-checkbox" id="focusAreaCheckbox6"  name = "focusArea">Transportation</label>
											</div>
											<div class="checkbox">
											  <label><input type="checkbox" class="focus-area-checkbox" id="focusAreaCheckbox7" name = "focusArea">Energy and Electricity</label>
											</div>
											<div class="checkbox">
											  <label><input type="checkbox" class="focus-area-checkbox" id="focusAreaCheckbox8"  name = "focusArea">Education</label>
											</div>
											<div class="checkbox">
											  <label><input type="checkbox" class="focus-area-checkbox" id="focusAreaCheckbox9" name="focusArea">Health</label>
											</div>
											<div class="checkbox">
											  <label><input type="checkbox" class="focus-area-checkbox" id="focusAreaCheckbox10" name="focusArea">Land and Housing</label>
											</div>
											<div class="checkbox">
											  <label><input type="checkbox" class="focus-area-checkbox" id="focusAreaCheckbox11" name="focusArea">Rural Delhi</label>
											</div>
											<div class="checkbox">
											  <label><input type="checkbox" class="focus-area-checkbox" id="focusAreaCheckbox12" name = "focusArea">Water</label>
											</div>
										</div>
										
									</div>
								</div>
								<div class="row">
									<div class="control-group col-sm-12">
									  <div class="controls">
										<textarea class="input-xlarge" name="message" id="message" placeholder="Message" rows="3"></textarea>
									  </div>
									</div>
								</div>
								<div class="row">
									<div class="captcha col-sm-8">
										<div>
											<label>Word Verification:</label>
											<input type="text" name="captcha" placeholder="captcha">
										</div>
										<img style="max-width:200px; max-height:105px" src="../files/captcha.gif" class="img-responsive" id="captcha" alt="Responsive image">
									</div>
									<div class="form-actions col-sm-4">
									  <button type="submit" class="btn btn-lg btn-black"><span></span>Send</button>
									  <button type="reset" class="btn btn-lg btn-black">Clear</button>
									  <img style="visibility: hidden;" alt="Sending ..." src="../files/ajax-loader.gif" class="ajax-loader"><p></p>
									</div>
								</div>
							  </fieldset>
							 <label class="col-sm-12 message" hidden></label>
						</form>
					</div>
				</div>
			</div>
		</footer>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="../js/main.js"></script>
	

	<!-- Latest compiled and minified JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>

	<script>
		 $(document).ready(function(){
			var focusAreaPage = Dialouge.FocusAreaPage("#focusAreaHeader", "#focusAreaSection", ".focus-area-checkbox");
			focusAreaPage.initOrganizationTypeFields("#orgTypeLbl", "#orgType");
			focusAreaPage.initPageContents();
			
			var registrationFormValidator = Dialouge.FormValidator('#contact-form');
			var notificationFormValidator = Dialouge.FormValidator('#notification-form', '#notificationErrorMessage');
			registrationFormValidator.addValidator(focusAreaPage.registrationCallBack);
			notificationFormValidator.addValidator(focusAreaPage.getUpdatesCallBack);
			
			// Dropdown box select
			$( document.body ).on( 'click', '.dropdown-menu li', function( event ) {
			 
				var $target = $( event.currentTarget );
				var dropDownLevelContainer = $target.closest( '.btn-group' ).find( '[data-bind="orgTypeLbl"]' );
				
				// Set text and toggle opened dropdown
				dropDownLevelContainer.text( $target.text() ).end()
				  .children( '.dropdown-toggle' ).dropdown( 'toggle' ); // 

				 // Populate hidden element to be used for validation
				 $("#orgType").val($target.text());
				 
				 registrationFormValidator.validate();
			   return false;
			   
			});
			
			$( "#registerBtn" ).click(function() {
				Dialouge.WindowUtils.goToPage("#connect");
				$("#seminarRadioBtn").prop("checked", true);
			});
			$( "#proposalBtn" ).click(function() {
				Dialouge.WindowUtils.goToPage("#connect");
				$("#proposalRadioBtn").prop("checked", true);
			});
			$( "#focusAreaCheckbox0" ).click(function() {
				//select/deselect all checkboxes with class "focus-area-checkbox" 
				focusAreaPage.setAllCheckboxStatus(this.checked);
			});
		});
	</script>
</body>
</html>
