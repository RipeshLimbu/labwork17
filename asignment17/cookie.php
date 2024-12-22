<?php
// Cookie expiration time (7 days from now)
$cookie_expiration = time() + (7 * 24 * 60 * 60);

// Check if the user's name is stored in the cookie
if (isset($_COOKIE['username'])) {
    // Greet the user using the stored name
    $username = htmlspecialchars($_COOKIE['username']);
    echo "Welcome back, $username! It’s great to see you again!";
} else {
    // If the cookie is not set, display the form to ask for the user's name
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['username'])) {
        // Sanitize and set the username in a cookie
        $username = htmlspecialchars($_POST['username']);
        setcookie('username', $username, $cookie_expiration);
        // Reload the page to display the greeting
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Enter Your Name</title>
    </head>
    <body>
        <form method="post" action="">
            <label for="username">Please enter your name:</label>
            <input type="text" id="username" name="username" required>
            <button type="submit">Submit</button>
        </form>
    </body>
    </html>
    <?php
    exit;
}
?>
