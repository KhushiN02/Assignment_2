<!DOCTYPE html>
<html lang="en">    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
</head>
<body>
    <h2>Feedback Form</h2>
    <form method="post" action="">
        Name: <input type="text" name="name" required><br><br>
        Rating (1-5): 
        <select name="rating" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select><br><br>
        Comment:<br>
        <textarea name="comment" rows="4" cols="50" required></textarea><br><br>
        <input type="submit" value="Submit Feedback">
    </form>

    <hr>

    <?php
    // Check if the form was submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Retrieve and display the submitted data
        $name = htmlspecialchars($_POST['name']);
        $rating = htmlspecialchars($_POST['rating']);
        $comment = htmlspecialchars($_POST['comment']);

        echo "<h3>Submitted Feedback:</h3>";
        echo "Name: $name<br>";
        echo "Rating: $rating<br>";
        echo "Comment: $comment<br>";
    }
    ?>
</body>
</html>