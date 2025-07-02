<?php
include('config.php');

$errors = array();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve user input
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate input
    if (empty($username) || empty($password)) {
        $errors[] = "Please fill in all fields!";
    } else {
        // Check if the username already exists using a prepared statement
        $checkQuery = "SELECT * FROM users WHERE username = ?";
        $checkStmt = $conn->prepare($checkQuery);
        $checkStmt->bind_param("s", $username);
        $checkStmt->execute();
        $checkResult = $checkStmt->get_result();

        if ($checkResult->num_rows > 0) {
            $errors[] = "Username already exists!";
        } else {
            // Insert new user into the database using a prepared statement
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $insertQuery = "INSERT INTO users (username, pwd) VALUES (?, ?)";
            $insertStmt = $conn->prepare($insertQuery);
            $insertStmt->bind_param("ss", $username, $hashedPassword);

            if ($insertStmt->execute()) {
                echo "<p class='successful'>Signup successful!</p>";
            } else {
                $errors[] = "Error: " . $insertStmt->error;
            }
        }

        // Close the statements
        $checkStmt->close();
        // $insertStmt->close();
        $checkQuery;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/login.css">

    <title> Sign Up </title>

</head> 

<body>

    <img class="signup_png" src="images/signin_png.png" alt="">

    <div class="wrapper_signup">
        <form action="signup.php" method="post">

            <a href="signupas.php"><img class="logo" src="images/PAWADISE.png" alt=""></a>

            <p><b> SIGN UP </b></p>

            <div class="form_input_signup">
                <input type="text" name="username" id="username" placeholder="Username">
            </div>

            <div class="form_input_signup">
                <input type="password" name="password" id="pwd" placeholder="Password">
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
            
            <div class="create_account">
                Have an account? <a href="login.php"> Login </a>
            </div>

        </form>
    </div>

</body>

</html>