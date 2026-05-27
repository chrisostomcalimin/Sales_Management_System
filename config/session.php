<?php
// Session Configuration
session_start();

// Session timeout settings (in seconds)
define('SESSION_TIMEOUT', 1800); // 30 minutes

// Check if session is expired
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > SESSION_TIMEOUT) {
    session_unset();
    session_destroy();
    header("Location: login.php?timeout=1");
    exit();
}

// Update last activity time
$_SESSION['last_activity'] = time();
?>
