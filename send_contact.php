// Contact subject
$subject ="$subject"; 
// Details
$message="$detail";
 
// Mail of sender
$mail_from="$customer_mail"; 
// From 
$header="from: $name <$mail_from>";
 
// Enter your email address
$to ='christopher.elliott8@gmail.com';
 
$send_contact=mail($to,$subject,$message,$header);
 
// Check, if message sent to your email 
// display message "We've recived your information"
if($send_contact){
echo "Thank you for your submission. I will reply back as soon as possible.";
}
else {
echo "ERROR";
}
?>