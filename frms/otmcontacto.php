<!doctype html>
<html>
<head>
<link rel="stylesheet" href="boilerplate.css" />
<link rel="stylesheet" href="reflow.css" />
<meta http-equiv="refresh" content="0.2; URL=http://www.ftorodesign.ca">
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<div id="box1">
<?php
function checkOK($field)
{
if (eregi("\r",$field) || eregi("\n",$field)){
die("Invalid Input!");
}
}
$name=$_POST['name'];
checkOK($name);
$email=$_POST['email'];
checkOK($email);

$aquien="fernandotoroc@yahoo.com";
$nadaquever="Infomation gathered from otm.com, Someone contacted you. \n\nPERSONAL INFORMATION:\n\nContact Name: $name\n\nEmail: $email\n\n-------------------------------------------------\n\nInformation gathered from otm.com";
if(mail($aquien,"Alguien quiere trabajo",$nadaquever,"From: postmaster@ftorodesign.ca")) {
//if(mail($aquien,"Alguien quiere trabajo",$nadaquever,"from: $email")) {
echo "We will contact you shortly";
} else {
echo "There was a problem sending the mail. Please check that you filled in the form correctly.";
}
?>
</div>
</body>
</html>