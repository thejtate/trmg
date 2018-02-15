<?php
/**
 * Form submission.
 */

//configs
$emails_to = array('jtate@funneldesigngroup.com');
$is_smtp = TRUE;
//smtp settings
$smtp_host = 'smtp.gmail.com';
$smtp_username = 'trmg.sendmail@gmail.com';
$smtp_pass = 'bbhab2has2';
//END configs


if(!empty($_POST['submit']) && !empty($_POST['name']) && !empty($_POST['email'])) {

  $name = (string) $_POST['name'];
  $email = (string) $_POST['email'];
  $phone = !empty($_POST['phone']) ? (string) $_POST['phone'] : '';
  $message = !empty($_POST['message']) ? (string) $_POST['message'] : '';

  $subject = "TRMG. Form Submission";
  $email_text = "Name: $name \n";
  $email_text .= "Email: $email \n";
  $email_text .= "Phone: $phone \n";
  $email_text .= "Message: $message \n";

  writeToLog($email_text);

  if($is_smtp) {
    require_once('PHPMailer/PHPMailerAutoload.php');
    $mail = new PHPMailer;
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = $smtp_host;  // Specify main and backup server
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = $smtp_username;                            // SMTP username
    $mail->Password = $smtp_pass;                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted


    $mail->FromName = 'TRMG';
    foreach ($emails_to as $email)
    {
      $mail->addAddress($email);  // Add a recipient
    }

    $mail->Subject = $subject;
    $mail->Body    = $email_text;

    if($mail->send()) {
      //do nothing for now
    }
  } else {
    foreach ($emails_to as $email)
    {
      @mail($email, $subject, $email_text);
    }
  }

  echo '<div class="form-message">Thank you for your submission.</div>';
}


function writeToLog($string = "") {
  try {
    if (is_array($string)) {
      $string = var_export($string, TRUE);
    }

    $string = "\r\n\r\n" . "===============================================" . "\r\n" .
      "Date: " . date("m/d/Y h:ia") . "\r\n" .
      "_______________________________________________ " . "\r\n" .
      $string . "\r\n" .
      "===============================================" . "\r\n";

    $dir =__DIR__ ."/logs/";
    $filename = $dir . date("m_d_Y") . "__mail.log";
    if (!file_exists($dir . "/")) {
      mkdir($dir, 0777, TRUE);
    }
    $fp = fopen($filename, 'a');
    $res1 = fwrite($fp, $string);

    $res2 = fclose($fp);
  } catch (Exception $e) {

  }
}