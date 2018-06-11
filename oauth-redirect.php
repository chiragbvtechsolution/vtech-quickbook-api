<?php
$session_id = session_id();
if (empty($session_id))
{
    session_start();
}


  $_SESSION['code'] = $_GET['code'];
  $_SESSION['realmId'] = $_GET['realmId'];

?>
