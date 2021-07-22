<?php
if(empty($_POST['name']) || empty($_POST['subject']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  http_response_code(500);
  exit();
}
if (isset($POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $m_subject = $_POST['subject'];
    $message = $_POST['message'];


    $to = "samuelkamau81@yahoo.com"; // Change this email to your //
    $subject = $m_subject: $name;
    $body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName:".$name."\n\n\nEmail:" .$email."\n\nSubject:" .$m_subject."\n\nMessage:".$message;
    $header = "From:" $email;
    $header.= "Reply-To:" $email;



    mail($to, $subject, $body, $header)
    header("Location:contact.php?mailsend")

}


?>
