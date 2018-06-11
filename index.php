<?php
$session_id = session_id();
if (empty($session_id))
{
    session_start();
}

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://appcenter.intuit.com/connect/oauth2?client_id=Q05RXWzG1pISXjitCttiPIBsQVrFXbDWHebgFVkLnZkxHFUkQR&response_type=code&scope=com.intuit.quickbooks.accounting&redirect_uri=https%3A%2F%2Fvtech-quickbook-api.herokuapp.com%2Foauth-redirect.php&state=security_token%3D138r5719ru3e1%26url%3Dhttps%3A%2F%2Fvtech-quickbook-api.herokuapp.com%2Foauth-redirect.php",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "postman-token: 0ca02003-1b6b-0fbb-4135-75488d5f12cd"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
