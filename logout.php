<?php
require_once 'config/session.php';
require_once 'config/database.php';
require_once 'classes/Auth.php';

$auth = new Auth($conn);
$result = $auth->logout();

// Redirect to login page
header("Location: login.php");
exit();
?>
