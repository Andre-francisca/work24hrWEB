<?php
ob_start();
// session_start();
session_destroy();
header("Location:https://www.work24hr.com/app/login.php");
?>