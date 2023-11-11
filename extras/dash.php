<?php
session_start();
if(isset($_SESSION['username']))
{
    echo '<h1> Welcome' . $_SESSION['username'] . '</h1>';
    echo '<a href="/demo/logout.php">Home</a>';
}
else
{
    echo '<h1> Welcome Guest </h1> ';
    echo '<a href="/demo/cookies.php">Home</a>';
}
?>