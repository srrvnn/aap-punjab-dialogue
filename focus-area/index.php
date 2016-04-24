<?php
	session_start();
	global $focus_area_details;
	// Default focus area Id
	$requested_focus_area_id="1";

	if(isset($_GET["id"]) && !empty($_GET["id"])) {
		$requested_focus_area_id = htmlspecialchars($_GET["id"]);
	}
	// Read the file contents into a string variable,
	// and parse the string into a data structure
	$contents = file_get_contents("../data/punjab-focus.json");
	$contents = utf8_encode($contents);
	$all_focus_areas_details = json_decode($contents, true);

	// Find focus area details from "id" request parameter
	if(isset ($all_focus_areas_details)) {
		foreach ($all_focus_areas_details as $a_focus_area_details) {
			if($a_focus_area_details["id"] == $requested_focus_area_id) {
				$focus_area_details = $a_focus_area_details;
				break;
			}
		}
	} else {
		$focus_area_details["longDesc"] = "We encountered an internal error. Please try again later.";
	}
	if(!isset ($focus_area_details)) {
		$focus_area_details["longDesc"] = "Invalid request. Focus Area requested is not supported. Please make sure that you entered a valid URL.";
	}
?>
<!DOCTYPE html>
<html class=" js webgl no-touch rgba opacity cssanimations csstransforms csstransforms3d csstransitions js_active  vc_desktop  vc_transform " lang="en-US">
<head>
	<meta charset="utf-8"/>
	<!-- mobile meta tag -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="generator" content="Punjab Dialogue Portal by AAP">
	<title>Punjab Dialogue</title>

	<meta property="og:title" content="Punjab Dialogue" />
	<meta property="og:site_name" content="Punjab Dialogue" />
	<meta property="og:url" content="//www.punjabdialogue.org/" />
	<meta property="og:image" content="//www.punjabdialogue.org/images/xxl_lsp.jpg" />
	<meta property="og:description" content="Punjab Dialogue is an initiative to build a realistic and practical plan to achieve the vision. 12 focus areas like youth, farmers, women have been identified. This initiative will engage domain experts from various fields to build plans for different focus areas."/>
	<meta property="fb:app_id" content="1540899709487892" />

	<!-- Custom Favicon -->
	<link rel="shortcut icon" href="files/favicon.ico" type="image/x-icon">
	<link rel="icon" href="files/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="../css/header.css" type="text/css" media="all">
	<link rel="stylesheet" href="../css/spin.css" type="text/css" media="all">
	<link rel="stylesheet" href="../css/focus-area.css" type="text/css" media="all">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>

	<script>

	var request = new XMLHttpRequest();

	request.open('GET', 'https://spreadsheets.google.com/feeds/list/15Kc87FXPUjLQqjgWeY4zrnvRJlqEINDiimgXFoWxsn8/od6/public/values?alt=json', true);

	request.onload = function() {

	  if (request.status >= 200 && request.status < 400) {

	    var data = JSON.parse(request.responseText);
	    var logs = data.feed.entry;

	    var focusAreaId = '<?php echo $requested_focus_area_id ;?>';

	    var focusAreaContent = logs.find(function(log) {

	    	var section = log.gsx$section.$t;
	    	return section === 'focus-area-' + focusAreaId;
	    });

	    document.getElementById('focusAreaHeader').innerHTML = focusAreaContent.gsx$name.$t;
	    document.getElementById('focusAreaSection').innerHTML = focusAreaContent.gsx$longdesc.$t.split('\n').join('<br/><br/>');

	    window.longdesc = focusAreaContent.gsx$longdesc.$t;

	  } else {

	  	console.log('There was a server error accessing the GA spreadsheets.');
	  }
	};

	request.onerror = function() {

	  console.log('There was an error in sending the GA spreadsheets request.');
	};

	request.send();

	</script>

	<!-- Following script is for Google Analytics -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-56660930-1', 'auto');
	  ga('send', 'pageview');
	</script>
	<header id="header" class="show-original-logo solid-header scrolled-header"
	style="padding-top: 10px; padding-bottom: 10px;box-shadow: rgba(0, 0, 0, 0.298039) 0px 0px 3px; background: rgba(255, 255, 255, 0.901961);">
		<div class="centered-wrapper">
			<div class="percent-one-fourth ">
				<div class="logo">
					<a class="original-logo" href="../index.php"><img style="width: 175px; height: 50px;" src="/images/punjab_dialogue.png" alt="AAP Punjab Dialogue"></a>

				</div>
			</div><!--end one-fourth-->
			<div class="percent-three-fourth column-last">
				<nav style="overflow: visible;" id="navigation" class="light-header desktop">
					<div class="menu-one-page-menu-container">
						<ul style="padding-top: 10px;" id="mainnav" class="sf-menu sf-js-enabled sf-arrows">
							<li style="overflow: visible;" id="menu-item-181" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-181"><a class="headnavs" href="../index.php#home"><span>HOME</span></a></li>
							<li style="overflow: visible;" id="menu-item-181" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-181"><a class="headnavs" href="../index.php#about"><span>ABOUT US</span></a></li>
							<li style="overflow: visible;" id="menu-item-182" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-182"><a class="headnavs" href="../index.php#topics"><span>FOCUS AREAS</span></a></li>
							<li style="overflow: visible;" id="menu-item-185" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-185"><a class="headnavs" href="../index.php#contact"><span>CONTACT</span></a></li>
						</ul>
					</div>
				</nav><!--end navigation-->
			</div><!--end three-fourth-->
		</div><!--end centered-wrapper-->
	</header>
	<div id="wrapper">
	<div style="height: 70px;" class="menu-fixer"></div>
		<section class="col-sm-12" style="background-color: rgba(236, 236, 236, 0.36)">
			<article id="page-82" style="padding:0" class="container col-sm-offset-1 col-sm-10 col-lg-offset-2 col-lg-8 begin-content">
				<section class="row" style="border: 1px solid #e3e3e3">
					<div class="row uniform-sides lighter-overlay">
						<div class="vc_span12 wpb_column column_container">
							<div class="col-sm-12 main-header"><h2>Focus Area</h2>
								<h1 id="focusAreaHeader">
									<?php echo $focus_area_details["name"] ?></h1></div>
							<div class="main-content uniform-sides col-sm-12">
								<div class="notification-form-container row">
									 <form id="notification-form" action="../services/get-updates.php" role="form">
										<div class="row form-inline " style="margin-left:15px">
											<div class="row form-group inline-form-group">
												<input name="name" class="form-control" placeholder="Enter Name" id="customerName">

												<input name="email" class="form-control" placeholder="Enter Email" id="customerEmail">

											  <input type="hidden" class="form-control" name="focusarea" id="focusarea" value="Electricity"/>
											  <button type="submit" class="col-sm-4 blue-fixed-btn button"  name="submit" id="btnUpdate" disabled>
												<span name="spinner"></span><span>Loading...</span>
											  </button>
											</div>
										  <div class="row fixed-margin-bottom" style="margin-left:15px">
											  <ul class="error" style="list-style-type: none;" id="notificationErrorMessage"></ul>
											  <label class="message" hidden></label>
										  </div>
										</div>
									</form>
								</div>
								<div id="focusAreaSection" class=" col-sm-12">
									<div class='uil-spin-css' style='-webkit-transform:scale(0.32)'><div><div></div></div><div><div></div></div><div><div></div></div><div><div></div></div><div><div></div></div><div><div></div></div><div><div></div></div><div><div></div></div></div>
								</div>
								<div class="row button-group col-sm-12">
									<a href="#connect" id="registerBtn" class="blue-fixed-btn button" role="button">Register</a>
									<a href="#connect" id="proposalBtn" class="blue-fixed-btn button" role="button">Submit Proposal</a>
								</div>
							</div>
						</div>
					</div>
				</section>
			</article>
		</section>

		<footer class="col-sm-12">
			<div id="connect" style="background-image: url(/images/punjab_people.jpg);background-repeat: no-repeat; background-size:100% 100%; background-attachment: fixed;background-position: 50% 0;">
				<div class="darker-overlay" style="padding-top: 100px;padding-bottom: 100px; background-color: rgba(0,0,0, 0.70);">
					<h1 class="section-title">Register or Submit a Proposal</h1><div style="clear:both; width:100%; height:60px"></div>
					<div class="container">
					<form action="../services/particate.php" id="contact-form" class="form-horizontal">
							<fieldset>
								<div class="row">
									<div class="control-group">
									  <div class="controls inline-radiogroup">
										<div class="btn-group">
											<label class="btn">
												<input type="radio" name="participationOption" style="vertical-align: top; margin-right:5px" value ="Submit Proposal" id="proposalRadioBtn" >Submit Proposal
											</label>
											<label class="btn">
												<input type="radio" name="participationOption" style="vertical-align: top; margin-right:5px" value ="Register For Seminar" id="seminarRadioBtn">Register For Seminar
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
											  <label><input type="checkbox" name="allFocusAreas" id="focusAreaCheckbox0">All</label>
											</div>
											<div class="checkbox">
												<label><input type="checkbox" class="focus-area-checkbox" id="focusAreaCheckbox" name="focusArea[]" value="Youth"> Youth</label>
											</div>
											<div class="checkbox">
												<label><input type="checkbox" class="focus-area-checkbox" id="focusAreaCheckbox" name="focusArea[]" value="Farmers and laborers"> Farmers and laborers</label>
											</div>
											<div class="checkbox">
												<label><input type="checkbox" class="focus-area-checkbox" id="focusAreaCheckbox" name="focusArea[]" value="Women"> Women</label>
											</div>
											<div class="checkbox">
												<label><input type="checkbox" class="focus-area-checkbox" id="focusAreaCheckbox" name="focusArea[]" value="Dalits"> Dalits</label>
											</div>
											<div class="checkbox">
												<label><input type="checkbox" class="focus-area-checkbox" id="focusAreaCheckbox" name="focusArea[]" value="Traders"> Traders</label>
											</div>
											<div class="checkbox">
												<label><input type="checkbox" class="focus-area-checkbox" id="focusAreaCheckbox" name="focusArea[]" value="Industrialists"> Industrialists</label>
											</div>
											<div class="checkbox">
												<label><input type="checkbox" class="focus-area-checkbox" id="focusAreaCheckbox" name="focusArea[]" value="Professionals"> Professionals</label>
											</div>
											<div class="checkbox">
												<label><input type="checkbox" class="focus-area-checkbox" id="focusAreaCheckbox" name="focusArea[]" value="Government Employees"> Government Employees</label>
											</div>
											<div class="checkbox">
												<label><input type="checkbox" class="focus-area-checkbox" id="focusAreaCheckbox" name="focusArea[]" value="Servicemen and Ex-servicemen"> Servicemen and Ex-servicemen</label>
											</div>
											<div class="checkbox">
												<label><input type="checkbox" class="focus-area-checkbox" id="focusAreaCheckbox" name="focusArea[]" value="NRIs"> NRIs</label>
											</div>
											<div class="checkbox">
												<label><input type="checkbox" class="focus-area-checkbox" id="focusAreaCheckbox" name="focusArea[]" value="Agriculture"> Agriculture</label>
											</div>
											<div class="checkbox">
												<label><input type="checkbox" class="focus-area-checkbox" id="focusAreaCheckbox" name="focusArea[]" value="Drug Abuse"> Drug Abuse</label>
											</div>
											<div class="checkbox">
												<label><input type="checkbox" class="focus-area-checkbox" id="focusAreaCheckbox" name="focusArea[]" value="Health"> Health</label>
											</div>
											<div class="checkbox">
												<label><input type="checkbox" class="focus-area-checkbox" id="focusAreaCheckbox" name="focusArea[]" value="Education"> Education</label>
											</div>
											<div class="checkbox">
												<label><input type="checkbox" class="focus-area-checkbox" id="focusAreaCheckbox" name="focusArea[]" value="Transport and Road Safety"> Transport and Road Safety</label>
											</div>
											<div class="checkbox">
												<label><input type="checkbox" class="focus-area-checkbox" id="focusAreaCheckbox" name="focusArea[]" value="Water and Electricity"> Water and Electricity</label>
											</div>
											<div class="checkbox">
												<label><input type="checkbox" class="focus-area-checkbox" id="focusAreaCheckbox" name="focusArea[]" value="Empoyment and Skill Development"> Empoyment and Skill Development</label>
											</div>
											<div class="checkbox">
												<label><input type="checkbox" class="focus-area-checkbox" id="focusAreaCheckbox" name="focusArea[]" value="Police Reform"> Police Reform</label>
											</div>
											<div class="checkbox">
												<label><input type="checkbox" class="focus-area-checkbox" id="focusAreaCheckbox" name="focusArea[]" value="Mafias and corruption"> Mafias and corruption</label>
											</div>
											<div class="checkbox">
												<label><input type="checkbox" class="focus-area-checkbox" id="focusAreaCheckbox" name="focusArea[]" value="Industry and Trade"> Industry and Trade</label>
											</div>
											<div class="checkbox">
												<label><input type="checkbox" class="focus-area-checkbox" id="focusAreaCheckbox" name="focusArea[]" value="Housing and Real Estate"> Housing and Real Estate</label>
											</div>
											<div class="checkbox">
												<label><input type="checkbox" class="focus-area-checkbox" id="focusAreaCheckbox" name="focusArea[]" value="Fiscal Reforms"> Fiscal Reforms</label>
											</div>
										</div>
										<label class="control-label" for="focusAreaCheckbox"></label>
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
									<div class="control-group col-xs-12 col-sm-12 col-md-6">
									  <div class="controls">
										 <div class="g-recaptcha" data-sitekey="6LfDHR4TAAAAAK3tAB55qyZVu7Kcvx53H6W9Dk2m"></div>
									  </div>
									</div>
									<div class="form-actions col-xs-12 col-sm-12 col-md-6">
										<button type="reset" id="btnClear" class="btn btn-lg btn-black" disabled>Loading...</button>
									  <button type="submit" id="btnSend" class="btn btn-lg btn-black" disabled><span name="spinner"></span><span>Loading...</span></button>
									</div>
								</div>
							  </fieldset>
							 <label class="col-sm-12 message" hidden></label>
						</form>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="../js/main.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>

	<script>
		 $(document).ready(function(){
		 	var onloadPopupContainer = $('#basicModal');
			if(onloadPopupContainer.length > 0 && onloadPopupContainer.attr("aria-hidden") === "false") {
				// Show model once per session after 60 seconds
				setTimeout(function(){
					Dialouge.WindowUtils.openPageLoadPopup('#basicModal');
				}, 60000);
			}
			var focusAreaPage = Dialouge.FocusAreaPage("#focusAreaHeader", "#focusAreaSection", ".focus-area-checkbox");
			focusAreaPage.initOrganizationTypeFields("#orgTypeLbl", "#orgType");

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
			$("#btnUpdate").removeAttr("disabled");
			$( "#btnUpdate" ).children().last().text("Get Update");
			$("#btnSend").removeAttr("disabled");
			$( "#btnSend").children().last().text("Send");
			$("#btnClear").removeAttr("disabled");
			$( "#btnClear" ).text("Clear");
		});
	</script>
</body>
</html>
