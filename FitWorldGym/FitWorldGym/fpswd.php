<?php
session_start(); 

//include "config.php";
include 'Admin/db_connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitWorld | Forget Password</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</head>
<body>
<?php 

if (isset($_POST['reset'])) {

	$uname = $_GET['email'];
	$pass = $_POST['pass'];
	$pass1 = $_POST['pass1'];
	$pswd = md5($pass);
	
	$query = "SELECT * FROM `user` WHERE `email`='$uname' ";
        $checkemail = mysqli_query($conn, $query);
 	
	if($pass != $pass1){
		  ?>
		
           
              <script>
	    
                  swal({
                    title: "Reset Failed!",
                    text: "Password you have entered does not match.",
                    type: "warning",
                  // timer: 6000,
                    showConfirmButton: true
                  }, function(){
                        window.location.href = "forgetpswd.php?email=$uname";
                  });




 </script> 

		

		<?php

		}
	           elseif (mysqli_num_rows($checkemail) == 0) {
		  ?>
		
            
		
              <script>
	

                  swal({
                    title: "Reset Failed!",
                    text: "The email you have entered does not exist on the system.",
                    type: "warning",
                  // timer: 6000,
                    showConfirmButton: true
                  }, function(){
                        window.location.href = "forgetpswd.php?email=".$uname."";
                  });

		</script>

		

		<?php
		
	

    }else{
     $sql = "UPDATE `user` SET `password` = '$pswd' WHERE `email`='$uname' ";
     $result = mysqli_query($conn, $sql);
    if ($result) {
     ?>
		
            
		
              <script>
	

                  swal({
                    title: "Reset Success!",
                    text: "Your password is successfully updated.",
                    type: "success",
                  // timer: 6000,
                    showConfirmButton: true
                  }, function(){
                        window.location.href = "admin-login.php";
                  });

		</script>

		

		<?php

		}

	
        }
   }

	
?>
</body>
</html>


