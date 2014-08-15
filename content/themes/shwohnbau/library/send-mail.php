<?php
function spamcheck($from) {
  $sanitized_from=filter_var($field, FILTER_SANITIZE_EMAIL);
  // Validate e-mail address
  if(filter_var($sanitized_from, FILTER_VALIDATE_EMAIL)) {
    return TRUE;
  } else {
    return FALSE;
  }
}

if (isset($_POST["from"])) {
  $mailcheck = spamcheck($_POST["from"]);
  if ($mailcheck==FALSE) {
    echo "INVALID";
  } else {
    $from = $_POST["from"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    // message lines should not exceed 70 characters (PHP rule), so wrap it
    $message = wordwrap($message, 70);
    
    mail("schleicher.armin@gmail.com",$subject,$message,"From: $from\n");
      echo "SUCCESS";
    }
  }
}

?>