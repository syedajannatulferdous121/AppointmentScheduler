<?php
session_start();

if(isset($_SESSION['admin'])) {
    echo "<h1>Welcome, Admin!</h1>";
    // Display admin-specific options (e.g., manage users, view all appointments)
} else {
    echo "<h1>Access Denied</h1>";
}
?>
