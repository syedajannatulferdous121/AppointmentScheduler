<?php
session_start();

if(isset($_SESSION['username'])) {
    echo "<h1>Welcome, {$_SESSION['username']}!</h1>";
    // Display scheduled appointments with options to edit and cancel appointments

    // Add a form to edit appointments
    echo "
    <form action='editAppointment.php' method='post'>
        <label for='date'>Date:</label>
        <input type='date' id='date' name='date' required><br>

        <label for='time'>Time:</label>
        <input type='time' id='time' name='time' required><br>

        <input type='submit' value='Edit Appointment'>
    </form>
    ";

    // Add a form to categorize appointments
    echo "
    <form action='categories.php' method='post'>
        <label for='category'>Category:</label>
        <input type='text' id='category' name='category' required><br>

        <input type='submit' value='Categorize Appointment'>
    </form>
    ";

    // Add a form to send appointment reminders
    echo "
    <form action='sendReminderEmail.php' method='post'>
        <input type='submit' value='Send Reminder'>
    </form>
    ";
} else {
    echo "<h1>Access Denied</h1>";
}
?>
