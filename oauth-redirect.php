<?php
$session_id = session_id();
if (empty($session_id))
{
    session_start();
}

  $myfile = fopen("token.txt", "w") or die("Unable to open file!");
  $txt = $_GET['code'];
  fwrite($myfile, $txt);
  $txt = $_GET['realmId'];
  fwrite($myfile, $txt);
  fclose($myfile);
?>
