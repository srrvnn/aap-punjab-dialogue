<?php
	session_start();
	$sessions = array();
	if(count($_SESSION) > 1000) {
		if (isset($_GET['q121_aap_dd_debug_counter'])) {
			echo "\nNumber of session variables limit 1000 reached. session count :".count($_SESSION);
			// Log metrics here
		}
		echo json_encode($sessions);
		return;
	}
	
	// Set session variables from parameters
	foreach($_POST as $key => $value) {
		if (isset($_GET['q121_aap_dd_debug_counter'])) {
			echo "\nSetting ".$key." => ".$value;
		}
		$status = "failure";
		if(isset($_SESSION[$key])) {
			if (isset($_GET['q121_aap_dd_debug_counter'])) {
				echo "\nSession was already set for key:".$key;
			}
		} else {
			$_SESSION[$key] = $value;
			$status = 'success';
		}
		$sessions[$key] = $status;
	}
   echo json_encode($sessions);
?>