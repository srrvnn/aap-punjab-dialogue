<?php
class CapchaResponse {
    public $status = "InvalidParameters";
}

function verify_capcha($recaptcha_challenge_field, $recaptcha_response_field, $is_debug) {
	require_once('recaptchalib.php');
  $privatekey = "6Ldv6f0SAAAAANItB0WI2k5zAagRl0d6SdYH2EfC";
  
   $response = new CapchaResponse();
  if(!isset($recaptcha_challenge_field) || empty($recaptcha_response_field)
	|| !isset($recaptcha_challenge_field) || empty($recaptcha_response_field)) {
		return $response;
  }
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $recaptcha_challenge_field,
                                $recaptcha_response_field);
  if (!$resp->is_valid) {
	if ($is_debug) {
		echo "The reCAPTCHA wasn't entered correctly. Go back and try it again." .
         "(reCAPTCHA said: " . $resp->error . ")";
	}
	$response->status = "InvalidCapcha";
  } else {
	$response->status = "ValidCapcha";
  }
  return $response;
}
  ?>