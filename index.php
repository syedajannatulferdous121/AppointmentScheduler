<?php
session_start();
include('lang/en.php');

if(isset($_SESSION['username'])) {
    if(isset($_SESSION['admin'])) {
        include('adminDashboard.php');
    } else {
        include('dashboard.php');
    }
} else {
    include('login.php');
}
?>
