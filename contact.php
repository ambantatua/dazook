<?

$subject="Dazook mailing list request";

$headers= "From: ".$_GET['your_email']."\n";

$headers.='Content-type: text/html; charset=iso-8859-1';

mail("info@dazook.com.au", $subject, "
<html>
<head>
 <title>Enquiry form</title>
</head>
<body>

<br>  
  ".$_GET['your_name']."
<br />
  ".$_GET['your_email']."
</body>
</html>" , $headers);
echo ("Your details have been successfully submitted!");
?>
