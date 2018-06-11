<?php
$session_id = session_id();
if (empty($session_id))
{
    session_start();
}


  $_SESSION['code'] = $_GET['code'];
  $_SESSION['realmId'] = $_GET['realmId'];

  $myfile = fopen("token.txt", "w") or die("Unable to open file!");
  $txt = "John Doe\n";
  fwrite($myfile, $txt);
  $txt = "Jane Doe\n";
  fwrite($myfile, $txt);
  fclose($myfile);
?>
