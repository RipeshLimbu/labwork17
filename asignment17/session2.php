<?php
// Start the session
session_start();

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Store the user's name in a session variable
    $_SESSION['user_name'] = htmlspecialchars($_POST['name']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store Name in Session</title>
</head>
<body>
    <?php
    // Display a welcome message if the name is stored in the session
    if (isset($_SESSION['user_name'])) {
        echo "<h1>Welcome, " . $_SESSION['user_name'] . "!</h1>";
    } else {
        echo "<h1>Please enter your name:</h1>";
    }
    ?>

    <!-- Form to collect the user's name -->
    <form action="" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
