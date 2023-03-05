
<?php

session_start();
include 'Admin/db_connect.php';


if (isset($_POST['submit'])) {
	# code...
	$planID = $_POST['plan'];
     $type = $_SESSION['type'];
	$package = $_POST['package'];
	$member_id = $_SESSION['userID'];
	$start_date = date('Y-m-d');
	$status=1;
	$date = date('Y-m-d');
	
  
	$q="SELECT * FROM `plans` where planID = $planID";
         $r=$conn->query($q);

            while($rows=$r->fetch_array()){ 
										
              $plan = $rows['plan'];  
										
	}
  $qr="SELECT * FROM `user` where userID = $member_id";
         $rrr=$conn->query($qr);

            while($row2=$rrr->fetch_array()){ 
										
              $fname = $row2['firstname'];  
              $email = $row2['email'];  

										
	}
  $qq="SELECT * FROM `packages` where id = $package";
  $rr=$conn->query($qq);

     while($row1=$rr->fetch_array()){ 
             
       $pack = $row1['package']; 
       $amt = $row1['amount'];   
             
}



	if($plan==6){
		$end_date  = date('Y-m-d', strtotime("+ 6 months"));
		
	}elseif($plan==12){
		$end_date  = date('Y-m-d', strtotime("+ 12 months"));
		
	}else{
		
		 $end_date  = date('Y-m-d', strtotime("+ 24 months"));
	}
	
	$gtotal = $amt + 120;


$query = "INSERT INTO `registration_info`(`member_id`, `plan_id`, `package_id`, `start_date`, `end_date`, `status`, `date_created`) VALUES ('$member_id', '$planID', '$package', '$start_date', '$end_date',  '$status', '$date')";
$result = $conn->query($query);

/*
//var_dump($query );
if ($result) { 
?>
	<script>
	   swal({
          title: "Plan Success!",
          text: "Your plan was successfully recorded .",
          type: "success",
         // timer: 6000,
          showConfirmButton: true
        }, function(){
              window.location.href = "plan.php";
        });
        
    
	</script>
	<?php
}else{
	echo "Error: " . $query . "<br>" . $conn->error;
	?>
	<script>
	
	    swal({
          title: "Plan Failed!",
          text: "Your plan was not successfully recorded.",
          type: "warning",
         // timer: 6000,
          showConfirmButton: true
        }, function(){
              window.location.href = "plan.php";
        });
        
    
	</script>
	<?php
	
	
} */


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Form</title>
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
    width: 1050px;
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
.left input {
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
    margin-top: 5px;
    background: #583672;
    color: #fff;
    font-weight: bold;
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

.center {
  margin-left: auto;
  margin-right: auto;
}

#list {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#list td, #list th {
  border: 1px solid #ddd;
  padding: 8px;
}

#list tr:nth-child(even){background-color: #f2f2f2;}

#list tr:hover {background-color: #ddd;}

#list th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #04AA6D;
  color: white;
}



</style>
</head>
<body>
    

<section class="login">
		<div class="login_box">
			<div class="left">
				<div class="top_link"><a href="home.php"><img src="https://drive.google.com/u/0/uc?id=16U__U5dJdaTfNGobB_OpwAJ73vM50rPV&export=download" alt="">Return home</a></div>
				<div class="contact">
					<form action="" method="post">
						<h3>CHECKOUT FORM</h3>
						<label>Duration (Months) </label><input type="text" name="plan" value="<?php echo $plan; ?>" disabled>
						<label>Package </label><input type="text" name ="package" value="<?php echo $pack ?>" disabled>
						<label>Sub total(R) </label><input type="email" name ="total" value="<?php echo $amt ?>" disabled>
						<label>Tag Fee (R) </label><input type="text" name ="tagfee" value="<?php echo 120; ?>" disabled>
						<label>Total (R) </label><input type="text" name ="gtotal" value="<?php echo $gtotal; ?>" disabled>
						<!--<button class="submit" name="register">LET'S GO</button> -->
					</form>
				</div>
			</div>
			<div class="right">
				<div class="right-text">
					<h2>CHECKOUT,  </h2>
					<?php

          $onceoff = $amt * $plan + 120;
            /**
                * @param array $data
							 * @param null $passPhrase
							 * @return string
							 */
							function generateSignature($data, $passPhrase = null) {
								// Create parameter string
								$pfOutput = '';
								foreach( $data as $key => $val ) {
									if(!empty($val)) {
										$pfOutput .= $key .'='. urlencode( trim( $val ) ) .'&';
									}
								}
								// Remove last ampersand
								$getString = substr( $pfOutput, 0, -1 );
								if( $passPhrase !== null ) {
									$getString .= '&passphrase='. urlencode( trim( $passPhrase ) );
								}
								return md5( $getString );
							}

							// Construct variables
							$cartTotal =$gtotal;// This amount needs to be sourced from your application
							$data = array(
								// Merchant details
								'merchant_id' => '17297669',
								'merchant_key' => '1y64qvyb9n2m9',
								'return_url' => 'http://localhost/FitWorldGym/home.php',
								'cancel_url' => 'http://localhost/FitWorldGym/home.php',
								'notify_url' => 'http://localhost/FitWorldGym/notify.php',
								// Buyer details
								'name_first' => $fname,
								
								'email_address'=> $email,
								// Transaction details
								'm_payment_id' => '1234', //Unique payment ID to pass through to notify_url
								'amount' => number_format( sprintf( '%.2f', $cartTotal ), 2, '.', '' ),
								'item_name' => 'Fit World Gym'
							);

							$signature = generateSignature($data);
							$data['signature'] = $signature;

							// If in testing mode make use of either sandbox.payfast.co.za or www.payfast.co.za
							$testingMode = false;
							$pfHost = $testingMode ? 'sandbox.payfast.co.za' : 'www.payfast.co.za';
							$htmlForm = '<form action="https://'.$pfHost.'/eng/process" method="post">';
							foreach($data as $name=> $value)
							{
								$htmlForm .= '<input name="'.$name.'" type="hidden" value="'.$value.'" />';
							}
							$htmlForm .= '<input class="submit" type="submit" value="Pay Monthly"/></form>';
							echo $htmlForm;
            
	?>

<?php


  /**
      * @param array $data
     * @param null $passPhrase
     * @return string
     */
   /* function generateSignature($data, $passPhrase = null) {
      // Create parameter string
      $pfOutput = '';
      foreach( $data as $key => $val ) {
        if(!empty($val)) {
          $pfOutput .= $key .'='. urlencode( trim( $val ) ) .'&';
        }
      }
      // Remove last ampersand
      $getString = substr( $pfOutput, 0, -1 );
      if( $passPhrase !== null ) {
        $getString .= '&passphrase='. urlencode( trim( $passPhrase ) );
      }
      return md5( $getString );
    }  */

    // Construct variables
    $cartTotal =$onceoff;// This amount needs to be sourced from your application
    $data = array(
      // Merchant details
      'merchant_id' => '17297669',
      'merchant_key' => '1y64qvyb9n2m9',
      'return_url' => 'http://localhost/FitWorldGym/home.php',
      'cancel_url' => 'http://localhost/FitWorldGym/home.php',
      'notify_url' => 'http://localhost/FitWorldGym/notify.php',
      // Buyer details
      'name_first' => $fname,
      
      'email_address'=> $email,
      // Transaction details
      'm_payment_id' => '1234', //Unique payment ID to pass through to notify_url
      'amount' => number_format( sprintf( '%.2f', $cartTotal ), 2, '.', '' ),
      'item_name' => 'Fit World Gym'
    );

    $signature = generateSignature($data);
    $data['signature'] = $signature;

    // If in testing mode make use of either sandbox.payfast.co.za or www.payfast.co.za
    $testingMode = false;
    $pfHost = $testingMode ? 'sandbox.payfast.co.za' : 'www.payfast.co.za';
    $htmlForm = '<form action="https://'.$pfHost.'/eng/process" method="post">';
    foreach($data as $name=> $value)
    {
      $htmlForm .= '<input name="'.$name.'" type="hidden" value="'.$value.'" />';
    }
    $htmlForm .= '<input class="submit" type="submit" value="Pay Once Off"/></form>';
    echo $htmlForm;
  
?>
				</div>
				<!--<div class="right-inductor"><img src="https://lh3.googleusercontent.com/fife/ABSRlIoGiXn2r0SBm7bjFHea6iCUOyY0N2SrvhNUT-orJfyGNRSMO2vfqar3R-xs5Z4xbeqYwrEMq2FXKGXm-l_H6QAlwCBk9uceKBfG-FjacfftM0WM_aoUC_oxRSXXYspQE3tCMHGvMBlb2K1NAdU6qWv3VAQAPdCo8VwTgdnyWv08CmeZ8hX_6Ty8FzetXYKnfXb0CTEFQOVF4p3R58LksVUd73FU6564OsrJt918LPEwqIPAPQ4dMgiH73sgLXnDndUDCdLSDHMSirr4uUaqbiWQq-X1SNdkh-3jzjhW4keeNt1TgQHSrzW3maYO3ryueQzYoMEhts8MP8HH5gs2NkCar9cr_guunglU7Zqaede4cLFhsCZWBLVHY4cKHgk8SzfH_0Rn3St2AQen9MaiT38L5QXsaq6zFMuGiT8M2Md50eS0JdRTdlWLJApbgAUqI3zltUXce-MaCrDtp_UiI6x3IR4fEZiCo0XDyoAesFjXZg9cIuSsLTiKkSAGzzledJU3crgSHjAIycQN2PH2_dBIa3ibAJLphqq6zLh0qiQn_dHh83ru2y7MgxRU85ithgjdIk3PgplREbW9_PLv5j9juYc1WXFNW9ML80UlTaC9D2rP3i80zESJJY56faKsA5GVCIFiUtc3EewSM_C0bkJSMiobIWiXFz7pMcadgZlweUdjBcjvaepHBe8wou0ZtDM9TKom0hs_nx_AKy0dnXGNWI1qftTjAg=w1920-h979-ft" alt=""></div> -->
			</div>
		</div>
    
  
			
	</section>
						
<?php
       
   }
?>	
</body>
</body>
</html>


