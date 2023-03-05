<?php
//include "config.php";
include 'Admin/db_connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <style>img{
	width: 100%;
}
.login {
    height: 1000px;
    width: 100%;
    background: radial-gradient(#653d84, #332042);
    position: relative;
}
.login_box {
    width: 800px;
    height: 600px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    background: #fff;
    border-radius: 10px;
    box-shadow: 1px 4px 22px -8px #0004;
    display: flex;
    overflow: hidden;
}
.login_box .left{
  width: 41%;
  height: 100%;
  padding: 25px 25px;
  
}
.login_box .right{
  width: 59%;
  height: 100%  
}
.left .top_link a {
    color: #452A5A;
    font-weight: 400;
}
.left .top_link{
  height: 20px
}
.left .contact{
	display: flex;
    align-items: center;
    justify-content: center;
    align-self: center;
    height: 100%;
    width: 73%;
    margin: auto;
}
.left h3{
  text-align: center;
  margin-bottom: 40px;
}
.left input, select {
    border: none;
    width: 80%;
    margin: 15px 0px;
    border-bottom: 1px solid #4f30677d;
    padding: 7px 9px;
    width: 100%;
    overflow: hidden;
    background: transparent;
    font-weight: 600;
    font-size: 14px;
}
.left{
	background: linear-gradient(-45deg, #dcd7e0, #fff);
}
.submit {
    border: none;
    padding: 15px 70px;
    border-radius: 8px;
    display: block;
    margin: auto;
    margin-top: 1px;
    background: #583672;
    color: #fff;
    font-weight: none;
    -webkit-box-shadow: 0px 9px 15px -11px rgba(88,54,114,1);
    -moz-box-shadow: 0px 9px 15px -11px rgba(88,54,114,1);
    box-shadow: 0px 9px 15px -11px rgba(88,54,114,1);
}



.right {
	background: linear-gradient(212.38deg, rgba(2,2,2, 0.7) 0%, rgba(175, 70, 189, 0.71) 100%),url('img/gallery5.png');
	color: #fff;
	position: relative;
}

.right .right-text{
  height: 100%;
  position: relative;
  transform: translate(0%, 45%);
}
.right-text h2{
  display: block;
  width: 100%;
  text-align: center;
  font-size: 50px;
  font-weight: 500;
}
.right-text h5{
  display: block;
  width: 100%;
  text-align: center;
  font-size: 19px;
  font-weight: 400;
}

.right .right-inductor{
  position: absolute;
  width: 70px;
  height: 7px;
  background: #fff0;
  left: 50%;
  bottom: 70px;
  transform: translate(-50%, 0%);
}
.top_link img {
    width: 28px;
    padding-right: 7px;
    margin-top: -3px;
}



</style>
</head>
<body>
    

<section class="login">
		<div class="login_box">
			<div class="left">
				<div class="top_link"><a href="index.php"><img src="https://drive.google.com/u/0/uc?id=16U__U5dJdaTfNGobB_OpwAJ73vM50rPV&export=download" alt="">Return home</a></div>
				<div class="contact">
					<form action="adultsignup.php" method="post" enctype="multipart/form-data">
						<h3>SIGN UP</h3>
						<input type="text" name="fname"placeholder="Firtname" required>
						<input type="text" name ="lname"placeholder="Lastname" required>
						<input type="email" name ="email"placeholder="Email" required>
						<input type="text" name ="cellphone"placeholder="Cellphone No." required>
						   
						<input type="text" name ="password"placeholder="password" required>
            
      
						    

				</div>
			</div>
			<div class="right">
			
			  
			    
				<div class="right-text">
					<h2>SIGN UP WITH,  </h2>
					<h5>FIT WORLD GYM</h5>
          <input type="submit" class="submit" name ="register" value="Register">
          
					</form>
				</div>
        
				<div class="right-inductor"><img src="https://lh3.googleusercontent.com/fife/ABSRlIoGiXn2r0SBm7bjFHea6iCUOyY0N2SrvhNUT-orJfyGNRSMO2vfqar3R-xs5Z4xbeqYwrEMq2FXKGXm-l_H6QAlwCBk9uceKBfG-FjacfftM0WM_aoUC_oxRSXXYspQE3tCMHGvMBlb2K1NAdU6qWv3VAQAPdCo8VwTgdnyWv08CmeZ8hX_6Ty8FzetXYKnfXb0CTEFQOVF4p3R58LksVUd73FU6564OsrJt918LPEwqIPAPQ4dMgiH73sgLXnDndUDCdLSDHMSirr4uUaqbiWQq-X1SNdkh-3jzjhW4keeNt1TgQHSrzW3maYO3ryueQzYoMEhts8MP8HH5gs2NkCar9cr_guunglU7Zqaede4cLFhsCZWBLVHY4cKHgk8SzfH_0Rn3St2AQen9MaiT38L5QXsaq6zFMuGiT8M2Md50eS0JdRTdlWLJApbgAUqI3zltUXce-MaCrDtp_UiI6x3IR4fEZiCo0XDyoAesFjXZg9cIuSsLTiKkSAGzzledJU3crgSHjAIycQN2PH2_dBIa3ibAJLphqq6zLh0qiQn_dHh83ru2y7MgxRU85ithgjdIk3PgplREbW9_PLv5j9juYc1WXFNW9ML80UlTaC9D2rP3i80zESJJY56faKsA5GVCIFiUtc3EewSM_C0bkJSMiobIWiXFz7pMcadgZlweUdjBcjvaepHBe8wou0ZtDM9TKom0hs_nx_AKy0dnXGNWI1qftTjAg=w1920-h979-ft" alt=""></div>
			</div>
		</div>
    
	</section>
</body>
</body>
</html>



<?php
include "config.php";

if (isset($_POST['register'])) {
	# code...
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$cellphone = $_POST['cellphone'];
	$password = $_POST['password'];
	$pswd=md5($password);
  $type = 'Adult';
  $role = 'Member';
	$date = date('Y-m-d');
	$sql = "select * from user  where email = '$email' ";
    $results = mysqli_query($conn, $sql);
	$count = mysqli_num_rows($results);
	if($count>0){?>
		<script>
		window.alert('This email is already existing, try another one');
		window.location.href="signup.php";
		</script>
		<?php
	}elseif(strlen($cellphone)<10 || strlen($cellphone)>10 || substr($cellphone,0,1)!=0){  ?>
		<script>
		window.alert('You have entered an invalid number, try again');
		window.location.href="signup.php";
		</script>
          <?php
	}else{
$query = "INSERT INTO `user`(`firstname`, `lastname`, `email`, `cellphone`, `role`, `date_registered`, `password`, `type`, `status`) VALUES ('$fname', '$lname', '$email', '$cellphone', '$role',  '$date', '$pswd', '$type', 'Approved')";

$result = $conn->query($query);

if ($result) { ?>
	<script>
	    swal({
          title: "Register Success!",
          text: "You successfully registered with Fit World Gym.",
          type: "success",
         // timer: 6000,
          showConfirmButton: true
        }, function(){
              window.location.href = "admin-login.php";
        });
        
    
	</script>
	<?php
}else{
	?>
	<script>
	    swal({
          title: "Register Failed!",
          text: "Your registration with Fit World Gym was not successfully.",
          type: "warning",
         // timer: 6000,
          showConfirmButton: true
        }, function(){
              window.location.href = "login.html";
        });
        
    
	</script>
	<?php
	
	
         }
    }
    
}

?>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
<script src="hide-show-fields-form.js"></script>