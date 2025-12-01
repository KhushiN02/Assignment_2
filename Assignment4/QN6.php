<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Registration Form</title>
    <style>
        .error { color: red; }
        .success { color: green; }
    </style>
</head>
<body>
    <h2>Secure Registration Form</h2>
    <?php
    // Initialize variables
    $fullName = $username = $email = $age = "";
    $fullNameErr = $usernameErr = $emailErr = $passwordErr = $confirmPasswordErr = $ageErr = "";
    $passwordStrength = "";
    $isValid = true;

    // Check if the form was submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Validate Full Name
        if (empty($_POST['full_name'])) {
            $fullNameErr = "Full Name is required.";
            $isValid = false;
        } else {
            $fullName = htmlspecialchars(trim($_POST['full_name']));
            if (strlen($fullName) < 3 || !preg_match("/^[a-zA-Z ]+$/", $fullName)) {
                $fullNameErr = "Full Name must be at least 3 characters and contain only letters and spaces.";
                $isValid = false;
            }
        }

        // Validate Username
        if (empty($_POST['username'])) {
            $usernameErr = "Username is required.";
            $isValid = false;
        } else {
            $username = htmlspecialchars(trim($_POST['username']));
            if (!preg_match("/^[a-zA-Z0-9_]{5,15}$/", $username)) {
                $usernameErr = "Username must be 5-15 characters and alphanumeric only.";
                $isValid = false;
            }
        }

        // Validate Email
        if (empty($_POST['email'])) {
            $emailErr = "Email is required.";
            $isValid = false;
        } else {
            $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strpos($email, ' ') !== false) {
                $emailErr = "Invalid email format or contains spaces.";
                $isValid = false;
            }
        }

        // Validate Password
        if (empty($_POST['password'])) {
            $passwordErr = "Password is required.";
            $isValid = false;
        } else {
            $password = $_POST['password'];
            if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/", $password)) {
                $passwordErr = "Password must be at least 8 characters, contain uppercase, lowercase letters, and a number.";
                $isValid = false;
            } else {
                // Determine password strength
                $passwordStrength = (strlen($password) >= 12) ? "Strong" : ((strlen($password) >= 10) ? "Medium" : "Weak");
            }
        }
        // Validate Confirm Password
        if (empty($_POST['confirm_password'])) {    
            $confirmPasswordErr = "Please confirm your password.";
            $isValid = false;
        } else {
            $confirmPassword = $_POST['confirm_password'];
            if ($password !== $confirmPassword) {
                $confirmPasswordErr = "Passwords do not match.";
                $isValid = false;
            }
        }
        // Validate Age
        if (empty($_POST['age'])) {
            $ageErr = "Age is required.";
            $isValid = false;
        } else {
            $age = trim($_POST['age']);
            if (!is_numeric($age) || $age < 18 || $age > 100) {
                $ageErr = "Age must be a number between 18 and 100.";
                $isValid = false;
            }
        }
        // If the form is valid, display the registration summary
        if ($isValid) {
            echo "<h3 class='success'>Registration Successful!</h3>";
            echo "<p><strong>Full Name:</strong> " . $fullName . "</p>";
            echo "<p><strong>Username:</strong> " . $username . "</p>";
            echo "<p><strong>Email:</strong> " . $email . "</p>";
            echo "<p><strong>Age:</strong> " . htmlspecialchars($age) . "</p>";
            echo "<p><strong>Password Strength:</strong> " . $passwordStrength . "</p>";
        }
    }
    ?> 
    <form method="post" action="">
        Full Name: <input type="text" name="full_name" value="<?php echo $fullName; ?>" required>
        <span class="error"><?php echo $fullNameErr; ?></span><br><br>

        Username: <input type="text" name="username" value="<?php echo $username; ?>" required>
        <span class="error"><?php echo $usernameErr; ?></span><br><br>

        Email: <input type="email" name="email" value="<?php echo $email; ?>" required>
        <span class="error"><?php echo $emailErr; ?></span><br><br>

        Password: <input type="password" name="password" required>
        <span class="error"><?php echo $passwordErr; ?></span><br><br>

        Confirm Password: <input type="password" name="confirm_password" required>
        <span class="error"><?php echo $confirmPasswordErr; ?></span><br><br>

        Age: <input type="number" name="age" value="<?php echo $age; ?>" required>
        <span class="error"><?php echo $ageErr; ?></span><br><br>

        <input type="submit" value="Register">  
    </form>
</body>
</html>
 
