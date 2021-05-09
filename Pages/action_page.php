<?php 
if(isset($_POST['submit'])){
    $to = "amirsalar.mansouri@gmail.com";
    $from = $_POST['Email']; // this is the sender's Email address
    $name = $_POST['Name'];
    $subject = "Messege submission";
    $subject2 = "Copy of your message submission";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['Message'];
    $message2 = "Here is a copy of your message " . $name . ": \n\n" . $_POST['Message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", I will contact you shortly.";
    // You can also use header('Location: thank_you.php'); 
    }
?>
