<?php
require 'includes/conn.inc.php';

$code =  $_GET['vcode'];

$conn->query("UPDATE user_account SET v_status = 1 WHERE v_code='$code' ") or die($conn->error);
header("Location: ./index.php");

?>