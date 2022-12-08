<?php

// Google reCAPTCHA API keys settings
//$secretKey = '6Ld3sWMjAAAAACNoVAFOMSt6fCCdNhpw23gT7XZU';

// Email settings
$recipientEmail = 'swenabergman@gmail.com';

// Assign default values
$postData = $valErr = $statusMsg = '';
$status = 'error';

// If the form is submitted
if(isset($_POST['submit_frm'])){
  // Get the submitted form data
  $postData = $_POST;
  $name = trim($_POST['data[name]']);
  $phone = trim($_POST['data[phone]']);
  $message = trim($_POST['data[message]']);
}


?>
