<?php 
if(isset($_POST['submit'])){


    $to =  $receiving_email_address;
    $from_name = $_POST['name'];
    $from_email = $_POST['email'];
    $subject = $_POST['subject'];
    $from_message = $_POST['message'];
    $message = $from_name . " wrote the following:" . "\n\n" . $from_message;
    $message2 = "Here is a copy of your message " . $from_name . "\n\n" . $from_message;

    mail($to,$subject,$message);
    mail($from,$subject,$message2);
  
     // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>