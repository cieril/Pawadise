<?php
include('config.php');

$errors = array();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve user input
    $username = $_POST['username'];
    $password = $_POST['pwd'];

    // Validate input
    if (empty($username) || empty($password)) {
        $errors[] = "Please fill in all fields.";
    } else {
        // Check if the username exists using a prepared statement
        $checkQuery = "SELECT * FROM admins WHERE username = ?";
        $checkStmt = $conn->prepare($checkQuery);
        $checkStmt->bind_param("s", $username);
        $checkStmt->execute();
        $checkResult = $checkStmt->get_result();

        if ($checkResult->num_rows == 1) {
            // Verify the password using a prepared statement
            $user = $checkResult->fetch_assoc();
            if (password_verify($password, $user['pwd'])) {
                // Set a session variable to indicate the user is logged in
                session_start();
                $_SESSION['user'] = $username;
                header("Location: ADMIN PAGE/index.html"); // Redirect to a welcome page or dashboard
                exit();
            } else {
                $errors[] = "Incorrect password. Please try again.";
            }
        } else {
            $errors[] = "Username doesn't exist.";
        }

        // Close the statement
        $checkStmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/login.css">

    <title> Admin </title>

</head>

<body>

    <a href="login.php"><img class="hacker" src="images/incognito.png" alt=""></a>

    <div class="wrapper_login">
        <form action="loginas.php" method="post">

            <a href="loginas.php"><img class="logo" src="images/PAWADISE.png" alt="logo"></a>

            <p> <b>ADMIN</b> </p>

            <div class="form_input">
                <input type="text" name="username" id="username" placeholder="Username">
            </div>

            <div class="form_input">
                <input type="password" name="pwd" id="pwd" placeholder="Password">
            </div>

            <?php
                if (!empty($errors)) {
                    foreach ($errors as $error) {
                        echo "<p class='errors'>$error</p>";
                    }
                }
            ?>

            <hr>

            <div class="form_button_login">
                <button type="Submit" name="Login"> SUBMIT </button>
            </div>

                <!-- <a class="create_account" href="signupas.php"> Create an Account</a> -->

        </form>
    </div>

</body>

</html>