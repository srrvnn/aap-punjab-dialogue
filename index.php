<?php session_start(); ?>
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
	<meta property="og:url" content="//www.punjabdialogue.in/" />
	<meta property="og:image" content="//www.punjabdialogue.in/images/header_1920_1080.jpg" />
	<meta property="og:description" content="Punjab Dialogue is an initiative to build a realistic and practical plan to achieve the vision. 12 focus areas like youth, farmers, women have been identified. This initiative will engage domain experts from various fields to build plans for different focus areas."/>
	<meta property="fb:app_id" content="1540899709487892" />

	<!-- Custom Favicon -->
	<link rel="shortcut icon" href="files/favicon.ico" type="image/x-icon">
	<link rel="icon" href="files/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/header.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/main.css" type="text/css" media="all">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="js/picturefill.js"></script>
</head>

<body style="width: auto;" class="home page page-id-82 page-template page-template-template-homepage-php wpb-js-composer js-comp-ver-4.0.4 vc_responsive">
<!-- Following script is for Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56660930-1', 'auto');
  ga('send', 'pageview');
</script>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

<script>

var request = new XMLHttpRequest();

request.open('GET', 'https://spreadsheets.google.com/feeds/list/15Kc87FXPUjLQqjgWeY4zrnvRJlqEINDiimgXFoWxsn8/od6/public/values?alt=json', true);

request.onload = function() {

  if (request.status >= 200 && request.status < 400) {

    var data = JSON.parse(request.responseText);
    var focusAreas = data.feed.entry;

    var focusAreasList = document.createDocumentFragment();
    var focusAreasInfo = document.createDocumentFragment();

    var focusAreaShortTemplate = document.getElementById('focus-area-short-template');

    focusAreas.forEach(function(focusArea) {

    	// add name to the list

    	var li = document.createElement('li');
    	li.innerHTML = focusArea.gsx$name.$t;

    	focusAreasList.appendChild(li);

    	// add name and short desc to the big list

    	var div = focusAreaShortTemplate.content.cloneNode(true);

    	div.querySelector('.focus-area-short-name').innerHTML = focusArea.gsx$name.$t;
    	div.querySelector('.focus-area-short-shortdesc').innerHTML = focusArea.gsx$shortdesc.$t;
    	div.querySelector('.focus-area-short-anchor').href = 'focus-area/index.php?id=' + focusArea.gsx$section.replace('focus-area-','');

    	focusAreasInfo.appendChild(div);
    });

    document.getElementById('aboutTopicList').appendChild(focusAreasList);
    document.getElementById('focus-area-short').appendChild(focusAreasInfo);

  } else {

  	console.log('There was a server error accessing the GA spreadsheets.');
  }
};

request.onerror = function() {

  console.log('There was an error in sending the GA spreadsheets request.');
};

request.send();

</script>

<div id="fb-root"></div>
<header id="header" class="show-original-logo solid-header scrolled-header"
	style="padding-top: 10px; padding-bottom: 10px;box-shadow: rgba(0, 0, 0, 0.298039) 0px 0px 3px; background: rgba(255, 255, 255, 0.901961);">
		<div class="centered-wrapper">
			<div class="percent-one-fourth ">
				<div class="logo">
					<a class="original-logo" href="#home"></a>
						<span style="height: 50px; max-width: 447px"  data-picture data-alt="AAP Punjab Dialogue">
							<span data-src="images/punjab_dialogue.png"></span>

							<!-- Smartphones (portrait) -->
							<!-- <span data-src="images/punjab_dialogue.png" data-media="only screen and (max-device-width : 480px) and (max-device-height : 768px) and (orientation : portrait)"></span> -->

							<!--[if (lt IE 9) & (!IEMobile)]>
								<span data-src="images/punjab_dialogue.png"></span>
							<![endif]-->

							<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
							<noscript>
								<img src="images/punjab_dialogue.png" alt="AAP Punjab Dialogue">
							</noscript>
						</span>
				</div>
			</div><!--end one-fourth-->

			<div class="percent-three-fourth column-last">
				<nav style="overflow: visible;" id="navigation" class="light-header desktop">
					<div class="menu-one-page-menu-container">
						<ul style="padding-top: 10px;" id="mainnav" class="sf-menu sf-js-enabled sf-arrows">
							<li style="overflow: visible;" id="menu-item-181" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-181"><a class="headnavs" href="#home"><span>HOME</span></a></li>
							<li style="overflow: visible;" id="menu-item-181" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-181"><a class="headnavs" href="#intro"><span>INTRO</span></a></li>
							<li style="overflow: visible;" id="menu-item-182" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-182"><a class="headnavs" href="#topics"><span>FOCUS AREAS</span></a></li>
							<li style="overflow: visible;" id="menu-item-185" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-185"><a class="headnavs" href="#contact"><span>CONTACT</span></a></li>
							<li style="overflow: hidden;padding-left:20px" id="menu-item-186" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-186">
								<div class="fb-like" data-href="https://www.facebook.com/punjabdialogue/" data-layout="button" data-action="like" data-show-faces="false" data-share="false"></div>
							</li>
							<li style="overflow: hidden;padding-left:25px;padding-top:2px;" id="menu-item-187" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-186">
							<a href="https://twitter.com/pbdialogue" class="twitter-follow-button" data-show-count="false">Follow @pbdialogue</a>
							</li>
						</ul>
					</div>
				</nav><!--end navigation-->
			</div><!--end three-fourth-->
		</div><!--end centered-wrapper-->
	</header>

	<div id="wrapper">
		<div id="home"></div><div style="height: 70px;" class="menu-fixer"></div>
		<section>
			<span class="mainImg" data-picture data-alt="Welcome To Punjab Dialoge">
				<span data-src="images/header_1920_1080.jpg"></span>

				<!-- Smartphones (landscape) -->
				<span data-src="images/header_1920_1080.jpg" data-media="only screen and (max-device-height : 480px) and (max-device-width : 768px) and (orientation : landscape)"></span>

				<!-- Smartphones (portrait) -->
				<span data-src="images/header_400_640.jpg" data-media="only screen and (max-device-width : 480px) and (max-device-height : 768px) and (orientation : portrait)"></span>

				<!-- Tablets (landscape) -->
				<span data-src="images/header_1920_1080.jpg" data-media="only screen and (min-device-height : 481px) and (max-device-width : 1280px) and (orientation : landscape)"></span>

				<!-- Tablets (portrait) -->
				<span data-src="images/header_400_640.jpg" data-media="only screen and (min-device-width : 481px) and (max-device-height : 1280px) and (orientation : portrait)"></span>

				<!-- Desktops and laptops -->
				<span data-src="images/header_1920_1080.jpg" data-media="only screen and (min-width : 1025px) and (max-width: 1600px)"></span>

				<!-- Desktops and laptops -->
				<span data-src="images/header_1920_1080.jpg" data-media="only screen and (min-width : 1601px) and (max-width: 1920px)"></span>

				<!-- Exrta Large screens -->
				<span data-src="images/header_1920_1080.jpg" data-media="only screen and (min-width : 1921px)"></span>

				<!--[if (lt IE 9) & (!IEMobile)]>
					<span data-src="images/header_1920_1080.jpg"></span>
				<![endif]-->

				<!-- Fallback content for non-JS browsers. Same img src as the initial, unqualified source element. -->
				<noscript>
					<img src="images/header_1920_1080.jpg" alt="Welcome To Punjab Dialogue">
				</noscript>
			</span>
			<div class="visiontext">
			 	<span id="vision">It all starts with a vision</span><br />
			</div>
			<div class="watch-intro"><a href="#intro" class="autoScroll">
						<span class="btn-xl btn-orange round">Read Intro</span>
					</a>
				</div>

			<div id="intro">
				<div class="lighter-overlay" style="padding-left: 10vw;padding-right: 10vw;padding-top: 100px;padding-bottom: 100px; background-color: rgba(255,255,255, 1);">
					<div class="wpb_wrapper">
						<h1 class="section-title">INTRODUCING PUNJAB DIALOGUE</h1>
						<div class="aboutText">
							<h1>
								Bring prosperity to Punjab in 5 years
							</h1>
							<p style="font-family: margin: 'Lucida Sans', 'Lucida Grande', Arial, Helvetica, sans-serif;   font-size: 16px">

								Punjab, once the state with the highest per capita income in India, is today besotted with widespread drug abuse and a severe agrarian crisis. There is deep-rooted corruption in the government and the current political leadership has established mafias in almost every sphere of public life.
							</p>
							<p>Aam Aadmi Party's vision is to bring prosperity back to Punjab and provide governance, policies and facilities as per world class standards. Punjab Dialogue is an initiative to build a realistic and practical plan to achieve this vision.</p>
							<p>Many focus groups like youth, farmers, women, Dalits, traders and many focus areas like agriculture, industry, education, health and job creation have been identified. Consultations will be held with experts in these sectors and with citizens of Punjab to identify critical problems and arrive at practical solutions.</p>
							<p>Together, we will chart out a vision for a new Punjab.</p>

							<div style="margin: 30px 0; text-align: center">

							<a href="#topics"><button style="margin-right: 25px; margin-top: 10px;" type="button" class="btn-lg btn-blue round"><span style="margin-left: 5px; float:right" class="glyphicon glyphicon-arrow-right"></span>Focus Areas</button></a>

							<a href="#contact"><button style="margin-right: 25px; margin-top: 10px;" type="button" class="btn-lg btn-blue round"><span style="margin-left: 5px; float:right" class="glyphicon glyphicon-arrow-right"></span>Contact</button></a>

							</div>

							<ul id="aboutTopicList"></ul>

						</div>
					</div>
				</div>
			</div>
			<div id="topics">
				<br/>
				<div class="lighter-overlay" style="padding-left: 10vw;padding-right: 10vw;padding-top: 100px;padding-bottom: 100px; background-color: rgba(255,255,255, 1);">
					<div class="wpb_wrapper">
						<h1 class="section-title">FOCUS AREAS</h1>

						<!-- TEMPLATE FOR SHORT DESC, USED BY JS -->

						<template id="focus-area-short-template">
						    <div class= "row issue">
						    	<div class="issueSummary col-xm-12 col-sm-12">
						    		<span class="focus-area-short-name"><span><br/>
						    		<span class="focus-area-short-shortdesc"></span>
						    	</div>
						    	<div class="issueDetails col-sm-3 col-xm-12" >
						    		<a class="focus-area-short-anchor" href="">
						    			<div class="dt-service-wrapper discovermore">
						    				<div class="dt-service-item">
						    					DISCOVER MORE  <img src="files/discovermore.png">
						    				</div>
						    			</div>
						    		</a>
						    	</div>
						    </div>
						</template>

						<!-- /TEMPLATE -->

						<div id="focus-area-short">
							<div class= 'row issue'>
								<div class="issueSummary col-xm-12 col-sm-12">
									<span><b>Youth</b><br/>
										Punjabi youth need to be empowered so that they can lead the state and country into a new era of progress. The drug mafia must be eliminated from Punjab, and gainful employment opportunities created.
									</span>
								</div>
								<div class="issueDetails col-sm-3 col-xm-12" >
									<a href="focus-area/index.php?id=1">
										<div class="dt-service-wrapper discovermore">
											<div class="dt-service-item">
												DISCOVER MORE  <img src="files/discovermore.png">
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class= 'row issue'>
								<div class="issueSummary col-xm-12 col-sm-12">
									<!-- <img src="images/Employment.jpg" class="img-responsive" alt="Jobs and Employment"> -->
									<span><b>Farmers and laborers</b><br/>
										Punjab is the bread basket of India, and yet the Punjabi famer is forced to commit suicides. The farmers of Punjab should be lifted out of debt, and the farming profession should become more profitable.
									</span>
								</div>
								<div class="issueDetails col-sm-3 col-xm-12" >
									<a href="focus-area/index.php?id=2">
										<div class="dt-service-wrapper discovermore">
											<div class="dt-service-item">
												DISCOVER MORE  <img src="files/discovermore.png">
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class= 'row issue'>
								<div class="issueSummary col-xm-12 col-sm-12">
									<!-- <img src="images/Employment.jpg" class="img-responsive" alt="Jobs and Employment"> -->
									<span><b>Women</b><br/>
										Punjab should have stringent laws to uphold women’s rights at the workplace and at home. We envision a Punjab in which women will be acknowledged and treated as equal citizens in their own right.
									</span>
								</div>
								<div class="issueDetails col-sm-3 col-xm-12" >
									<a href="focus-area/index.php?id=3">
										<div class="dt-service-wrapper discovermore">
											<div class="dt-service-item">
												DISCOVER MORE  <img src="files/discovermore.png">
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class= 'row issue'>
								<div class="issueSummary col-xm-12 col-sm-12">
									<!-- <img src="images/Employment.jpg" class="img-responsive" alt="Jobs and Employment"> -->
									<span><b>Dalits</b><br/>
										Punjab has the highest proportion of Dalits of all states in India. Dalits must be treated as equal citizens and all measures should be taken for their welfare and social upliftment.
									</span>
								</div>
								<div class="issueDetails col-sm-3 col-xm-12" >
									<a href="focus-area/index.php?id=4">
										<div class="dt-service-wrapper discovermore">
											<div class="dt-service-item">
												DISCOVER MORE  <img src="files/discovermore.png">
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class= 'row issue'>
								<div class="issueSummary col-xm-12 col-sm-12">
									<!-- <img src="images/Employment.jpg" class="img-responsive" alt="Jobs and Employment"> -->
									<span><b>Traders</b><br/>
										Punjab has a huge trading community, who are running their businesses despite all odds. The tax regime must be simplified and made friendlier, and the state should provide an environment where it is easy to open and operate new businesses legally.
									</span>
								</div>
								<div class="issueDetails col-sm-3 col-xm-12" >
									<a href="focus-area/index.php?id=5">
										<div class="dt-service-wrapper discovermore">
											<div class="dt-service-item">
												DISCOVER MORE  <img src="files/discovermore.png">
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class= 'row issue'>
								<div class="issueSummary col-xm-12 col-sm-12">
									<!-- <img src="images/Employment.jpg" class="img-responsive" alt="Jobs and Employment"> -->
									<span><b>Industrialists</b><br/>
										The manufacturing and other industries need to be stimulated to set up shop in Punjab so as to boost the economic growth rate and employment. The power tariffs and tax rates must be rationalized and made competitive with neighbouring states.
									</span>
								</div>
								<div class="issueDetails col-sm-3 col-xm-12" >
									<a href="focus-area/index.php?id=6">
										<div class="dt-service-wrapper discovermore">
											<div class="dt-service-item">
												DISCOVER MORE  <img src="files/discovermore.png">
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class= 'row issue'>
								<div class="issueSummary col-xm-12 col-sm-12">
									<!-- <img src="images/Employment.jpg" class="img-responsive" alt="Jobs and Employment"> -->
									<span><b>Professionals</b><br/>
										Punjab has a large number of doctors, lawyers and other professionals whose rights must be protected, and an environment provided where they can execute their duties without feeling threatened.
									</span>
								</div>
								<div class="issueDetails col-sm-3 col-xm-12" >
									<a href="focus-area/index.php?id=7">
										<div class="dt-service-wrapper discovermore">
											<div class="dt-service-item">
												DISCOVER MORE  <img src="files/discovermore.png">
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class= 'row issue'>
								<div class="issueSummary col-xm-12 col-sm-12">
									<!-- <img src="images/Employment.jpg" class="img-responsive" alt="Jobs and Employment"> -->
									<span><b>Government Employees</b><br/>
										Government employees in Punjab should be provided with the basic social security and welfare schemes, especially after retirement.
									</span>
								</div>
								<div class="issueDetails col-sm-3 col-xm-12" >
									<a href="focus-area/index.php?id=8">
										<div class="dt-service-wrapper discovermore">
											<div class="dt-service-item">
												DISCOVER MORE  <img src="files/discovermore.png">
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class= 'row issue'>
								<div class="issueSummary col-xm-12 col-sm-12">
									<!-- <img src="images/Employment.jpg" class="img-responsive" alt="Jobs and Employment"> -->
									<span><b>Servicemen and Ex-servicemen</b><br/>
										The brave soldiers from Punjab who serve our country deserve our deepest respect and a special place in the society. Punjab should have a special grievance cell for their needs and they should be offered priority service in public matters.
									</span>
								</div>
								<div class="issueDetails col-sm-3 col-xm-12" >
									<a href="focus-area/index.php?id=9">
										<div class="dt-service-wrapper discovermore">
											<div class="dt-service-item">
												DISCOVER MORE  <img src="files/discovermore.png">
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class= 'row issue'>
								<div class="issueSummary col-xm-12 col-sm-12">
									<!-- <img src="images/Employment.jpg" class="img-responsive" alt="Jobs and Employment"> -->
									<span><b>NRIs</b><br/>
										The Punjabi NRI community is a vast asset for the state. They should be engaged with the development process, tapping their expertise in various walks of life. Their concerns should be properly addressed.
									</span>
								</div>
								<div class="issueDetails col-sm-3 col-xm-12" >
									<a href="focus-area/index.php?id=10">
										<div class="dt-service-wrapper discovermore">
											<div class="dt-service-item">
												DISCOVER MORE  <img src="files/discovermore.png">
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class= 'row issue'>
								<div class="issueSummary col-xm-12 col-sm-12">
									<!-- <img src="images/Employment.jpg" class="img-responsive" alt="Jobs and Employment"> -->
									<span><b>Agriculture</b><br/>
										Agriculture in Punjab should be made more profitable to eliminate farm debt. Crop diversification, dairy farming and other allied agricultural activities need to be spread in a big way. There is also an urgent to make agriculture sustainable.
									</span>
								</div>
								<div class="issueDetails col-sm-3 col-xm-12" >
									<a href="focus-area/index.php?id=11">
										<div class="dt-service-wrapper discovermore">
											<div class="dt-service-item">
												DISCOVER MORE  <img src="files/discovermore.png">
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class= 'row issue'>
								<div class="issueSummary col-xm-12 col-sm-12">
									<!-- <img src="images/Employment.jpg" class="img-responsive" alt="Jobs and Employment"> -->
									<span><b>Drug Abuse</b><br/>
										The widespread drug abuse among Punjabis needs to be eliminated. A large number of rehabilitation centers which provide quality care should be established.
									</span>
								</div>
								<div class="issueDetails col-sm-3 col-xm-12" >
									<a href="focus-area/index.php?id=12">
										<div class="dt-service-wrapper discovermore">
											<div class="dt-service-item">
												DISCOVER MORE  <img src="files/discovermore.png">
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class= 'row issue'>
								<div class="issueSummary col-sm-12 col-xm-12">
									<!-- <img src="images/Industry.jpg" class="img-responsive" alt="Enterprise: Trade and Industry"> -->
									<span>
										<b>Health</b><br/>
										Quality healthcare should be available locally and cheaply to all citizens. Punjab should have high quality public hospitals with modern, latest technology.
									</span>
								</div>
								<div class="issueDetails col-sm-3 col-xm-12">
									<a href="focus-area/index.php?id=13">
										<div class="dt-service-wrapper discovermore">
											<div class="dt-service-item">
												DISCOVER MORE  <img src="files/discovermore.png">
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class='row issue'>
								<div class="issueSummary col-sm-12 col-xm-12">
									<!-- <img src="images/Women.jpg" class="img-responsive" alt="Women Rights (Safety)"> -->
									<span>
										<b>Education</b><br/>
										Punjab should have government schools that are better than private schools. Colleges and universities for higher education should be modern and teach the latest curricule to bolster employability of graduates.
									</span>
								</div>
								<div class="issueDetails col-sm-3 col-xm-12">
									<a href="focus-area/index.php?id=14">
										<div class="dt-service-wrapper discovermore">
											<div class="dt-service-item">
												DISCOVER MORE  <img src="files/discovermore.png">
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class='row issue'>
								<div class="issueSummary col-sm-12 col-xm-12">
									<!-- <img src="images/Sanitation.jpg" class="img-responsive" alt="Sanitation and Solid Waste Mgmt"> -->
									<span>
										<b>Transport and Road Safety</b><br/>
										The existing inter-state government network of buses in Punjab should be strengthened and new modern buses acquired. The cities and villages must have proper public transport facilities.
									</span>
								</div>
								<div class="issueDetails col-sm-3 col-xm-12">
									<a href="focus-area/index.php?id=15">
										<div class="dt-service-wrapper discovermore">
											<div class="dt-service-item">
												DISCOVER MORE  <img src="files/discovermore.png">
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class='row issue'>
								<div class="issueSummary col-sm-12 col-xm-12">
									<!-- <img src="images/SocialWelfare.jpg" class="img-responsive" alt="Social Welfare and Social Justice"> -->
									<span>
										<b>Water and Electricity</b><br/>
										Every home in Punjab should have access to clean water. The ground water levels should be replenished to healthy levels. There should be 24*7 supply of quality electricity to every home and business in Punjab.
									</span>
								</div>
								<div class="issueDetails col-sm-3 col-xm-12">
									<a href="focus-area/index.php?id=16">
										<div class="dt-service-wrapper discovermore">
											<div class="dt-service-item">
												DISCOVER MORE  <img src="files/discovermore.png">
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class='row issue'>
								<div class="issueSummary col-sm-12 col-xm-12">
									<!-- <img src="images/Transport.jpg" class="img-responsive" alt="Transport"> -->
									<span>
										<b>Empoyment and Skill Development</b><br/>
										Punjab should provide employment opportunities for all its youth across various sectors. Small businesses need to be encouraged as a viable employment opportunity. Manufacturing industry needs to be revived with vigour.
									</span>
								</div>
								<div class="issueDetails col-sm-3 col-xm-12">
									<a href="focus-area/index.php?id=17">
										<div class="dt-service-wrapper discovermore">
											<div class="dt-service-item">
												DISCOVER MORE  <img src="files/discovermore.png">
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class='row issue'>
								<div class="issueSummary col-sm-12 col-xm-12">
									<!-- <img src="images/Electricity.jpg" class="img-responsive" alt="Energy and Electricity"> -->
									<span>
										<b>Police Reform</b><br/>
										Punjab Police is an asset that if properly used can bring wonders to the state. All appointments in police should be made non-political and the police force should be modernized with latest technology.
									</span>
								</div>
								<div class="issueDetails col-sm-3 col-xm-12">
									<a href="focus-area/index.php?id=18">
										<div class="dt-service-wrapper discovermore">
											<div class="dt-service-item">
												DISCOVER MORE  <img src="files/discovermore.png">
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class='row issue'>
								<div class="issueSummary col-sm-12 col-xm-12">
									<!-- <img src="images/Education.jpg" class="img-responsive" alt="Education"> -->
									<span>
										<b>Mafias and corruption</b><br/>
										The deep rooted corruption in Punjab needs to end immediately. The mafia raj established by the Akalis in all spheres of public activity must be demolished.
									</span>
								</div>
								<div class="issueDetails col-sm-3 col-xm-12">
									<a href="focus-area/index.php?id=19">
										<div class="dt-service-wrapper discovermore">
											<div class="dt-service-item">
												DISCOVER MORE  <img src="files/discovermore.png">
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class='row issue'>
								<div class="issueSummary col-sm-12 col-xm-12">
									<!-- <img src="images/Health.jpg" class="img-responsive" alt="Health"> -->
									<span>
										<b>Industry and Trade</b><br/>
										Punjab should be a premier services hub and trading zone with excellent infrastructure. Laws should be simplified and entrepreneurship should be incentivized. Additionally, establishing a new company in Punjab should be straightforward.
									</span>
								</div>
								<div class="issueDetails col-sm-3 col-xm-12">
									<a href="focus-area/index.php?id=20">
										<div class="dt-service-wrapper discovermore">
											<div class="dt-service-item">
												DISCOVER MORE  <img src="files/discovermore.png">
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class='row issue'>
								<div class="issueSummary col-sm-12 col-xm-12">
									<!-- <img src="images/Housing.jpg" class="img-responsive" alt="Land and Housing"> -->
									<span>
										<b>Housing and Real Estate</b><br/>
										Punjab should have transparent land allotment policies and infrastructure guidelines. Rights of home buyers should be protected, while giving incentivizing developers to deliver quality products on time.
									</span>
								</div>
								<div class="issueDetails col-sm-3 col-xm-12">
									<a href="focus-area/index.php?id=21">
										<div class="dt-service-wrapper discovermore">
											<div class="dt-service-item">
												DISCOVER MORE  <img src="files/discovermore.png">
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class='row issue'>
								<div class="issueSummary col-sm-12 col-xm-12">
									<!-- <img src="images/Rural.jpg" class="img-responsive" alt="Rural Delhi"> -->
									<span>
										<b>Fiscal Reforms</b><br/>
										The massive debt on the Punjab state government must be handled with utmost importance. A prudent fiscal policy should be introduced, and new loans should be raised mostly on the capital account and not on the revenue account.
									</span>
								</div>
								<div class="issueDetails col-sm-3 col-xm-12">
									<a href="focus-area/index.php?id=22">
										<div class="dt-service-wrapper discovermore">
											<div class="dt-service-item">
												DISCOVER MORE  <img src="files/discovermore.png">
											</div>
										</div>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="contact" style="margin-bottom: 70px;"></div>
			<div style="background-image: url(images/punjab_people.jpg);background-repeat: no-repeat;background-size:100% 100%; background-attachment: fixed;background-position: 50% 0;">
				<div class="darker-overlay" style="padding-top: 50px;padding-bottom: 0px; background-color: rgba(0,0,0, 0.70);">
					<h1 class="section-title">Send us a Message</h1><div style="clear:both; width:100%; height:30px"></div>
<div class="col-sm-12">
						<div class="col-sm-offset-1 col-sm-5">

							<ul class="contact-info" style="color:white !important;">
								<li><h2><span>Aam Aadmi Party Punjab Dialogue Team</span></h2></li>
								<li><h3><span class="glyphicon glyphicon-envelope"></span> aappunjabdialogue@gmail.com </h3></li>
								<li><h3><a href="https://www.facebook.com/punjabdialogue"><img height="24px" src="files/facebook.gif">facebook.com/punjabdialogue</a></h3></li>
								<li><h3><a href="https://www.twitter.com/pbdialogue"><img height="24px" src="files/twitter.png">twitter.com/pbdialogue</a></h3></li>
								<div style="clear:both; width:100%; height:10px"></div>
							</ul>

						</div>

						<div class="col-offset-sm-1 col-sm-5" style="padding-top:30px">
						<form action="services/contact-us.php" id="contact-form" class="form-horizontal">
							<fieldset>
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
								<div class="control-group col-sm-12">
								  <div class="controls">
									<textarea class="input-xlarge" name="message" id="message" placeholder="Message" rows="3"></textarea>
								  </div>
								</div>
								<div class="control-group col-xs-12 col-sm-12 col-md-6">
								  <div class="controls">
								  	<div class="g-recaptcha" data-sitekey="6LfDHR4TAAAAAK3tAB55qyZVu7Kcvx53H6W9Dk2m"></div>
								  </div>
								</div>
								<div class="form-actions col-xs-12 col-sm-12 col-md-6">
									<button type="reset" id="btnClear" class="btn btn-lg btn-black" disabled>Loading...</button>
									<button type="submit" id="btnSend" class="btn btn-lg btn-black" disabled><span name="spinner"></span><span>Loading...</span></button>
								</div>
							  </fieldset>

							  <label class="col-sm-12 message" hidden></label>
						</form>
						</div>
					</div>
					<div style="clear:both; width:100%; height:85px"></div>
				</div>
			</div>
		</section>
	</div><!--end wrapper-->
<footer id="footer" style="padding-top: 22px; padding-bottom: 15px">
		<div id="bottomfooter" style="height: 35px;">
			<div class="centered-wrapper">
				<div class="percent-two-third" style="padding-top: 5px; margin-bottom: 0px">
					<p>Copyright 2014 - Aam Aadmi Party. All Rights Reserved</p>
				</div><!--end percent-two-third-->

				<div class="percent-one-third column-last">
					<ul id="social">
						<li><a href="https://www.facebook.com/punjabdialogue" title="facebook" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
						</li><li><a href="https://www.twitter.com/pbdialogue" title="twitter" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
					</ul>

				</div><!--end percent-one-third-->
			</div><!--end centered-wrapper-->
		</div><!--end bottomfooter-->

		<a href="#" class="totop"><i class="fa fa-angle-double-up"></i></a>

	</footer>

<div style="display: none;" id="fit-vids-style" class="fit-vids-style">­<style>.fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}</style></div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>

<script src="./js/main.js"></script>

<script type="text/javascript">
/* <![CDATA[ */
var dt_loader = {"bcolor":""};
/* ]]> */
</script>
<script type="text/javascript">
/* <![CDATA[ */
var dt_styles = {"header_bg":"255,255,255","header_scroll_opacity":"90","default_color":"#ffffff","logo_width":"100","logo_height":"35","init_pt":"55","init_pb":"25","scroll_pt":"15","scroll_pb":"15","scrolling_effect":"1"};
/* ]]> */

ready = 0;
$(document).ready(function() {
	var onloadPopupContainer = $('#basicModal');
	if(onloadPopupContainer.length > 0 && onloadPopupContainer.attr("aria-hidden") === "false") {
		// Show model once per session after 90 seconds
		setTimeout(function(){
			Dialouge.WindowUtils.openPageLoadPopup('#basicModal');
		}, 90000);
	}
	ready =1;
	$('a').click(function(){
		var autoScroll = false;
		if($(this).hasClass( "headnavs" )) {
			// A link in navigation header is clicked
			var parent = $(this).parent();
			parent.siblings().each(function(index, field) {
				// Get each header link
				var aLink = $(field).children( ".headnavs" );
				// mark all other header elements/links as inactive
				aLink.removeClass("current");
			});
			var aLink = parent.children( ".headnavs" );
			// Mark this link as active
			aLink.addClass("current");
			autoScroll = true;
		} else if($(this).hasClass( "autoScroll" )) {
			autoScroll = true;
		}
		if(autoScroll) {
			// Scroll to the right page
			$('html, body').animate({
			  scrollTop: $( $.attr(this, 'href') ).offset().top
			}, 1000);
			return false;
		}
	});
	var contactUsFormValidator = Dialouge.FormValidator('#contact-form');

	// Validate all inputs and call Dialouge.MainPage.contactUsCallBack() if all inputs are valid.
	contactUsFormValidator.addValidator(Dialouge.MainPage.contactUsCallBack);
	$("#btnSend").removeAttr("disabled");
	$( "#btnSend").children().last().text("Send");
	$("#btnClear").removeAttr("disabled");
	$( "#btnClear" ).text("Clear");
	$( "#btnClear" ).text("Clear");
});
</script>

</body>
</html>
