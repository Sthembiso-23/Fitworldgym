<?php
include('db_connect.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "C:/xampp/htdocs/FitWorldGym/vendor/autoload.php";





if(isset($_POST['reject'])){
	$userID = $_POST['userID'];
	if(!empty($_POST['req'])){
	
	foreach($_POST['req'] as $selected){
	  // echo $selected."</br>";
	   
	   
	   $sql1 = "SELECT * FROM user WHERE userID = $userID";

    $result = $conn->query($sql1);
    while($row = $result->fetch_assoc()) {
		$fname =$row['firstname'];
		$email =$row['email'];

	}

	$sql = "UPDATE user SET status ='Rejected' WHERE userID=$userID";
    if ($conn->query($sql) === TRUE) {



	$mail = new  PHPMailer();



	try {

		$mail->SMTPDebug = 2;									

		$mail->isSMTP();											

		$mail->Host	 = 'smtp.gmail.com;';					

		$mail->SMTPAuth = true;							

		$mail->Username = 'onke@softstartbti.co.za';				

		$mail->Password = '0429@Onke';						

		$mail->SMTPSecure = 'tls';							

		$mail->Port	 = 587;



		$mail->setFrom('onke@softstartbti.co.za', 'Fit World Gym');		

		$mail->addAddress($email, $fname);

		

		

		$mail->isHTML(true);								

		$mail->Subject = 'FitWorldGym - Registration Rejection';

		$mail->Body = '<html>

				   <head>

					 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

					 <title></title>

				   </head>

				   <body>

					  <div id="email-wrap" style="color:black">

					  <p>Dear '.$fname.' </p>

					 

					  <p>Thank you for registering with us</p>	

					  <p><strong>Your registration is rejected because of the following reasons:</strong></p>										
					  <p><strong>'.$selected.'</strong></p>	
					  <p><strong>To re-upload valid documents following link:</strong> http://localhost/fitworldgym/reupload.php</p>

					   <br>

				
					

					  <p> Kind Regards</p>
					  <p> Fit World Gym</p>

					  

					  </div>

				</body>';

				//$mail->AddEmbeddedImage("images/sbti.png", "emailimg", "sbti.png");

				

		$mail->AltBody = '';

		$mail->send();

		echo "<script>window.alert('You successfully rejected the member')</script>";
		echo "<script>window.location.href='index.php?page=smembers' </script>";

																		

	

	} catch (Exception $e) {

		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

	}


          

	      }

	

	
	   }
	 }
}








if(isset($_POST['approve'])){
	$userID = $_POST['userID'];
	if(!empty($_POST['req'])){
	
	foreach($_POST['req'] as $selected){
	   //echo $selected."</br>";
	   
	   
	   $sql1 = "SELECT * FROM user WHERE userID = $userID";

    $result = $conn->query($sql1);
    while($row = $result->fetch_assoc()) {
		$fname =$row['firstname'];
		$email =$row['email'];

	}

	$sql = "UPDATE user SET status ='Approved' WHERE userID=$userID";
    if ($conn->query($sql) === TRUE) {



	$mail = new  PHPMailer();



	try {

		$mail->SMTPDebug = 2;									

		$mail->isSMTP();											

		$mail->Host	 = 'smtp.gmail.com;';					

		$mail->SMTPAuth = true;							

		$mail->Username = 'onke@softstartbti.co.za';				

		$mail->Password = '0429@Onke';						

		$mail->SMTPSecure = 'tls';							

		$mail->Port	 = 587;



		$mail->setFrom('onke@softstartbti.co.za', 'Fit World Gym');		

		$mail->addAddress($email, $fname);

		

		

		$mail->isHTML(true);								

		$mail->Subject = 'FitWorldGym - Registration Approval';

		$mail->Body = '<html>

				   <head>

					 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

					 <title></title>

				   </head>

				   <body>

					  <div id="email-wrap" style="color:black">

					  <p>Dear '.$fname.' </p>

					 

					  <p>Thank you for registering with us</p>	

					  <p><strong>Your registration is approved, you may now login to the system.</strong></p>										
					  <p><strong>You met all the requirement, namely:</strong></p>
					   <p><strong>'.$selected.'</strong></p>

					   <br>

				
					

					  <p> Kind Regards</p>
					  <p> Fit World Gym</p>

					  

					  </div>

				</body>';

				//$mail->AddEmbeddedImage("images/sbti.png", "emailimg", "sbti.png");

				

		$mail->AltBody = '';

		$mail->send();

		echo "<script>window.alert('You successfully approved the member')</script>";
		echo "<script>window.location.href='index.php?page=smembers' </script>";

																		

	

	} catch (Exception $e) {

		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

	}


          

	      }

	

	
	   }
	 }
}













/*

if (isset($_GET['userID'])) {

	

	$userID = $_GET['userID'];

	
	$sql1 = "SELECT * FROM user WHERE userID = $userID";

    $result = $conn->query($sql1);
    while($row = $result->fetch_assoc()) {
		$fname =$row['firstname'];
		$email =$row['email'];

	}

	$sql = "UPDATE user SET status ='Approved' WHERE userID=$userID";
    if ($conn->query($sql) === TRUE) {



	$mail = new  PHPMailer();



	try {

		$mail->SMTPDebug = 2;									

		$mail->isSMTP();											

		$mail->Host	 = 'smtp.gmail.com;';					

		$mail->SMTPAuth = true;							

		$mail->Username = 'onke@softstartbti.co.za';				

		$mail->Password = 'Onke0429';						

		$mail->SMTPSecure = 'tls';							

		$mail->Port	 = 587;



		$mail->setFrom('onke@softstartbti.co.za', 'Fit World Gym');		

		$mail->addAddress($email, $fname);

		

		

		$mail->isHTML(true);								

		$mail->Subject = 'FitWorldGym - Registration Approval';

		$mail->Body = '<html>

				   <head>

					 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

					 <title></title>

				   </head>

				   <body>

					  <div id="email-wrap" style="color:black">

					  <p>Dear '.$fname.' </p>

					 

					  <p>Thank you for registering with us</p>	

					  <p><strong>Your registration is approved, you may now login to the system.</strong></p>										
					  <p><strong>To login click on the link, http://localhost/FitWorldGym/index.html</strong></p>

					   <br>

				
					

					  <p> Kind Regards</p>
					  <p> Fit World Gym</p>

					  

					  </div>

				</body>';

				//$mail->AddEmbeddedImage("images/sbti.png", "emailimg", "sbti.png");

				

		$mail->AltBody = '';

		$mail->send();

		echo "<script>window.alert('You successfully approved the member')</script>";
		echo "<script>window.location.href='index.php?page=members' </script>";

																		

	

	} catch (Exception $e) {

		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

	}


          

	      }

	

	

}


















if (isset($_GET['ID'])) {

	

	$userID = $_GET['ID'];

	
	$sql1 = "SELECT * FROM user WHERE userID = $userID";

    $result = $conn->query($sql1);
    while($row = $result->fetch_assoc()) {
		$fname =$row['firstname'];
		$email =$row['email'];

	}

	$sql = "UPDATE user SET status ='Rejected' WHERE userID=$userID";
    if ($conn->query($sql) === TRUE) {



	$mail = new  PHPMailer();



	try {

		$mail->SMTPDebug = 2;									

		$mail->isSMTP();											

		$mail->Host	 = 'smtp.gmail.com;';					

		$mail->SMTPAuth = true;							

		$mail->Username = 'onke@softstartbti.co.za';				

		$mail->Password = 'Onke0429';						

		$mail->SMTPSecure = 'tls';							

		$mail->Port	 = 587;



		$mail->setFrom('onke@softstartbti.co.za', 'Fit World Gym');		

		$mail->addAddress($email, $fname);

		

		

		$mail->isHTML(true);								

		$mail->Subject = 'FitWorldGym - Registration Rejection';

		$mail->Body = '<html>

				   <head>

					 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

					 <title></title>

				   </head>

				   <body>

					  <div id="email-wrap" style="color:black">

					  <p>Dear '.$fname.' </p>

					 

					  <p>Thank you for registering with us</p>	

					  <p><strong>Your registration is rejected because of invalid proof that you are a student.</strong></p>										
					

					   <br>

				
					

					  <p> Kind Regards</p>
					  <p> Fit World Gym</p>

					  

					  </div>

				</body>';

				//$mail->AddEmbeddedImage("images/sbti.png", "emailimg", "sbti.png");

				

		$mail->AltBody = '';

		$mail->send();

		echo "<script>window.alert('You successfully rejected the member')</script>";
		echo "<script>window.location.href='index.php?page=members' </script>";

																		

	

	} catch (Exception $e) {

		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

	}


          

	      }

	

	

} 

*/