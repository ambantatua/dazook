<?

    $name = $_POST['your_name'];
    $email = $_POST['your_email'];
 
if(isset($_POST['submit']))
 
{
    $from_add = "contactform@yourwebsite.com";
 
    $to_add = "info@dazook.com.au";
     
    $subject = "Dazook mailing list request";
     
    $message = "Name:$name \n Email:$email \n ";
     
    $headers = "From: $from_add \r\n";
    $headers .= "Reply-To: $from_add \r\n";
    $headers .= "Return-Path: $from_add\r\n";
    $headers .= "X-Mailer: PHP \r\n";
     
     
    if(mail($to_add,$subject,$message,$headers))
    {
        $msg = "Your details have been successfully submitted!";
    }
}
     
    print "<p>Thank you $name for joining Dazook mailing list,
we will be in contact shortly.</p>";
     
?>
