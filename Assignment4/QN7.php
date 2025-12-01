<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Picture Upload</title>
    <style>
        .error {
            color: red;
        }

        .success {
            color: green;
        }
    </style>
</head>

<body>
    <h2>Profile Picture Upload</h2>
    <?php
    // Initialize variables
    $userName = "";
    $userNameErr = $fileErr = "";
    $uploadSuccess = false;
    $uploadedFilePath = "";
    $fileInfo = [];

    // Check if the form was submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Validate User Name
        if (empty($_POST['user_name'])) {
            $userNameErr = "User Name is required.";
        } else {
            $userName = htmlspecialchars(trim($_POST['user_name']));
            if (strlen($userName) < 3) {
                $userNameErr = "User Name must be at least 3 characters.";
            }
        }

        // Validate File Upload
        if (isset($_FILES['profile_picture']) && $_FILES['profile_picture']['error'] != UPLOAD_ERR_NO_FILE) {
            $file = $_FILES['profile_picture'];
            $allowedTypes = ['image/jpeg', 'image/jpg', 'image/png', 'image/gif'];
            $maxFileSize = 2 * 1024 * 1024; // 2MB
    
            if ($file['error'] !== UPLOAD_ERR_OK) {
                $fileErr = "File upload error. Error code: " . $file['error'];
            } elseif (!in_array($file['type'], $allowedTypes)) {
                $fileErr = "Invalid file type. Only JPG, PNG, GIF allowed.";
            } elseif ($file['size'] > $maxFileSize) {
                $fileErr = "File size exceeds 2MB limit.";
            } else {
                // Create uploads directory if it doesn't exist
                if (!is_dir('uploads')) {
                    mkdir('uploads', 0777, true);
                }

                // Save the uploaded file
                $uploadedFilePath = 'uploads/' . basename($file['name']);
                if (move_uploaded_file($file['tmp_name'], $uploadedFilePath)) {
                    $uploadSuccess = true;
                    $fileInfo = [
                        'name' => basename($file['name']),
                        'size' => round($file['size'] / 1024, 2) . ' KB',
                        'type' => $file['type'],
                        'location' => $uploadedFilePath
                    ];
                } else {
                    $fileErr = "Failed to save the uploaded file.";
                }
            }
        } else {
            $fileErr = "Profile Picture is required.";
        }
    }
    ?>
    <form method="post" action="" enctype="multipart/form-data">
        User Name: <input type="text" name="user_name" value="<?php echo htmlspecialchars($userName); ?>" required>
        <span class="error"><?php echo $userNameErr; ?></span><br><br>
        Profile Picture: <input type="file" name="profile_picture" accept="image/*" required>
        <span class="error"><?php echo $fileErr; ?></span><br><br>
        <input type="submit" value="Upload">
    </form>
    <hr>
    <?php
    // Display upload results
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if ($uploadSuccess) {
            echo "<h3 class='success'>Profile Picture Uploaded Successfully!</h3>";
            echo "<p><strong>User Name:</strong> " . $userName . "</p>";
            echo "<h4>File Information:</h4>";
            echo "File Name: " . htmlspecialchars($fileInfo['name']) . "<br>";
            echo "File Size: " . htmlspecialchars($fileInfo['size']) . "<br>";
            echo "File Type: " . htmlspecialchars($fileInfo['type']) . "<br>";
            echo "Saved Location: " . htmlspecialchars($fileInfo['location']) . "<br><br>";
            echo "<img src='" . htmlspecialchars($uploadedFilePath) . "' width='200px' alt='Profile Picture'>";
        } else {
            echo "<h3 class='error'>Upload Errors:</h3>";
            if (!empty($userNameErr)) {
                echo "<p>" . $userNameErr . "</p>";
            }
            if (!empty($fileErr)) {
                echo "<p>" . $fileErr . "</p>";
            }
        }

    }

    ?>
    <?php
        echo "<h3>String Functions:</h3>";
    echo "Length of string: " . strlen($fullString) . "<br>";
    echo "Word count: " . str_word_count($fullString) . "<br>";
    echo "Reversed string: " . strrev($fullString) . "<br>";
    echo "Position of 'World': " . strpos($fullString, "World") . "<br>";
    echo "Replace 'World' with 'PHP': " . str_replace("World", "PHP", $fullString) . "<br>";
    ?>
</body>

</html>