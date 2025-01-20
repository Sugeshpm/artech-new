<?php
// URL to send the POST request to
$url = 'https://artech-crm-api.webdura.info/api/webhook/lead/listen/google';

// Data to be sent in the POST request as raw JSON
$data = '{
    "utm_source": "'.$_POST['utm_source'] .'",
    "utm_campaign": "'.$_POST['utm_campaign'] .'",
    "utm_medium": "'.$_POST['utm_medium'] .'",
    "utm_term": "'.$_POST['utm_term'] .'",
    "utm_content": "'.$_POST['utm_content'] .'",
    "gclId": "'.$_POST['gclid'] .'",
    "pageUrl": "'.$_POST['page_url'] .'",
    "fullName": "'.$_POST['fname'] .'",
    "phone": "'.$_POST['phone'] .'",
    "email": "'.$_POST['email'].'"
  }';
  
  // Initialize cURL session
  $ch = curl_init($url);
  
  // Set cURL options
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
  
  // Execute the cURL session and store the response
  $response = curl_exec($ch);
  
  // Check for cURL errors
  if (curl_errno($ch)) {
      echo 'cURL Error: ' . curl_error($ch);
  }
  
  // Close cURL session
  curl_close($ch);
  
  // Output the response
  echo $response;
?>
