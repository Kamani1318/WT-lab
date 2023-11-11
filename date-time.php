<?php
// Set timezone to ensure the date-time is accurate for your location
date_default_timezone_set('Your/Timezone'); // Replace 'Your/Timezone' with your timezone, e.g., 'America/New_York'

// Check if the cookie exists
if(isset($_COOKIE['lastVisit'])) {
    $lastVisit = $_COOKIE['lastVisit'];
    echo "Welcome back! You last visited on " . $lastVisit;
} else {
    echo "This is your first visit!";
}

// Update the 'lastVisit' cookie with the current date-time
// The cookie expires after 30 days (30*24*60*60 seconds)
setcookie('lastVisit', date('d-m-Y H:i:s'), time() + (30*24*60*60));
?>

<!DOCTYPE html>
<html>
<head>
    <title>Last Visit</title>
</head>
<body>
    <p>Reload this page to update the last visited date-time in the cookie.</p>
</body>
</html>
