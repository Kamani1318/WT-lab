<?php
session_start(); // Start the session

// Check if the session variable for count exists
if(isset($_SESSION['view_count'])) {
    $_SESSION['view_count'] += 1; // Increment the count
} else {
    $_SESSION['view_count'] = 1; // Set the count to 1 if it doesn't exist
}

// Display the count
echo "You have viewed this page " . $_SESSION['view_count'] . " times in this session.";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Page View Counter</title>
</head>
<body>
    <p>Refresh the page to increment the view count.</p>
</body>
</html>
