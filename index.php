<!DOCTYPE html>
<html class=" js webgl no-touch rgba opacity cssanimations csstransforms csstransforms3d csstransitions js_active  vc_desktop  vc_transform " lang="en-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<!-- mobile meta tag -->		
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title>Delhi Dialogue </title>

	<!-- Custom Favicon -->
	<link rel="icon" type="image/png" href="files/icon.ico">			
	<link rel="stylesheet" id="rs-plugin-settings-css" href="files/settings.css" type="text/css" media="all">
	<link rel="stylesheet" id="dt-default-style-css" href="files/style.css" type="text/css" media="all">
	<link rel="stylesheet" id="dt-default-style-css" href="files/mainstyle.css" type="text/css" media="all">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<script>

ready = 0;
$(document).ready(function() {
	ready =1;
	$('a').click(function(){
		  $('html, body').animate({
		      scrollTop: $( $.attr(this, 'href') ).offset().top
		  }, 1000);
		  return false;
	});
	onReady()
});

qLoverlayonLoad = function() {
	document.getElementById('qLoverlay').innerHTML('<div id="spinner"></div>');
};

function onReady(callback) {
    var intervalID = window.setInterval(checkReady, 500);
    function checkReady() {
        if (ready) {
            window.clearInterval(intervalID);
    				show('qLoverlay', false);
	    }
    }
}

function show(id, value) {
    document.getElementById(id).style.display = value ? 'block' : 'none';
}


</script>

</head>

<body>

	<div style="display: block;" id="qLoverlay">
		<div id="spinner" style="background-image:url('files/icon.ico');">
		</div>
	</div>
	<header id="header">
		<a class="original-logo" href="#hello" style="display:inline; padding:30px 30px 30px 30px;"><img style="width: auto; height: 13vh;" src="files/DDLogo2.jpg" alt="AAP Logo"></a>
		<div style="display:inline">
			<ul style="padding-top: 25px;" id="mainnav">
				<li class="headnavs" style="overflow: visible;"><a href="#hello"><span>HOME</span></a></li>
				<li class="headnavs" style="overflow: visible;"><a href="#about"><span>ABOUT US</span></a></li>
				<li class="headnavs" style="overflow: visible;"><a href="#topics"><span>FOCUS AREAS</span></a></li>
				<li class="headnavs" style="overflow: visible;"><a href="#schedule"><span>SCHEDULE</span></a></li>
				<li class="headnavs" style="overflow: visible;"><a href="#contact"><span>CONTACT</span></a></li>
			</ul>
		</div>				
	</header>		

	<div id="hello" style="height: 15vh;"></div>
	<img class="defaultimg" src="files/slide44.jpg" style="height:100vh;width:100vw"></img>
	<div  class="visiontext">
	 	<span id="vision">It all starts with a vision</span><br />
		<div class="playintro">											
			<a class="oval" style="background-color:orange;" href="#intro">
				<span>Watch Intro</span>
			</a>
		</div>
	</div>


	<div id="intro" style="margin-top: 10px; overflow:auto;padding-top: 25vh;">
		<div class="col-sm-8 col-sm-offset-2" style="padding: 30px 15px; background-color: rgba(250,250,250);border: #e6e6e6 1px solid;">
			<div>
				<div class="col-sm-6">
					<iframe width="100%" height="350" src="//www.youtube.com/embed/gq0V8rQ5nVY?wmode=transparent&amp;wmode=transparent" frameborder="0" allowfullscreen="" wmode="Opaque"></iframe>
				</div>
				<div class="col-sm-6">
					<h1 style="font-size: 66px;  line-height: 66px;	color: #f78d1e; font-family: Corbel, 'Myriad Pro', 'Lucida Sans', 'Lucida Grande', Arial, Helvetica, sans-serif;font-weight: 600;	margin-top: 0;">
						Make Delhi world class city in 5 years
					</h1>
					<p style="font-family: 'Lucida Sans', 'Lucida Grande', Arial, Helvetica, sans-serif;   font-size: 18px;  margin-top:30px;   padding-top: 20px;">
						Our vision is to make Delhi world class city in 5 years. Delhi Dialogue is an initiative to build realistic and practical plan to achieve the vision. 12 focus areas like education, industry, women safety etc have been identified. Experts will be involved through seminars & conferences (including researchers, social organizations, bureacrats etc).Citizens are also encouraged to participate.
					</p>
				</div> 
				
			</div>
			<div>
				<div class="col-sm-6 col-sm-offset-6">
					<a href="#topics"><button style="margin-right: 25px; margin-top: 25px;" type="button" class="btn-blue"><span style="margin-left: 5px; float:right" class="glyphicon glyphicon-arrow-right"></span>Focus Areas</button></a>
					<a href="#schedule"><button style="margin-top: 25px;background-color:" type="button" class="btn-blue"><span style="margin-left: 5px; float:right" class="glyphicon glyphicon-arrow-right"></span>Schedule</button></a>
				</div>
			</div>
		</div>
	</div> 




	<div id="about" style="overflow:auto">
		<h1 class="section-Title aboutus-title"><span>ABOUT US</span></h1>
		<div class="aboutText">
			<h2>"Delhi Dialogue: Vision 2020"</h2> 
			<p>An initiative to conduct a comprehensive study of policies for Delhi. This will be used to create a concrete, feasible and long-term roadmap and vision for Delhi.</p>
			<p>Invitations will be sent to domain experts, researchers, scientists, experts from governments,  organizations, businesses and civil society to engage with us on a 13-point agenda. The engagement would happen in the form of round table conferences.</p>
			<p>The major areas of discussion and policy research will center around:</p>
			<ul id="aboutTopicList">

				<li>	Jobs and Employment		</li>
				<li>	Enterprise: Trade and Industry		</li>
				<li>	Women Rights & Safety		</li>
				<li>	Sanitation and Solid Waste Mgmt		</li>
				<li>	Social Welfare and Social Justice		</li>
				<li>	Transportation		</li>
				<li>	Energy and Electricity		</li>
				<li>	Education		</li>
				<li>	Health		</li>
				<li>	Land and Housing		</li>
				<li>	Rural Delhi		</li>
				<li>	Water		</li>
			</ul>
			<i class="col-md-12">Citizens will also be invited to give their suggestions on different policy areas through our website, Whatsapp, Text Messaging and registering for policy roundtables.</i>
		</div>
	</div>



	<div id="topics" style="overflow:auto;padding-left: 10vw;padding-right: 10vw;padding-bottom: 100px; background-color: rgba(255,255,255, 1);">
		<h1 class="section-Title aboutus-title"><span>FOCUS AREAS</span></h1>
		<div class= 'issue'>
			<div class="issueSummary col-sm-9">
				<div class = "col-sm-5 FAImg" height="100px" style="background:url('files/Images/Employment.jpg');"></div>
				<div class="col-sm-7">
					<b>Jobs and Employment</b><br/>
					Delhi should have growing employment opportunities across various types of industries. Small businesses needs to be encouraged as viable employment opportunity. Labor reforms are needed to provide fair & conducive work environment.
				</div>
			</div>
			<a href="focus-area/main.php?id=1" class="col-sm-3">
				<div class="discovermore">
					DISCOVER MORE  <img src="files/discovermore.png">
				</div>
			</a>
		</div>


		<div class= 'issue'>
			<div class="issueSummary col-sm-9">
				<div class = "col-sm-5 FAImg" height="100px" style="background:url('files/Images/Industry.jpg');"></div>
				<div class="col-sm-7">
					<b>Enterprise: Trade and Industry</b><br/>Being India's capital, Delhi should be India's premier services hub and trading zone. Simplify laws, provide excellent infrastructure & incentivize enterpreneurship. It should be straightforward to build a new company in Delhi.
					 
				</div>
			</div>
			<a href="focus-area/main.php?id=2" class="col-sm-3">
				<div class="discovermore">
					DISCOVER MORE  <img src="files/discovermore.png">
				</div>
			</a>
		</div>

		<div class= 'issue'>
			<div class="issueSummary col-sm-9">
				<div class = "col-sm-5 FAImg" height="100px" style="background:url('files/Images/Women.jpg');"></div>
				<div class="col-sm-7">
					<b>Women Rights (Safety)</b><br/>Delhi would have world class laws for upholding women rights at workplace, public places & home. We envision a Delhi in which women will be acknowledged and treated as equal citizens in their own right.</i>
					 
				</div>
			</div>
			<a href="focus-area/main.php?id=3" class="col-sm-3">
				<div class="discovermore">
					DISCOVER MORE  <img src="files/discovermore.png">
				</div>
			</a>
		</div>

		<div class= 'issue'>
			<div class="issueSummary col-sm-9">
				<div class = "col-sm-5 FAImg" height="100px" style="background:url('files/Images/Sanitation.jpg');"></div>
				<div class="col-sm-7">
					<b>Sanitation and Solid Waste Mgmt</b><br/>Comprehensive sanitation, sewage and solid waste management for every living establishment in Delhi. Easy availability of public toilets & waste bins for use. Discourage littering by heavy fines
				</div>
			</div>
			<a href="focus-area/main.php?id=4" class="col-sm-3">
				<div class="discovermore">
					DISCOVER MORE  <img src="files/discovermore.png">
				</div>
			</a>
		</div>

		<div class= 'issue'>
			<div class="issueSummary col-sm-9">
				<div class = "col-sm-5 FAImg" height="100px" style="background:url('files/Images/SocialWelfare.jpg');"></div>
				<div class="col-sm-7">
					<b>Social Welfare and Social Justice</b><br/>Delhi would provide equal opportunities across all sections of society. There would be no appeasement of specific people in a community. Policies would focus on equal access to education, health & job opportunities. 
				</div>
			</div>
			<a href="focus-area/main.php?id=5" class="col-sm-3">
				<div class="discovermore">
					DISCOVER MORE  <img src="files/discovermore.png">
				</div>
			</a>
		</div>

		<div class= 'issue'>
			<div class="issueSummary col-sm-9">
				<div class = "col-sm-5 FAImg" height="100px" style="background:url('files/Images/Transport.jpg');"></div>
				<div class="col-sm-7">
					<b>Transportation</b><br/>Delhi would have high quality diverse public transport to reduce peak time load on roads. The transportation would include Metro trains, last mile connectivity via feeder bues & private transport vehicles like autorickshaws. 
				</div>
			</div>
			<a href="focus-area/main.php?id=6" class="col-sm-3">
				<div class="discovermore">
					DISCOVER MORE  <img src="files/discovermore.png">
				</div>
			</a>
		</div>

		<div class= 'issue'>
			<div class="issueSummary col-sm-9">
				<div class = "col-sm-5 FAImg" height="100px" style="background:url('files/Images/Energy.jpg');"></div>
				<div class="col-sm-7">
					<b>Energy and Electricity</b><br/>Delhi has self-sufficient 100% electricity & increase depedence on clean energy
				</div>
			</div>
			<a href="focus-area/main.php?id=7" class="col-sm-3">
				<div class="discovermore">
					DISCOVER MORE  <img src="files/discovermore.png">
				</div>
			</a>
		</div>

		<div class= 'issue'>
			<div class="issueSummary col-sm-9">
				<div class = "col-sm-5 FAImg" height="100px" style="background:url('files/Images/Education.jpg');"></div>
				<div class="col-sm-7">
					<b>Education</b><br/>Delhi should have high quality school education system with access to all sections of society. Focus on creation & explansion of world class colleges & universities. 
				</div>
			</div>
			<a href="focus-area/main.php?id=8" class="col-sm-3">
				<div class="discovermore">
					DISCOVER MORE  <img src="files/discovermore.png">
				</div>
			</a>
		</div>

		<div class= 'issue'>
			<div class="issueSummary col-sm-9">
				<div class = "col-sm-5 FAImg" height="100px" style="background:url('files/Images/Health.jpg');"></div>
				<div class="col-sm-7">
					<b>Health</b><br/>Delhi would have drastically improved quality of public hospitals & further expand network. Health care delivery systems would be modernized using technology. Promote focus on proactive prevention of diseases to reduce healthcare costs & improve quality of life. 
				</div>
			</div>
			<a href="focus-area/main.php?id=9" class="col-sm-3">
				<div class="discovermore">
					DISCOVER MORE  <img src="files/discovermore.png">
				</div>
			</a>
		</div>

		<div class= 'issue'>
			<div class="issueSummary col-sm-9">
				<div class = "col-sm-5 FAImg" height="100px" style="background:url('files/Images/Housing.jpg');"></div>
				<div class="col-sm-7">
					<b>Land and Housing</b><br/>Delhi would have transparent land allotment policies, enforce infrastructure guidelines and protect rights of home buyers. Long term policies to prevent mushrooming of unauthorised settlements by ensuring availability of low-cost housing.  
				</div>
			</div>
			<a href="focus-area/main.php?id=10" class="col-sm-3">
				<div class="discovermore">
					DISCOVER MORE  <img src="files/discovermore.png">
				</div>
			</a>
		</div>

		<div class= 'issue'>
			<div class="issueSummary col-sm-9">
				<div class = "col-sm-5 FAImg" height="100px" style="background:url('files/Images/Rural.jpg');"></div>
				<div class="col-sm-7">
					<b>Rural Delhi</b><br/>Delhi's rural areas would have good quality public infrastrasture including schools & hospitals. 
				</div>
			</div>
			<a href="focus-area/main.php?id=11" class="col-sm-3">
				<div class="discovermore">
					DISCOVER MORE  <img src="files/discovermore.png">
				</div>
			</a>
		</div>

		<div class= 'issue'>
			<div class="issueSummary col-sm-9">
				<div class = "col-sm-5 FAImg" height="100px" style="background:url('files/Images/Water.jpg');"></div>
				<div class="col-sm-7">
					<b>Water</b><br/>Every home in Delhi has access to clean piped water. Remove dependence on water tankers. Develop Delhi's water resources & implement ideas like rainwater harvesting
				</div>
			</div>
			<a href="focus-area/main.php?id=12" class="col-sm-3">
				<div class="discovermore">
					DISCOVER MORE  <img src="files/discovermore.png">
				</div>
			</a>
		</div>



	</div>

	<div id="schedule" style="padding-left: 10vw;padding-right: 10vw;padding-bottom: 50vh; background-color: rgba(255,255,255, 1);">
		<h1 class="section-Title aboutus-title"><span>Schedule</span></h1>
		<div class="aboutText">
			<p><h2>Domain experts & citizens will participate to build realistic & practical plan. At this time, invitations are being sent to well known domain experts, researchers, scientists, experts from governments, social organizations, businesses and civil society to engage. Experts are also encouraged to apply with their proposals.</p>
			<p> Similary, citizens are also invited to send proposals for review. These inputs will be reviewed & subsequently detailed schedule for seminars, round table meetings & conferences will be published.</h2></p>
		</div>
	</div>


	
	<div id="contact" style="background-image: url(files/aapuday.jpg);background-repeat: no-repeat; background-size:100% 100%; background-attachment: fixed;background-position: 50% 0;margin-top: 50px;">
		<div class="darker-overlay" style="padding-top: 15vh;padding-bottom: 0px; background-color: rgba(0,0,0, 0.70);">
			<h1 class="section-title">Send us a Message</h1><div style="clear:both; width:100%; height:30px"></div>
			<div class="percent-one-third" style="margin-left:5vw;margin-right:20vw;">
				<ul class="contact-info" style="color:white !important;">
					<li><h2><span class="col-md-12">Aam Aadmi Party</span></h2></li><br/>
					<li><h3><span class="col-md-3">Address: </span><span class="col-md-7"><b>A-119, First Floor,<br />Kaushambi, Ghaziabad,<br />Uttar Pradesh - 201010</b></span></h3></li>
					<li><h3><span class="col-md-3">Phone: </span><span class="col-md-9"><b>+91-9643327265</b></span></h3></li>
					<div style="clear:both; width:100%; height:10px"></div>
					<li><span class="col-md-offset-2 col-md-2"><a href="mailto: newdelhidialogue@gmail.com"><img src="files/email.png" height="30" width="30"></a></span><span class="col-md-2"><a href="http://facebook.com/pages/Delhi-Dialogue/576718279124066 "><img src="files/facebook.gif"></a></span><span class="col-md-2"><a href="http://www.twitter.com/DelhiDialogue "><img src="files/twitter.png"></a></span></h3></li>
				</ul>
			</div>
					<div class="percent-one-third" style="padding-top:30px">
						<form method="post">
					<div>
						<span class="name">
							<input name="your-name" size="40" aria-required="true" aria-invalid="false" placeholder="Name" type="text">
						</span>
					</div>
					<div>
						<span class="email">
							<input name="your-email" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Email" type="email">
						</span>
					</div>

					<span class="your-message">
						<textarea name="your-message" cols="40" rows="10" class="" aria-required="true" aria-invalid="false" placeholder="Message">
						</textarea>
					</span>

							<input value="Send" class="button black" type="submit" name="submit">
                            <img style="visibility: hidden;" alt="Sending ..." src="files/ajax-loader.gif" class="ajax-loader"><p></p>
						</form>
                        <h3><?php include "secure_email_code.php"?></h3>

					</div>
			<div style="clear:both; width:100%; height:35px"></div>
				</div>
			</div>
		</section>
	</div><!--end wrapper-->



<meta name="generator" content="Delhi Dialogue Portal by AAP">

</body>
</html>