<?php
session_start();

session_destroy();
header("Location: http://gagandeep95.com/panel/login.php");
exit();
?>