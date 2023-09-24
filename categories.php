<?php
session_start();

if(isset($_SESSION['username'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $category = $_POST["category"];

        // Load appointments
        $appointments = file("appointments.txt", FILE_IGNORE_NEW_LINES);

        // Find and add category
        foreach ($appointments as &$appointment) {
            $info = explode(', ', $appointment);
            if ($info[0] === $_SESSION['username']) {
                $appointment .= ", $category";
            }
        }

        // Save appointments
        file_put_contents("appointments.txt", implode("\n", $appointments));

        header("Location: dashboard.php"); // Redirect back to dashboard.php
    }
} else {
    echo "<h1>Access Denied</h1>";
}
?>
