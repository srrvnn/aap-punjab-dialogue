<?php
	global $hide_startup_popup;
	global $facebook_app_id;
	if (isset($_GET['q1_aap_dd_beta'])) {
		error_reporting(-1);
		$facebook_app_id = '1554577948087956';
	} else {
		$facebook_app_id = '1540899709487892';
		error_reporting(0);
	}
	
	$hide_startup_popup = $_SESSION["hide_startup_popup"];
	if(!isset($hide_startup_popup) || $hide_startup_popup != "true") {
		$_SESSION["hide_startup_popup"] = "true";
		$hide_startup_popup = "false";
	} else {
		$hide_startup_popup = "true";
	}
	if (isset($_GET['q121_aap_dd_debug_counter'])) {
		echo $_SESSION["hide_startup_popup"];
		echo "\nhide_startup_popup=".$hide_startup_popup;
	}
?>

<div style="top:70px;" class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="<?php echo $hide_startup_popup ?>">
    <div class="social-popup modal-dialog" style="background-image: url(/images/social-popup.jpg)">
        <div class="popup-container">
            <div class="modal-header">
            <h4>PLEASE SHARE US !</h4>
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body" style="text-align:center; padding:20px">
				<div style="text-align:center;">
					<p><span>All of us share the vision to make Delhi a world class city !<br>
					Please "Like" and "Share" our Facebook Page.
					<br>Your like will help us spread the message. Thank you !</span></p>
				</div>
				<div class="fb_like_share">
					<iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FDelhiDialogue&amp;width&amp;layout=button&amp;action=like&amp;show_faces=false&amp;share=true&amp;height=35&amp;appId=<?=$facebook_app_id?>" scrolling="no" frameborder="0" style="height:20px;width:100px" allowTransparency="true"></iframe>
				</div>
				
			</div>
		</div>     
			
	</div>
</div>