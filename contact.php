<?php
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // You would typically use a library or more complex logic to send an email here.
    // For demonstration, just echoing the submitted data.
    echo "Name: $name<br>";
    echo "Email: $email<br>";
    echo "Message: $message<br>";
    // Additional logic: Send email using a PHP mailer library or similar.
}
?>
