<?php

// Original code
// setcookie("namrata","watermelon", time() + 3600);
// setcookie("Ramon","watermelon", time() + 3600);
// print_r($_COOKIE);

// Enhanced code
// Setting cookies with additional options for better control
setcookie("namrata", "watermelon", [
    'expires' => time() + 3600, // 1 hour
    'path' => '/',             // Available across the entire domain
    'secure' => true,          // Send only over HTTPS
    'httponly' => true,        // Accessible only via HTTP(S), not JavaScript
    'samesite' => 'Strict'     // Prevent cross-site request forgery
]);

setcookie("Ramon", "watermelon", [
    'expires' => time() + 3600,
    'path' => '/',
    'secure' => true,
    'httponly' => true,
    'samesite' => 'Strict'
]);

// Displaying cookies in a more readable format
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
