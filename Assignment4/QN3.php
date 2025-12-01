<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
</head>
<body>
    <h2>Student Registration Form</h2>
    <form method="post" action="">
        Full Name: <input type="text" name="full_name" required><br><br>
        Gender:
        <input type="radio" name="gender" value="Male" required> Male   
        <input type="radio" name="gender" value="Female" required> Female
        <input type="radio" name="gender" value="Other" required> Other<br><br>
        Hobbies:    
        <input type="checkbox" name="hobbies[]" value="Reading"> Reading
        <input type="checkbox" name="hobbies[]" value="Sports"> Sports
        <input type="checkbox" name="hobbies[]" value="Music"> Music
        <input type="checkbox" name="hobbies[]" value="Traveling"> Traveling<br><br>
        Country:
        <select name="country" required>
            <option value="Nepal">Nepal</option>
            <option value="India">India</option>
            <option value="USA">USA</option>
            <option value="UK">UK</option>
        <br>
        </select><br><br>
        Subjects:
        <select name="subjects[]"  required>
            <option value="PHP">PHP</option>
            <option value="Java">Java</option>
            <option value="Database">Database</option>
            <option value="Networking">Networking</option>
            <option value="AI">AI</option>
        </select><br><br>
        <input type="submit" value="Register">
    </form>
    <hr>
    <?php
    // Display server information
    echo "<h3>Server Information:</h3>";
    echo "Client IP Address: " . $_SERVER['REMOTE_ADDR'] . "<br>";  
    echo "Browser and OS: " . $_SERVER['HTTP_USER_AGENT'] . "<br>";
    echo "Server Name: " . $_SERVER['SERVER_NAME'] . "<br><br>";
    // Check if the form was submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Retrieve and display the submitted data
        $full_name = htmlspecialchars($_POST['full_name']);
        $gender = htmlspecialchars($_POST['gender']);
        $hobbies = isset($_POST['hobbies']) ? $_POST['hobbies'] : [];
        $country = htmlspecialchars($_POST['country']); 
        $subjects = isset($_POST['subjects']) ? $_POST['subjects'] : [];    
        echo "<h3>Student Registration Details:</h3>";
        echo "Full Name: " . $full_name . "<br>";
        echo "Gender: " . $gender . "<br>";
        echo "Hobbies: " . (!empty($hobbies) ? implode(", ", array_map('htmlspecialchars', $hobbies)) : "None") . "<br>";
        echo "Country: " . $country . "<br>";
        echo "Subjects: " . (!empty($subjects) ? implode(", ", array_map('htmlspecialchars', $subjects)) : "None") . "<br>";
    }
    ?>
</body>
</html>