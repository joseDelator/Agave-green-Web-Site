<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"> 
	<meta name="viewport" content= "width=device-with, initial-scale=1.0">
	<meta name = "description" content=" affordable landscaping in sonoma county">
	<meta name = "keywords" content = "sonoma, marin, landscaping, new, affordable, smarter">
	<link rel="shortcut icon " type="image/png" href="imges/agavelogo.png">
	<meta name = "author" content="jose De La Torre">
	<title>Agave Green Landscape</title>
	<link rel="shortcut icon" type="image/png" href="../imges/agavelogo.png">
	<link rel="stylesheet" href="../css/styleconnect.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sriracha">
	
</head>
<body>
	<script src="inftop.html.js"></script>
	<script src="navbar.html.js"></script>

	<div class="space"> </div>
	<div class="container">
		<div class="icon"></div>
		<h2>Phone : 707-280-3961</h2>
		<h2>Email : agavegreenlandscapes@gmail.com</h2>
		<h2>send us a message</h2>
		<form action="connectwithus.php" method="POST"> 
			<input type="name" name="Name" placeholder="full name"></input>
      		<input type="Email" name="Email" placeholder="Email"></input>
      		<input type="Phone" name="phone" placeholder="Phone Number"></input>
      		<textarea placeholder="how can we rob you today "></textarea>
      		<input type="submit" name="submit" value="connect"/>  
		</form>
	</div>
	<?php
	require 'phpmailer/PHPMailer.php'; 
	require 'phpmailer/SMTP.php';
	require 'phpmailer/Exception.php';
	use PHPMailer\PHPMailer\PHPMailer;
	if(isset($_POST['submit'])){
	$mail  = new PHPMailer();  
	$mail->isSMTP();
	$mail->SMTPAuth= true;
	$mail->SMTPsecure = 'tls';
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = '587';
	$mail->Username = 'fabichivas101@gmail.com';
	$mail->Password = 'chivas101';
	$mail->SetFrom('coolstuff@gmail.com');
	$mail->Subject = 'Hellloo this is an test';
	$mail->AddAddress('fabichivas101@gmail.com');
	$email= '';
	$name='';
	$phone='';
	$message='';
	
	if ($_POST['Name'] != $name && $_POST['Email'] != $email ){
		echo $email;
		$name = $_POST['Name'];
		$email = $_POST['Email'];
		$phone = $_POST['Phone'];
		$message = $_POST['message'];
		$mail->Body = " $phone,  $name, $message";
		$mail->Subject = "$email";
		$mail->Send();
		$mail->
		unset($_POST);
		
	}
	}

	
	?>

	<script src="footer.html.js"></script>
	<script src="../java_stuff/app.js"></script>	
</body>
</html>