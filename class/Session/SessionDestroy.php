<?php
session_start();

// Check if a session exists before attempting to destroy it
if (session_status() === PHP_SESSION_ACTIVE) {
    // Remove all session variables
    session_unset();

    // Destroy the session
    session_destroy();

    $message = "Session variables are cleared and session ID destroyed.";
} else {
    $message = "No active session to destroy.";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Destroy</title>
</head>

<body>
    <p><?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?></p>
</body>

</html>