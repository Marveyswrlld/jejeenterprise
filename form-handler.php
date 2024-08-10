<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@yourwebsite.com';

$email_subject = 'New Form Submission';

$email_body  = "User Name: $name.\n".
               "User Email: $visitor_email.\n".
               "Subject: $subject.\n".
               "User Message: $message.\n";

 $to = 'yourmainemail@gmail.com';
 
 $headers = "From:  $email_from \r\n";

 $headers .= "Reply-To:  $visitor_email \r\n";

 mail($to,$email_subject,$email_body, $headers);

 header("Location: contact.html")

?>
<?php
// if(isset( $_POST['subscribe'];)){ //if subscribe button clicks*//
//     $useremail =$_POST['email']; //getting user email//
 
// if(filter_var($useremail, FILTER_VALIDATE_EMAIL)){ //VALIDATING USER ENTERED EMAIL
// echo "Email is correct";
// }else{
//     echo"Invalid email";
// }
// }
?>