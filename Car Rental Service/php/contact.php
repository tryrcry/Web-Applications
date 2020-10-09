<?php
$to="sivamasi1960@gmail.com";
$subject="Feedback from customer";
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$msg=$_POST['message'];

$headers = "From: tryrcry@gmail.com";
$headers.="MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message='<html><head><style>table,th,td{border:1px solid black;border-collapse:collapse;}</style></head><body><table class="table table-bordered"><tr><td>Name</td><td>'.strip_tags($name).'</td></tr><tr><td>Email</td><td>'.strip_tags($email).'</td></tr><tr><td>Phone no</td><td>'.strip_tags($phone).'</td></tr><tr><td>Message</td><td>'.strip_tags($msg).'</td></tr></table></body></html>';
if(mail($to,$subject,$message,$headers))
{
    echo '<script>alert("Your message has been successfully sent, Thank you!");window.location.href = "../index.html"</script>';
}
else
{
    echo '<script>alert("Your message has not been sent, We track these errors automatically, but if any problem persists feel free to contact us through mobile number!");window.location.href = "../index.html"</script>';
}
?>