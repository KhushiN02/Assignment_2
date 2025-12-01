<!--8. Create a Newsletter Subscription form with a single input field for Email. Validate the email and, upon submission, send a confirmation message to the subscriber’s email address using PHPMailer with SMTP (Mailtrap). If sent successfully, display a success message; otherwise show the PHPMailer error message. -->
<?php
// Import PHPMailer classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Make sure Composer is installed

// Check if form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $mail = new PHPMailer(true);
    # Looking to send emails in production? Check out our Email API/SMTP product!
// MAIL_MAILER=smtp
// MAIL_HOST=sandbox.smtp.mailtrap.io
// MAIL_PORT=2525
// MAIL_USERNAME=1640ea4867c8ad
// MAIL_PASSWORD=9424f7eac27858

    try {
        // SMTP server settings (Mailtrap)
        $mail->isSMTP();
        $mail->Host       = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth   = true;
        $mail->Username   = '1640ea4867c8ad'; // replace with Mailtrap username
        $mail->Password   = '9424f7eac27858'; // replace with Mailtrap password
        $mail->Port       = 2525;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

        // Sender and recipient
        $mail->setFrom('no-reply@uniglobe.com', 'Uniglobe College');
        $mail->addAddress('admin@uniglobe.com', 'Uniglobe Admin');

        // Email content
        $mail->isHTML(true);
        $mail->Subject = "New Contact Message from $name";
        $mail->Body    = "
            <h3>Contact Form Submission</h3>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Message:</strong><br>$message</p>
        ";
        $mail->AltBody = "Name: $name\nEmail: $email\nMessage:\n$message";

        // Send email
        $mail->send();
        $success = "Email sent successfully via Mailtrap!";
    } catch (Exception $e) {
        $error = "Message could not be sent. Error: {$mail->ErrorInfo}";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Send Email with SMTP (Mailtrap)</title>
</head>
<body>
<h2>Contact Form (SMTP Example)</h2>

<?php if (!empty($success)) { echo "<p style='color:green;'>$success</p>"; } ?>
<?php if (!empty($error)) { echo "<p style='color:red;'>$error</p>"; } ?>

<form action="" method="post">
    <label>Your Name:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Your Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Message:</label><br>
    <textarea name="message" rows="5" cols="40" required></textarea><br><br>

    <input type="submit" value="Send Email">
</form>
</body>
</html>