<!-- Design a menu page (menu.php) with 3 links:

?page=home
?page=about
?page=contact
Using $_GET['page'], display the respective content dynamically (without multiple files). -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Menu Page</title>
</head>
<body>
    <!-- Navigation menu -->
     <a href="menu.php?page=home">Home</a>
     <a href="menu.php?page=about">About</a>
     <a href="menu.php?page=contact">Contact</a>
    <hr>
    <?php   
    //check if page is set in URL
    if(isset($_GET['page'])){
        $page = $_GET['page'];
        //display content based on the page value
        switch($page){
            case 'home':
                echo "<h2>Welcome to the Home Page</h2>";
                echo "<p>This is the home page of our website.</p>";
                break;
            case 'about':
                echo "<h2>About Us</h2>";
                echo "<p>This page contains information about us.</p>";
                break;
            case 'contact':
                echo "<h2>Contact Us</h2>";
                echo "<p>This page contains our contact information.</p>";
                break;
            default:
                echo "<h2>Page Not Found</h2>";
                echo "<p>The page you are looking for does not exist.</p>";
        }
    } else {
        //default content if no page is set
        echo "<h2>Welcome to the Home Page</h2>";
        echo "<p>This is the home page of our website.</p>";
    }
    ?>
</body>
</html>