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

	$useragent=$_SERVER['HTTP_USER_AGENT'];
	$isMobile = 'false';
	if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',
		substr($useragent,0,4))) {
		$hide_startup_popup = 'true';
		$isMobile = 'true';
	} else {
		$hide_startup_popup = $_SESSION["hide_startup_popup"];
		if(!isset($hide_startup_popup) || $hide_startup_popup != "true") {
			$_SESSION["hide_startup_popup"] = "true";
			$hide_startup_popup = "false";
		} else {
			$hide_startup_popup = "true";
		}
	}
	if($isMobile == 'true') {
		$hide_startup_popup = "true";
	}
	if (isset($_GET['q121_aap_dd_debug_counter'])) {
		echo "SESSION[hide_startup_popup]=".$_SESSION["hide_startup_popup"];
		echo "\nhide_startup_popup=".$hide_startup_popup;
		echo "\nmobile = ".$isMobile;
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
					Please "Like" and "Share" our Facebook Page.<br>
					Your like will help us spread the message. Thank you !</span></p>
				</div>
				<div class="fb_like_share">
					<iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FTheDelhiDialogue&amp;width&amp;layout=button&amp;action=like&amp;show_faces=false&amp;share=true&amp;height=35&amp;appId=<?=$facebook_app_id?>" scrolling="no" frameborder="0" style="height:20px;width:100px" allowTransparency="true"></iframe>
				</div>
				
			</div>
		</div>     
			
	</div>
</div>