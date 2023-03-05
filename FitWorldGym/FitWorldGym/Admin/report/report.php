<?php 
session_start();
include('../db_connect.php');


$res = mysqli_query($conn,"SELECT * from user where role = 'Member' AND type = 'Student' ");
$student = mysqli_num_rows($res);

$ress = mysqli_query($conn,"SELECT * from user where role = 'Member' AND type = 'Adult' ");
$adult = mysqli_num_rows($ress);

$resss = mysqli_query($conn,"SELECT * from user where role = 'Member' AND type = 'Scholar' ");
$scholar = mysqli_num_rows($resss);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Fitworldgym | Report</title>
    <link rel="stylesheet" href="style.css" media="all" />
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="logo.png">
      </div>
      <h1>REGISTERED USERS REPORT</h1>
      <div id="company" class="clearfix">
        <div><strong>FIT WORLD GYM</strong></div>
        <div>Downtown, Next to Foschin store<br /> Emalahleni</div>
        <div>(+27) 13 656 2010</div>
        <div><a href="mailto:info@fitworldgym.com">info@fitworldgym.com</a></div>
      </div>
      <div id="project">
        <div><span><strong>FIT WORLD GYM REPORT</strong></span></div>
        <div><span>ISSUED BY:</span>  <?php echo $_SESSION['fname']; ?></div>
        <div><span>DATE: </span>  <?php echo date('Y-m-d');   ?></div>
       
      </div>
    </header>
    <main>
      <table class="center">
        <thead>
          <tr>
            <th class=""><b>PERSON TYPE</b></th>
           
            <th><b>TOTAL</b></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="service">Adults</td>
            
            <td class="total"><?php echo $adult; ?></td>
          </tr>
          <tr>
            <td class="service">Students</td>
            
            <td class="total"><?php echo $student; ?></td>
          </tr>
          <tr>
            <td class="service">Scholar</td>
           
            <td class="total"><?php echo $scholar; ?></td>
          </tr>
	   <tr>
            <td class="desc" style="font-size:20px"><b>Total of Users:</b></td>
           
            <td class="total"><b><?php echo $scholar+$student+$adult; ?></b></td>
          </tr>
          
        
        
        </tbody>
      </table>
      <div id="notices">
       
          <button class="submit" onClick="window.print()">Print Report </button>
      </div>
    </main>
  
  </body>
</html>