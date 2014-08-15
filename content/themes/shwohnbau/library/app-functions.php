<?php

	/*
	*	contains project related php functions
	*
	*/

	if (!function_exists('get_img_uri')) :
		function get_img_uri($img) {
		  return get_template_directory_uri()."/".IMG_DIR."/".$img;
		}
	endif;

	if (!function_exists('img_uri')) :
	function img_uri($img) {
	  echo get_img_uri($img);
	}
	endif;

	if(!function_exists('sanitize_mail')) :
		function sanitize_mail($mail) {
			return filter_var($mail, FILTER_SANITIZE_EMAIL);
		}
	endif;

	if(!function_exists('is_valid_mail')) :
		function is_valid_mail($mail) {
			$sanitized_mail = sanitize_mail($mail);
			return filter_var($sanitized_mail, FILTER_VALIDATE_EMAIL);
		}
	endif;


	if(!function_exists('send_mail')) :
		function send_mail($from,$to,$subject,$message) {
			if(is_valid_mail($from)) {
				if(is_valid_mail($to)) {
    				// message lines should not exceed 70 characters (PHP rule), so wrap it
    				$message = wordwrap($message, 70);
    				mail($to,$subject,$message,"From: $from\n");
    				return "MAIL_SUCCESS";
				}else {
					return "MAIL_INVALID_TO";
				}
			}else{
				return "MAIL_INVALID_FROM";
			}
		}
	endif;

	if(!function_exists('ajax_send_mail_action')) :
		function ajax_send_mail_action() {
			if (isset($_POST["from"])) {
				$from = $_POST["from"];
				$to = $_POST["to"];
	    		$subject = $_POST["subject"];
	    		$message = $_POST["message"];
	    		echo send_mail($from,$to,$subject,$message);
	    	}else{
	    		echo "MAIL_NO_DATA";
	    	}

	    	die();
		}
	endif;

	add_action('wp_ajax_sendmail', 'ajax_send_mail_action');
	add_action('wp_ajax_nopriv_sendmail', 'ajax_send_mail_action');

?>