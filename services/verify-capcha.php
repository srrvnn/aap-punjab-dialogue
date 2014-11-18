<?php
  require_once('recaptchalib.php');
  $privatekey = "6Ldv6f0SAAAAANItB0WI2k5zAagRl0d6SdYH2EfC";
  $response = array();
  if(!isset($_POST["recaptcha_challenge_field"]) || empty($_POST["recaptcha_challenge_field"])
	|| !isset($_POST["recaptcha_response_field"]) || empty($_POST["recaptcha_response_field"])) {
		if (isset($_GET['q121_aap_dd_debug_counter'])) {
			echo "Invalid parameters!";
		}
		$response["status"] = "InvalidParameters";
		echo json_encode($response);
		return;
  }
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);
  if (!$resp->is_valid) {
	if (isset($_GET['q121_aap_dd_debug_counter'])) {
		echo "The reCAPTCHA wasn't entered correctly. Go back and try it again." .
         "(reCAPTCHA said: " . $resp->error . ")";
	}
	$response["status"] = "InvalidCapcha";
  } else {
    $response["status"] = "ValidCapcha";
  }
  echo json_encode($response);
  ?>